<?php
$dsn = 'mysql:dbname=demo1;host=127.0.0.1';
$user = 'demo1';
$password = 'demo';

$pdo = new PDO($dsn, $user, $password);
//var_dump($pdo);