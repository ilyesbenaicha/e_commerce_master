<?php 
session_start();
if(!isset($_SESSION['session_admin']) ) header("Location:index.php");
?>