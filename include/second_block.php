<second_block>
	
	<login_form>
		
			<?php
				if (empty($_SESSION['login']) or empty($_SESSION['iduser']))
				{ 
					echo '
						<form action="../include/authorization.php" method="post">
							<input placeholder="Логин" required name="login" type="text"> <br>
							<input placeholder="Пароль" required name="password" type="password"> <br>
							<input value="Войти" type="submit">
							<a href="Recovery.php">Забыли пароль?</a> <br> 
							<a href="Registration.php">Регистрация</a>
						</form>';
				}
				else
				{ 
					echo "<a href=''>Вы вошли на сайт , как ".$_SESSION['login']."</a>";
					echo '<form action="../include/exit.php">
							  <input value="Выход" type="submit">
						  </form>';
				}
			?>
		

	</login_form>

	<search>
		<form action="../index.php?page=search" method="post">
			<p align="center">
				<input type="search" name="query" placeholder="Поиск по сайту"> 
				<input type="submit" value="Найти">
			</p>
		</form>
	</search>

</second_block>