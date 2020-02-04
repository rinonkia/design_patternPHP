<?php

require_once __DIR__ . '/Interfaces/FileDataManageInterface.php';

class FileDataManage implements FileDataManageInterface
{
    private $json_path;
    
    private $data;

    private $data_total = 0;

    private $pointer = 0;

    public function __construct($json)
    {
        $this->json_path = $json;
    }

    public function read()
    {
        $this->data = json_decode(file_get_contejts($this->json_path));
        $this->data_total = count($this->data);
    }

    public function display()
    {
        echo sprintf(
            "id: %s / name: %s / category: %s \n",
            $this->data[$this->pointer]->id,
            $this->data[$this->pointer]->name,
            $this->data[$this->pointer]->category
        );
        $this->pointer++;
    }

    public function getTotalCount()
    {
        return $this->data_total;
    }

    public function getPointer()
    {
        return $this->pointer;
    }
}