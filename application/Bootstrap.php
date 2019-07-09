<?php

class Bootstrap extends \Yaf\Bootstrap_Abstract
{

    public function _initConfig(\Yaf\Dispatcher $dispatcher){
        ini_set('display_errors','on');
        error_reporting(E_ALL & ~E_NOTICE);
    }

    public function _initDb(\Yaf\Dispatcher $dispatcher)
    {
    }

    public function _initComponents(\Yaf\Dispatcher $dispatcher)
    {
        \Yaf\Registry::set('config',\Yaf\Application::app()->getConfig());
    }

    public function _initTest(\Yaf\Dispatcher $dispatcher)
    {

    }

    /*
    public function _initRoute(\Yaf\Dispatcher $dispacher)
    {
        $router = $dispacher->getRouter();

        $router->addRoute('simple',new \Yaf\Route\Simple('m','c','a'));
    }
    */

    /*
    public function _initRoute(\Yaf\Dispatcher $dispacher)
    {
        $router = $dispacher->getRouter();

        $router->addRoute('supervar',new \Yaf\Route\Supervar('r'));
    }
    */

    /*
    public function _initRoute(\Yaf\Dispatcher $dispacher)
    {
        $router = $dispacher->getRouter();
        $router->addRoute('regex',
            new \Yaf\Route\Regex(
                '#regex/(\d+)/(\d+)#',
                [
                    'module'      => 'rest',
                    'controller'  => 'index',
                    'action'      => 'index',
                ],
                [
                    1 => 'param1',
                    2 => 'param2',
                ]
            )
        );
    }
    */

    /*
    public function _initRoute(\Yaf\Dispatcher $dispacher)
    {
        $router = $dispacher->getRouter();
        $router->addRoute('rewrite',
            new \Yaf\Route\Rewrite(
                'rewrite/:param1/:param2',
                [
                    'module'      => 'rest',
                    'controller'  => 'index',
                    'action'      => 'index',
                ]
            )
        );
    }
    */

}