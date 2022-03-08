<?php

use App\Post;
use App\Comment;


$post = new Post();
$comment = new Comment();

$post->addComment($comment);

//Con assertEquals() verificamos la existencia del post
$this->assertEquals(1, $post->countComments());

//Con assertInstanceOf verificamos que el comentario creado sea una instancia de la clase Comment. 
$this->assertInstanceOf(Comment::class, $post->getComments()[0]);