<?php

class IndexController extends \Yaf\Controller_Abstract{

    public function indexAction(){
        echo 1;exit;
        $this->render('index');
    }

}