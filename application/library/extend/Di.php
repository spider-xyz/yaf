<?php

namespace extend;


use Yaf\Registry;

class Di
{

    private function __construct()
    {
    }

    private function __clone()
    {
        $config = [
            'class' => \Redis::class,
            'host' => '127.0.0.1',
            'port' => 6379
        ];
    }

    /**创建对象
     * @var $config array
    */
    public static function createObject($config)
    {
        $class = $config['class'];
        unset($config['class']);
        $object = new $class();
        self::block($object, $config);
        if (method_exists($object, 'init')) {
            $object->init();
        }
        return $object;
    }
    /**放入容器
     * @var $name string
     * @var $config array
    */
    public static function set($name, $config)
    {
        return Registry::set($name, $config);
    }

    public static function get($name)
    {
        $object = Registry::get($name);
        if (is_array($object) && isset($object['class'])) {
            $instance = self::createObject($object);
            Registry::set($name, $instance);
            return $instance;
        }
        return $object;
    }

    /**动态组件
     * @var $config array
     * @var $defaultClass string
    */
    public static function insure($config, $defaultClass = null)
    {
        if (is_array($config)) {
            if (isset($config['class'])) {
                return self::createObject($config);
            }
            if (isset($defaultClass)) {
                $config['class'] = $defaultClass;
                return self::createObject($config);
            }
        }
        return $config;
    }

    /**给对象赋值
     * @var $object object
     * @var $deprecated array
     * */
    public static function block($object, $properties = [])
    {
        foreach ($properties as $property => $value) {
            $object->$property = $value;
        }
    }

}