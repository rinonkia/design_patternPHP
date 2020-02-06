<?php

require_once __DIR__ . '/../HandleInterface.php';
require_once __DIR__ . '/../Items/HandleItem.php';

class LaravelHandle implements HandleInterface
{
    protected $json;

    public function __construct()
    {
        $this->json = '///////';
    }

    public function partList()
    {
        $part_map = json_decode(file_get_contents($this->json));

        $parts_list = [];
        foreach ($part_map as $parts) {
            if ($parts->model === "Laravel") {
                $parts_list[] = new HandleItem($parts->id, $parts->name, $parts->model);
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
        echo "<h2>Handle</h2>";
        echo "<ul>";
        echo "$this->assembly()";
        echo "</ul>";
    }
}

