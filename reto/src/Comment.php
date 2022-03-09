<?php

namespace App;

class Comment 
{
    public $comment_Date;
    public $content;
    public $author;
    
    public function __construct($comment_Date, $content, $author)
    {
        $this->comment_Date = $comment_Date;
        $this->content = $content;
        $this->author = $author;
    }
}