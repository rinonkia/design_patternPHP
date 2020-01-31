<?php

require_once __DIR__ . '/../Readers/BulkDataReader.php';
require_once __DIR__ . '/../Readers/SplitDataReader.php';

class ReaderFactory
{
    public function create($json)
    {
        return $this->createReader($json);
    }

    public function createReader($json)
    {
        if(is_array($json)) {
            echo "pattern A\n";
            return new SplitDataReader($json);
        } else {
            echo "pattern B\n";
            return new BulkDataReader($json);
        }
    }
}