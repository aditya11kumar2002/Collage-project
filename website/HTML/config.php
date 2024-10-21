<?php
$host="localhost";
$username= "root";
$password= "";

$conn=new PDO("mysql:host=$host;dbname=userdetails", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "<pre>";
// print_r($result);
// echo "</pre>";
?>