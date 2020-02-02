<?php

class Choose
{
    private $chooses = [];

    public function getChooses()
    {
        return $this->chooses;
    }

    public function add($item)
    {
        $this->chooses[] = $item;
    }
}