<?php

require_once __DIR__ . '/FileDataManage.php';
class Output
{
    protected $data_manager;

    public function __construct(FileDataManage $dataManage)
    {
        $this->data_manager = $dataManage;
    }

    public function read()
    {
        $this->data_manager->read();
    }

    public function display()
    {
        $this->data_manager->display();
    }
}