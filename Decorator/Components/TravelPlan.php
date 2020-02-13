<?php

require_once __DIR__ . '/../Interfaces/PlanInterface.php';

class TravelPlan implements PlanInterface
{
    private $plan;

    private $cost = 0;

    private $duration;

    public function getPlan()
    {
        return $this->plan = $text;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}
