<?php

require_once __DIR__ . '/Item.php';

class PartsCpu
{
    private $items;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, 'Core i3 プロセッサー', 10000),
            2 => new Item(2, 'Core i5 プロセッサー', 20000),
            3 => new Item(3, 'Core i7 プロセッサー', 30000)
        ];
    }
    
    public function getItem($id)
    {
        return $this->items[$id];
    }
}