<?php

abstract class AbstractDisplay
{
    abstract public function open();

    abstract public function print();

    abstract public function close();

    final public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->print();
        }
        $this->close();
    }
}

class CharDisplay extends AbstractDisplay
{
    private $char;

    public function __construct(string $char)
    {
        $this->char = $char;
    }

    public function open()
    {
        echo("<<");
    }

    public function print()
    {
        echo($this->char);
    }

    public function close()
    {
        echo(">>" . PHP_EOL);
    }
}

class StringDisplay extends AbstractDisplay
{
    private $string;

    private $width;

    public function __construct(string $string)
    {
        $this->string = $string;
        $this->width = strlen(mb_convert_encoding($string, 'SJIS', 'UTF-8'));
    }

    public function open()
    {
        $this->printLine();
    }

    public function print()
    {
        echo("|" . $this->string . "|" . PHP_EOL);
    }

    public function close()
    {
        $this->printLine();
    }

    private function printLine()
    {
        echo("+");
        for ($i = 0; $i < $this->width; $i++) {
            echo("-");
        }
        echo("+" . PHP_EOL);
    }
}