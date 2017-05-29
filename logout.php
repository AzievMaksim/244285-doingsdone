<?php 
session_start();
ob_start();

unset($_SESSION['user'], $_SESSION['name']);
header("Location:index.php");

ob_flush(); ?>