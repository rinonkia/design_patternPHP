<?php

abstract class FileSystem
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public abstract function add(FileSystem $file);

    public function display()
    {
        echo sprintf("%s\n", $this->getName());
    }
}
