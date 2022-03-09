<?php

use PHPUnit\Framework\TestCase;
use App\Author;
use App\Category;
use App\User;
use App\Post;
use App\Comment;

class BlogTest extends TestCase
{
    public function test_post()
    {
        $post = new Post();

        //A estos objetos hay que darles email, username y password
        $user = new User("nombre_usuario", "correo_electronico", "contraseña");
        $author = new Author($user->username, "correo_electronico", "contraseña");
        $category = new Category("nombre_categoria");
        $comment = new Comment("12/2/23", "cuerpo_del_comentario","autor_comentario");
        $post->addComment($comment);

        //Con assertEquals() verificamos la existencia del post
        $this->assertEquals(1, $post->countComments());

        //Con assertInstanceOf verificamos que el comentario creado sea una instancia de la clase Comment. 
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);


    }
}