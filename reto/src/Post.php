<?php
namespace App;

use PhpParser\Node\Expr\FuncCall;

class Post 
{
    public $postDate;


    public function countPosts()
    {
        return count($this->posts);
    }
   
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