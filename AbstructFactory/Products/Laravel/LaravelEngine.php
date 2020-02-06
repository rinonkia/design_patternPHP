<?php

require_once __DIR__ . '/../EngineInterface.php';
require_once __DIR__ . '/../Items/EngineItem.php';

class LaravelEngine implements EngineInterface
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
                $parts_list[] = new EngineItem($parts->id, $parts->name, $parts->model);
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
        echo "<h2>Engine</h2>\n";
        echo "<ul>\n";
        echo "$this->assembly()";
        echo "</ul>\n";
    }
}

