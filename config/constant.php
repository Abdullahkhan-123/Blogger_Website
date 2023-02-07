<?php

session_start();
$SiteUrl = 'http://localhost/blog/';
$server_name='localhost';
$user_name='root';
$password='';
$DB_Name='bloggerspot';

$conn = mysqli_connect($server_name,$user_name,$password,$DB_Name);

?>