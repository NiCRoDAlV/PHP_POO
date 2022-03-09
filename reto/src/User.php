<?php
namespace App;

class User 
{
    public $username;
    protected $email;
    protected $password;

    public function __construct($username, $email, $password)
    {
        $this-> username = $username;
        $this-> email = $email;
        $this-> password = $password;
    }

  

}