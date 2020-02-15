<?php

class Character
{
    private $id;
    private $character;

    public function __construct($character)
    {
        $this->id = hash('sha256', time());
        $this->character = $character;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCharacter()
    {
        return $this->character;
    }
}
