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

namespace PhpInteractor\Tests\Interactor;

use PhpInteractor\DependencyMap;
use PhpInteractor\Helper\AbstractInteractor;
use PhpInteractor\Tests\Request\GoodInteractor1Request;

class GoodInteractor1 extends AbstractInteractor
{
    /** Request $request */
    private $request;

    public function __construct(GoodInteractor1Request $request, DependencyMap $dependencyMap)
    {
        $this->request = $request;
    }

    /** {@inheritDoc} */
    public function execute()
    {

    }
}
