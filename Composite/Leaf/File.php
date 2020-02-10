<?php

require_once __DIR__ . '/../FileSystem.php';

class File extends FileSystem
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getName()
    {
        return parent::getName();
    }

    public function add(FileSystem $file)
    {
        throw new Exception("This method is not allowed.");
    }
}
