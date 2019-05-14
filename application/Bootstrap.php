<?php

class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    public function _initDb()
    {
        print_r('Bootstrap _initDb');
        echo '<br/>';
    }

    public function _initComponents()
    {
        print_r('Bootstrap _initComponents');
        echo '<br/>';
    }

    public function _initTest()
    {
        print_r('Bootstrap _initTest');
        echo '<br/>';
    }
}