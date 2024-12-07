<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='final_project';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}