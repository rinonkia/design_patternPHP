<?php

require_once __DIR__ . '/Subsystem/MachineModel.php';
require_once __DIR__ . '/Subsystem/PartsCpu.php';
require_once __DIR__ . '/Subsystem/PartsMemory.php';
require_once __DIR__ . '/Subsystem/PartsHdd.php';
require_once __DIR__ . '/Subsystem/TotalFee.php';
require_once __DIR__ . '/Subsystem/Choose.php';

class BtoFacade
{
    private $mathine_model;
    private $parts_cpu;
    private $parts_memory;
    private $parts_hdd;
    private $total_fee;
    private $choose;

    public function __construct()
    {
        $this->machine_model = new MachineModel();
        $this->parts_cpu     = new PartsCpu();
        $this->parts_memory  = new PartsMemory();
        $this->parts_hdd     = new PartsHdd();
        $this->total_fee     = new TotalFee();
        $this->choose        = new Choose();
    }

    public function ChooseModel($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    public function ChooseCpu($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    public function ChooseMemory($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    public function ChooseHdd($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    public function Total()
    {
        foreach ($this->choose->getChooses() as $item) {
            $item->display();
        }
        echo sprintf('<br>合計 %s', $this->total_fee->getTotal());
    }
}