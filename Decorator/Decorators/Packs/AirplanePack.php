<?php

require_once __DIR__ . '/../PlanDecorator.php';
require_once __DIR__ . '/../../Interfaces/PlanInterface.php';

class AirPlanePack extends PlanDecorator
{
    private $airlines;
    private $additional_cost = 0;

    public function __construct(PlanInterface $obj, $airlines, $additional_cost)
    {
        parent::__construct($obj);
        $this->airlines = $airlines;
        $this->additional_cost = $additional_cost;
    }

    public function getPlan()
    {
        return sprintf('%s / 飛行機パック（%s）', parent::getPlan(), $this->airlines);
    }

    public function getCost()
    {
        return parent::getCost() + $this->additional_cost;
    }
}
