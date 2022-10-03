<?php

function post(){
    global $connection;
    $query = "SELECT * FROM posts";
    $result = mysqli_query($connection, $query);
    $posts = array();
    while ($row = mysqli_fetch_assoc($result)){
        $posts[$row['id']] = $row;
    }
    return $posts;
}
