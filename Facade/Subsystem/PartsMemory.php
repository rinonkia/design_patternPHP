<?php

require_once __DIR__ . '/Item.php';

class PartsMemory
{
    private $items;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, '4GB', 10000),
            2 => new Item(2, '8GB', 20000),
            3 => new Item(3, '16GB', 30000)
        ];
    }

    public function getItem($id)
    {
        return $this->items[$id];
    }
}