<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-console/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Mvc\Console\Service;

use Interop\Container\ContainerInterface;
use Laminas\Console\Console;
use ReflectionProperty;

trait FactoryEnvironmentTrait
{
    private function setConsoleEnvironment($isConsole = true)
    {
        $r = new ReflectionProperty(Console::class, 'isConsole');
        $r->setAccessible(true);
        $r->setValue((bool) $isConsole);
    }

    private function createContainer()
    {
        return $this->prophesize(ContainerInterface::class)->reveal();
    }
}
