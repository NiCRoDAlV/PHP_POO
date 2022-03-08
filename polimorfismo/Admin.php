<?php
require_once("Base");

class Admin extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
        
    }
}