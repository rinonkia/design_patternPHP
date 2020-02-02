<?php

require_once __DIR__ . '/Item.php';

class MachineModel
{
    private $item;

    public function __construct()
    {
        $this->items = [
            1 => new Item(1, 'ミニタワー', 10000),
            2 => new Item(2, 'ミドルタワー', 20000),
            3 => new Item(3, 'フルタワー', 30000)
        ];
    }

    public function getItem($id)
    {
        return $this->items[$id];
    }
}