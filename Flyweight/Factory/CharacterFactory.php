<?php

require_once __DIR__ . '/../Character.php';

class CharacterFactory
{
    private static $instance;

    private $Characters = [];

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new CharacterFactory();
        }
        return self::$instance;
    }

    public function addCharacter($char)
    {
        if (!array_key_exists($char, $this->Characters)) {
            $this->Characters[$char] = new Character($char);
        }
    }

    public function getCharacters()
    {
        return $this->Characters;
    }

    public function __clone()
    {
        throw new \Exception('This Instance can not be cloned');
    }

    public function __wakeup()
    {
        throw new \Exception('This Instance is not unserialize');
    }
}
