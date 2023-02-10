<?php 
$user="alina";
$password="alina";
$host="localhost";
$db="samokat";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);
