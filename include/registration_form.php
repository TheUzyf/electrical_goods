<main>

	<form action="../include/registration_script.php" method="post" class="reg-form">

		<div class ="form-row">
			<label>Имя: </label>
			<input type="text" name="name" pattern="^[A-Za-zА-Яа-яЁё]+$">
		</div>

		<div class="form-row">
			<label>Фамилия: </label>
			<input type="text" name="surname" pattern="^[A-Za-zА-Яа-яЁё]+$">
		</div>

		<div class="form-row">
			<label>Email: </label>
			<input type="email" name="email">
		</div>

		<div class="form-row">
			<label>Телефон: </label>
			<input type="text" name="phone" pattern="8[0-9]{10}">
		</div>

		<div class="form-row">
			<label>Логин: </label>
			<input type="text" name="login" pattern="[A-Za-z]{6,15}">
		</div>

		<div class="form-row">
			<label>Пароль: </label>
			<input type="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*">
		</div>

		<div class="form-row">
			<input type="submit" name="Зарегистрироваться">
		</div>

	</form>