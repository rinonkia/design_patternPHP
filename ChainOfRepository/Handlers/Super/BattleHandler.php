<?php

abstract class BattleHandler
{
    private $next_handler = null;

    public function setHandler(BattleHandler $handler)
    {
        $this->next_handler = $handler;
        return $this;
    }

    public function getNextHandler()
    {
        return $this->next_handler;
    }

        public function battle($level)
    {
        if (! $this->battleResult($level)) {
            return $this->getMessage();
        } elseif (! is_null($this->getNextHandler())) {
            return $this->getNextHandler()->battle($level);
        } else {
            return "You all win! story clear!";
        }
    }

    protected abstract function battleResult($level);

    protected abstract function getMessage();
}
