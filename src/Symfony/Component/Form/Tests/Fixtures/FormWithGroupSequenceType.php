<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Fixtures;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GroupSequence;

class FormWithGroupSequenceType extends AbstractType
{
    public function __construct(private readonly bool $addValidationGroups)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('child', FormWithGroupSequenceChildType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', GroupSequenceNestedChildren::class);

        if ($this->addValidationGroups) {
            $resolver->setDefault('validation_groups', new GroupSequence(['GroupSequenceNestedChildren', 'my_group']));
        }
    }
}
