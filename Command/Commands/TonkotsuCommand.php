<?php

require_once __DIR__ . '/Interfaces/CommandInterface.php';
require_once __DIR__ . '/../Receiver/Ramen.php';

class TonkotsuCommand implements CommandInterface
{
    private $category = '豚骨';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /**
         * 豚骨ラーメンをくる処理
         */
        $this->ramen->call();
    }
}
