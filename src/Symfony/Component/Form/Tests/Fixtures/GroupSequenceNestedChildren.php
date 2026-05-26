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

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\GroupSequence;
use Symfony\Component\Validator\GroupSequenceProviderInterface;

#[Assert\GroupSequenceProvider]
class GroupSequenceNestedChildren implements GroupSequenceProviderInterface
{
    #[Assert\NotBlank]
    public $firstName;

    #[Assert\NotBlank]
    public $lastName;

    #[Assert\Valid]
    public ?GroupSequenceChild $child = null;

    public function getGroupSequence(): array|GroupSequence
    {
        return ['GroupSequenceNestedChildren', 'my_group'];
    }
}
