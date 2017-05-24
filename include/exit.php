<?php
	session_start();
	$_SESSION = array();
	session_destroy(); 
	include ("../include/header.php");	
	echo '<main> <p align="center">До свидания! <br> <a href="../index.php?page=index"> На главную</a></p>';
	include ("../include/footer.php");
?>