<?php

namespace App;

class Comment 
{
    public $comment_Date;
    public $content;
    
    public function __construct($comment_Date, $content)
    {
        $this->comment_Date = $comment_Date;
        $this->content = $content;
    }
}