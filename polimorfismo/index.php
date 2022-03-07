<?php

abstract class Base
{
    protected $name;
    private  function getClassName()
    {
        return get_called_class();
    }
    public function login()
    {
        return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
    }

}

class Admin extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
        
    }
}
class User extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
        
    }
}
class Guest extends Base 
{
    protected $name = "invitado";
}

$guest = new Guest();
echo $guest-> login();


$user = new User("Nicolás");
echo $user-> login();

$admin = new Admin("Pedro");
echo $admin-> login();