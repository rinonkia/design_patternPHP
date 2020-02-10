<?php

require_once __DIR__ . '/FileSystem.php';

class Dir extends FileSystem
{
    private $files;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->files = [];
    }

    public function add(FileSystem $file)
    {
        array_push($this->files, $file);
    }

    public function display()
    {
        parent::display();
        foreach ($this->files as $file) {
            echo $file->display();
        }
    }
}
