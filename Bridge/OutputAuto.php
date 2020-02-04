<?php

require_once __DIR__ . '/FileDataManage.php';
require_once __DIR__ . '/Output.php';

class OutputAuto extends Output
{
    public function __construct(FileDataManage $dataManage)
    {
        parent::__construct($dataManage);
    }

    public function autoDisplay()
    {
        while ($this->data_manager->getPointer() !== $this->data_manager->getTotalCount()) {
            $this->data_manager->display();
        }
    }
}