<?php


include("Person.php");
include("Admin.php");
include("User.php");

//Creamos un objeto
$user = new User;
//Definimos el tipo de user
$user->type = new Admin;


