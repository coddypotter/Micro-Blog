<?php
session_start();
ob_start();
if(!isset($_SESSION['id'])){
		header('location:index.php');
		exit();
}
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$id = $_SESSION['id'];
$email = $_SESSION['email'];
$pic = $_SESSION['pic'];
?>