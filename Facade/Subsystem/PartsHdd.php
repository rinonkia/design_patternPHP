<?php

require_once __DIR__ . '/Item.php';

class PartsHdd
{
    private $items;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, 'SSD_128GB', 10000),
            2 => new Item(2, 'SSD_256GB', 20000),
            3 => new Item(3, 'SSD_512GB', 30000)
        ];
    }

    public function getItem($id)
    {
        return $this->items[$id];
    }
}