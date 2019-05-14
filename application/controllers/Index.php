<?php

class IndexController extends Yaf\Controller_Abstract
{
    public $_module;
    public $_name;
    public $_request;
    public $_response;

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        echo 'index';
    }
}