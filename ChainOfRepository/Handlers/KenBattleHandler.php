<?php

require_once __DIR__ . '/Super/BattleHandler.php';

class KenBattleHandler extends BattleHandler
{
    private $level = 10;

    public function battleResult($level)
    {
        return ($level > $this->level);
    }

    public function getMessage()
    {
        return "Ken win! You lose\n";
    }
}
