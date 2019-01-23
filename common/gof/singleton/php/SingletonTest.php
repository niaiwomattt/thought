<?php

// namespace DesignPatterns\Creational\Singleton\Tests;

// use DesignPatterns\Creational\Singleton\Singleton;
// 因为是本地测试，当前目录测试，没有其他目录，所以不需要命名控制分割。
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}