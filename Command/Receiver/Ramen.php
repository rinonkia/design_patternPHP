<?php

class Ramen
{
    private $name;

    private $ramen;

    public function setName($name)
    {
        return $this->name = sprintf('%s', $name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRamen($ramen)
    {
        $this->ramen = $ramen;
    }

    public function getRamen()
    {
        return $this->ramen;
    }

    public function call()
    {
        echo sprintf("%s できたよー！\n", $this->getName());
    }
}
