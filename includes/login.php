<?php


class login
{
    public $name;
    public $point=0;
    public function getName()
    {
        $this->name=readline('Enter your name: ');
    }

}