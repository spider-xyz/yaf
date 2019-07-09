<?php

namespace extend;

use Yaf\Controller_Abstract;
use Yaf\Dispatcher;

class ControllerLayout extends Controller_Abstract
{
    protected $_layout;

    public function init()
    {
        \Yaf\Dispatcher::getInstance()->disableView();
    }

    protected function render($tpl, array $parameters = [])
    {
        Dispatcher::getInstance()->autoRender(false);
        $content = parent::render($tpl, $parameters);
        if ($parameters['forbidLayout']) {
            return $content;
        }
        $this->_layout = isset($this->_layout) ? $this->_layout : 'layouts/main.phtml';
        return $this->_view->render($this->_layout, [
            'content' => $content
        ]);
    }

    protected function display($tpl, array $parameters = [])
    {
        $content = $this->render($tpl, $parameters);
        $this->_response->setBody($content);
    }
}