<?php
require_once("Base");


class User extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
        
    }
}