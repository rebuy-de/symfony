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
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\GroupSequenceProviderInterface;
use Symfony\Component\Validator\Tests\Constraints\Fixtures\ChildA;

class GroupSequenceChild
{
    #[Assert\Length(exactly: 2, groups: ['my_group'])]
    public $a;
}
