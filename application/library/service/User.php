<?php

namespace service;

class User
{
    private $_db;

    public function __construct()
    {
        $this->_db = new \dbbase\MysqlUser();
    }

    public function getInfo()
    {
        return $this->_db->getInfo();
    }

}