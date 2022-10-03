<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '12345678';
const DB = 'example_news';

$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB);
mysqli_set_charset($connection, "UTF8");