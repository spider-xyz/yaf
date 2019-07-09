<?php

class Logic{

    public $dataAccess;

    public function __construct()
    {
        $this->dataAccess = Factory::get('dataAccess');
    }

    public function getInfo($id)
    {
        $this->dataAccess->getInfo($id);
    }

}