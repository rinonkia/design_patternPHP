<?php

require_once __DIR__ . '/Interfaces/CommandInterface.php';
require_once __DIR__ . '/../Receiver/Ramen.php';

class ShioCommand implements CommandInterface
{
    private $category = 'しお';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /**
         * 塩ラーメンをくる処理
         */
        $this->ramen->call();
    }
}
