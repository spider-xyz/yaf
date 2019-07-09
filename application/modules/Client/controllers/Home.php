<?php

class HomeController extends \extend\ControllerLayout
{

    public function indexAction()
    {
        echo json_encode(Yaf\Registry::get('config')->toArray(),JSON_UNESCAPED_UNICODE);
    }

    public function userAction()
    {
        echo 1;
    }

    public function demoAction()
    {
        $user = new \service\User();
        $user_info = $user->getInfo();
        print_r($user_info);
    }

}