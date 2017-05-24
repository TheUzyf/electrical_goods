<?php
	
	if (isset($_POST['name'])) 
	{
		$name = $_POST['name'];
		if ($name == '')
		{
			unset($name);
		} 
	}
	
	if (isset($_POST['surname'])) 
	{
		$surname = $_POST['surname'];
		if ($surname == '')
		{
			unset($surname);
		} 
	}	
	
	if (isset($_POST['email']))
	{ 
		$email = $_POST['email'];
		if ($email == '') 
		{ 
			unset($email);
		}
	}

	if (isset($_POST['phone']))
	{ 
		$phone = $_POST['phone'];
		if ($phone == '') 
		{ 
			unset($phone);
		}
	}
	
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
	
	if (empty($name) or empty($surname) or empty($email) or empty($phone) or empty($login) or empty($password))
	{
		exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
		include ("../include/header.php");	
		echo '<main> <p align="center">Вы ввели не всю информацию, вернитесь назад и заполните все поля!</p>';
		include ("../include/footer.php");
	}
	
	$name = stripslashes($name);
    $name = htmlspecialchars($name);
	$name = trim($name);
	
	$surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
	$surname = trim($surname);

	$email = stripslashes($email);
    $email = htmlspecialchars($email);
	$email = trim($email);	
	
	$phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
	$phone = trim($phone);
	
	$login = stripslashes($login);
    $login = htmlspecialchars($login);
	$login = trim($login);
	
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
	$password = trim($password);
    
	include ("../include/bd.php");
	$result = mysql_query("SELECT iduser FROM user WHERE login='$login'",$db);
	$myrow = mysql_fetch_array($result);
	
	if (!empty($myrow['iduser'])) 
	{
		include ("../include/header.php");	
		echo '<main> <p align="center">Извините, введённый вами логин уже зарегистрирован. Введите другой логин.</p>';
		include ("../include/footer.php");
    }
	else
	{
		$result2 = mysql_query("INSERT INTO user (name,surname,email,phone,login,password) VALUES('$name','$surname','$email','$phone','$login','$password')");
		if ($result2=='TRUE')
		{
			include ("../include/header.php");	
			echo '<main> <p align="center">Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <br> <a href="../index.php?page=index"> На главную</a></p>';
			include ("../include/footer.php");
		}
		else 
		{
			include ("../include/header.php");	
			echo '<main> <p align="center">Ошибка! Вы не зарегистрированы.</p>';
			include ("../include/footer.php");
		}
	}
?>