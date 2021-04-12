<?php
session_start();
if(isset($_GET) & !empty($_GET)){
	$id=$_GET['id'];
}else{
	header('location: index.php');
} 
?>
