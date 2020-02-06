<?php

require_once __DIR__ . '/../TireInterface.php';
require_once __DIR__ . '/../../Items/TireItem.php';

class LaravelTire implements TireInterface
{
    protected $json;

    public function __construct()
    {
        $this->json = __DIR__ . '/../../json/tire.json';
    }

    public function partList()
    {
        $part_map = json_decode(file_get_contents($this->json));

        $parts_list = [];
        foreach ($part_map as $parts) {
            if ($parts->model === "Laravel") {
                $parts_list[] = new TireItem($parts->id, $parts->name, $parts->model);
            }
        }
        return $parts_list;
    }

    public function assembly()
    {
        $list = "";
        foreach ($this->partList() as $parts) {
            $list .= sprintf(
                "<li>Parts-No.%d %s | TARGET MODEL - %s</li>",
                $parts->getId(), $parts->getName(), $parts->getModel()
            );
        }
        return $list;
    }

    public function add()
    {
        echo "<h2>Tire</h2>\n";
        echo "<ul>\n";
        echo $this->assembly();
        echo "</ul>\n";
    }
}

