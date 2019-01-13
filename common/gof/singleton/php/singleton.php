<?php

// namespace DesignPatterns\Creational\Singleton;
// 因为是本地测试，当前目录测试，没有其他目录，所以不需要命名控制分割。

final class Singleton
{
	/**
	 * @var Singleton
	 */
	private static $instance;

	/**
	 * 通过懒加载获得实例（在第一次的时候创建）
	 */
	public static function getInstance(): Singleton
	{
		if (static::$instance === null) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
    * 不允许从外部调用以防止创建多个实例
    * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
    */
    private function __construct()
    {
	}

	/**
    * 防止实例被克隆（这会创建实例的副本）
    */
    private function __clone()
    {
	}

	/**
    * 防止反序列化（这将创建它的副本）
    */
    private function __wakeup()
    {
    }

}