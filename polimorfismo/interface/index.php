<?php

include "SearchInterface.php";
include "Post.php";
include "User.php";


$user = new User("s");
echo $user->all();


$post = new Post();
echo $post->all();