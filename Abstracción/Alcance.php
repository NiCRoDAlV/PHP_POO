<?php 
class User 
{
    //Alcance - principio de ocultación - Encapsulamiento

    //public son accedidos por todas las clases
    //protected Son accedidas solo por las clases hijas
    
    //private No pueden ser accedidos por otras clases. 


    public const PAGINATE  = 25;
    

    public $username;
    


    public function getUsername()
    {
        //..
    }
}