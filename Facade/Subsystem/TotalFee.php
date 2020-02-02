<?php

class TotalFee
{
    private $total = 0;

    public function add($price)
    {
        $this->total = $this->total + $price;
    }

    public function getTotal()
    {
        return sprintf('\\%s', number_format($this->total));
    }
}