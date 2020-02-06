<?php

class Engineitem
{
    private $id;

    private $name;

    private $model;

    public function __construct($id, $name, $model)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->model = $model;
    }

    public function getid()
    {
        return $this->id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getmodel()
    {
        return $this->model;
    }
}
