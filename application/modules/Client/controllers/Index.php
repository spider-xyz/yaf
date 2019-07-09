<?php


class IndexController extends \extend\ControllerLayout
{

    public function indexAction()
    {
        echo json_encode(Yaf\Registry::get('config')->toArray(),JSON_UNESCAPED_UNICODE);
    }

    public function userAction()
    {
        echo $this->_view->render('index/user.phtml',[
            'uid'=>uniqid(),
            'name'=>'zhangsanfeng'
        ]);
        \Yaf\Dispatcher::getInstance()->autoRender(false);
    }
}