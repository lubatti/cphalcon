<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Cli\Cli\Router\Route;

use CliTester;

class GetNameCest
{
    /**
     * Tests Phalcon\Cli\Router\Route :: getName()
     *
     * @param CliTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cliRouterRouteGetName(CliTester $I)
    {
        $I->wantToTest("Cli\Router\Route - getName()");
        $I->skipTest("Need implementation");
    }
}