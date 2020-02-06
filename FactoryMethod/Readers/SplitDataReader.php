<?php

require_once __DIR__ . '/../Interfaces/DataReaderInterface.php';

class SplitDataReader implements DataReaderInterface
{
    protected $regions;

    protected $prefectures;

    public function __construct($json_array)
    {
        $this->regions = $this->convert($json_array[0]);
        $this->prefectures = $this->convert($json_array[1]);
    }

    public function convert($json_url)
    {
        return json_decode(file_get_contents($json_url));
    }

    public function show()
    {
        foreach ((array) $this->regions as $r) {
            echo $r->name . "\n";
            $region_id = $r->id;
            foreach ((array) $this->prefectures->$region_id as $p) {
                echo $p->name . " ";
            }
            echo "\n\n";
        }
    }
}
