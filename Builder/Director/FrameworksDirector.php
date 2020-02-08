<?php

require_once __DIR__ . '/../Builder/FrameworksBuilder.php';

/**
 * Director Class
 */
class FrameworksDirector
{
    private $builder;

    private $json;

    public function __construct(FrameworksBuilder $builder, $json)
    {
        $this->builder = $builder;
        $this->json = $json;
    }

    public function getFrameworks()
    {
        $list = $this->builder->parse($this->json);
        return $list;
    }
}
