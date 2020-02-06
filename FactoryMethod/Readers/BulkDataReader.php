<?php

require_once __DIR__ . '/../Interfaces/DataReaderInterface.php';

class BulkDataReader implements DataReaderInterface
{
    protected $data;

    public function __construct($json)
    {
        $this->data = $this->convert($json);
    }

    public function convert($json_url)
    {
        return json_decode(file_get_contents($json_url));
    }

    public function show()
    {
        foreach ((array) $this->data as $d) {
            echo $d->name . "\n";
            foreach ($d->prefecture as $c) {
                echo $c->name . " ";
            }
            echo "\n\n";
        }
    }
}
