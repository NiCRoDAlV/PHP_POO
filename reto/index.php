<?php
use PHPUnit\Framework\TestCase;
use App\Author;
use App\Category;
use App\User;
use App\Post;
use App\Comment;

$post = new Post();//A estos objetos hay que darles email, username y password
$user = new User("oaisndf", "asdfasd", "asdfsadf");
$author = new Author("cadscs", "vfav", "asdfasg");
$category = new Category("asdafas", "asdfasdf");
$comment = new Comment("ASDfasdf", "asdfasd");
$post->addComment($comment);

//Con assertEquals() verificamos la existencia del post
$this->assertEquals(1, $post->countComments());

//Con assertInstanceOf verificamos que el comentario creado sea una instancia de la clase Comment. 
$this->assertInstanceOf(Comment::class, $post->getComments()[0]);
