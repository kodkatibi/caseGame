<?php


class user
{
    public $name;
    public $point = 0;

    public function getName()
    {
        if (!isset($this->name)) {
            $this->name = readline('Enter your name: ');
        }
    }

}