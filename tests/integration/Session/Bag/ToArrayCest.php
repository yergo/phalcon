<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Integration\Session\Bag;

use IntegrationTester;
use Phalcon\Session\Bag;
use Phalcon\Tests\Fixtures\Traits\DiTrait;

/**
 * Class ToArrayCest
 *
 * @package Phalcon\Tests\Integration\Session\Bag
 */
class ToArrayCest
{
    use DiTrait;

    /**
     * Tests Phalcon\Session\Bag :: toArray()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2020-09-09
     */
    public function sessionBagToArray(IntegrationTester $I)
    {
        $I->wantToTest('Session\Bag - toArray()');

        $this->setNewFactoryDefault();
        $this->setDiService('sessionStream');
        $data = [
            'one'   => 'two',
            'three' => 'four',
            'five'  => 'six',
        ];

        $collection = new Bag('BagTest');
        $collection->init($data);
        $I->assertEquals($data, $collection->toArray());
    }
}
