<?php

require_once __DIR__ . '/Super/BattleHandler.php';

class HondaBattleHandler extends BattleHandler
{
    private $level = 10;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return "Honda win! You lose\n";
    }
}
