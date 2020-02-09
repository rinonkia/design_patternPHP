<?php

require_once __DIR__ . '/Interfaces/CommandInterface.php';
require_once __DIR__ . '/../Receiver/Ramen.php';

class ShoyuCommand implements CommandInterface
{
    private $category = 'しょうゆ';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /**
         * 醤油ラーメンをくる処理
         */
        $this->ramen->call();
    }
}
