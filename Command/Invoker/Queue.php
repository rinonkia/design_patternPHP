<?php

require_once __DIR__ . '/../Commands/Interfaces/CommandInterface.php';

class Queue
{
    private $commands;

    public function __construct()
    {
        $this->commands = [];
    }

    public function addCommand(CommandInterface $command)
    {
        $this->commands[] = $command;
    }

    public function run()
    {
        if(!empty($this->commands)) {
            foreach ($this->commands as $command) {
                $command->execute();
            }
            $this->commands = [];
        }
    }
}
