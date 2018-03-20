<?php
session_start();

include 'connection.php';
$_SESSION['sub']=$_POST['bookname'];
$_SESSION['pname']=$_POST['pname'];
header("Location:bbooks.php");

?>