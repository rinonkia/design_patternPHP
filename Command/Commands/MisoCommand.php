<?php

require_once __DIR__ . '/Interfaces/CommandInterface.php';
require_once __DIR__ . '/../Receiver/Ramen.php';

class MisoCommand implements CommandInterface
{
    private $category = '味噌';

    private $ramen;

    public function __construct(Ramen $ramen)
    {
        $this->ramen = $ramen;
        $this->ramen->setName($this->category);
    }

    public function execute()
    {
        /**
         * 味噌ラーメンをくる処理
         */
        $this->ramen->call();
    }
}
