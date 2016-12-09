<?php

/**
 * Parte do pacote Suporte.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Contperfil de Acesso
 * @version    0.0.1
 * @author     Robson Sampaio
 * @license    BSD License (3-clause)
 * @copyright  (c) 2016, Robson Sampaio
 * @link       http://xfusionsolution.com.br
 */

namespace Xfusionsolution\Suporte\Tests\Handlers;

use PHPUnit_Framework_TestCase;
use Illuminate\Container\Container;
use Xfusionsolution\Suporte\Handlers\EventHandler;

class EventHandlerTest extends PHPUnit_Framework_TestCase
{
    /** @test **/
    public function it_can_be_instantiated()
    {
        new EventHandlerStub(new Container);
    }

    /** @test */
    public function it_can_retrieve_dynamic_objects_from_the_container()
    {
        $container = new Container;
        $container->bind('foo', function () { return 'bar'; });

        $handler = new EventHandlerStub($container);

        $this->assertSame('bar', $handler->foo);
    }
}

class EventHandlerStub extends EventHandler
{
}
