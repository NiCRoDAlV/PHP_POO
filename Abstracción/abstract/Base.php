<?php
//En esta clase abstracta declaramos métodos que luego son
//utilizados en Cached.php

abstract class Base
{
    public function get()
    {
        //..
    }
    //También podemos crear métodos abstractos 
    //que son definidos en Cached.php
    abstract public function store();
}