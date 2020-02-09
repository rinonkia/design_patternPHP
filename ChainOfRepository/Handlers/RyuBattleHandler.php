<?php

require_once __DIR__ . '/Super/BattleHandler.php';

class RyuBattleHandler extends BattleHandler
{
    private $level = 10;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return "Ryu win! You lose\n";
    }
}
