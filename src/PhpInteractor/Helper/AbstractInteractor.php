<?php

/**
 * This file is part of the PhpInteractor package
 *
 * @package    PhpInteractor
 * @author     Mark Badolato <mbadolato@cybernox.com>
 * @copyright  Copyright (c) CyberNox Technologies. All rights reserved.
 * @license    http://www.opensource.org/licenses/MIT MIT License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpInteractor\Helper;

use PhpInteractor\InteractorInterface;

abstract class AbstractInteractor implements InteractorInterface
{
    /** {@inheritDoc} */
    public function getName()
    {
        $parts = $this->getClassNameComponents();

        return end($parts);
    }

    private function getClassNameComponents()
    {
        return explode('\\', get_class($this));
    }
}
