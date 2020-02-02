<?php

class Item
{
    private $id;

    private $name;

    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function display()
    {
        echo sprintf('%s \\%s<br>', $this->getName(), number_format($this->getPrice()));
    }
}