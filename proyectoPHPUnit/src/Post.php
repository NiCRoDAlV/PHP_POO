<?php
//configuración del namespace
namespace App;

class Post 
{   

    protected $comments = [];
    //Agregamos una validación para que el comentario
    //sea una variable del tipo comentario
    //De esta forma Post y Comment son clases hermanas
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this->comments;
    }

}