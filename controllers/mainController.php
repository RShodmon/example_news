<?php
include "appController.php";
include "models/post.php";

function index(){
    $post = post();
    return $post;
}

