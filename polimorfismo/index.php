<?php

include "Base.php";
include "Admin.php";
include "User.php";
include "Guest.php";



$guest = new Guest();
echo $guest-> login();


$user = new User("Nicolás");
echo $user-> login();

$admin = new Admin("Pedro");
echo $admin-> login();