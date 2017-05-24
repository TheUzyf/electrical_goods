<?php
	session_start();
	
	if (isset($_POST['login'])) 
	{
		$login = $_POST['login'];
		if ($login == '')
		{
			unset($login);
		} 
	} 
	
    if (isset($_POST['password']))
	{ 
		$password=$_POST['password'];
		if ($password =='') 
		{
			unset($password);
		} 
	}
	
	if (empty($login) or empty($password)) 
	{
		exit ("Не все поля заполнены!");
    }
	
	$login = stripslashes($login);
    $login = htmlspecialchars($login);
	$login = trim($login);
	
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
	$password = trim($password);
	
	include ("../include/bd.php");
	$result = mysql_query("SELECT * FROM user WHERE login='$login'",$db); 
    $myrow = mysql_fetch_array($result);
	
	if (empty($myrow['login']))
    {
		include ("../include/header.php");	
		echo '<main> <p align="center">Извините, введённый вами логин или пароль неверный.</a></p>';
		include ("../include/footer.php");
    }
	else 
	{
		if ($myrow['password']==$password) 
		{
			$_SESSION['login']=$myrow['login']; 
			$_SESSION['iduser']=$myrow['iduser'];
			
			include ("../include/header.php");	
			echo '<main> <p align="center">Вы успешно вошли на сайт! <br> <a href="../index.php?page=index"> На главную</a></p>';
			include ("../include/footer.php");
		}
		else 
		{
			include ("../include/header.php");	
			echo '<main> <p align="center">Извините, введённый вами логин или пароль неверный.</a></p>';
			include ("../include/footer.php");
		}
    }
	
?>