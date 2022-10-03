<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<div class="flex text-gray-800">
    <ul id='menu' class="form-signin">
        <li><a id='menu_btn' href="#">Menu</a>
            <ul>
                <li><a id='menu_btn' href='/posts/index.php'>My page</a></li>
                <li><a id='menu_btn' href='/posts/main.php'>Main</a></li>
                <li><a id='menu_btn' href='/auth/index.php'>Logout</a></li>
            </ul>
        </li>
    </ul>
</div>