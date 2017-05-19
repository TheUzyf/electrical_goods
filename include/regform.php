<main>

<form method='post' class='reg-form'>

				<div class ="form-row">
					<label for='form_fname'>Имя: </label>
					<input type='text' id='form_fname' name='first_name' pattern='^[A-Za-zА-Яа-яЁё]+$'>
				</div>
		
				<div class='form-row'>
					<label for='form_sname'>Фамилия: </label>
					<input type='text' id='form_sname' name='second_name' pattern='^[A-Za-zА-Яа-яЁё]+$'>
				</div>	
				
				<div class='form-row'>
					<label for='form_email'>Email: </label>
					<input type='email' id='form_email' name='email'>
				</div>
				
				<div class='form-row'>
					<label for='form_phone'>Телефон: </label>
					<input type='text' id='form_phone' name='phone' placeholder="7-000-000-0000" pattern='7-[0-9]{3}-[0-9]{3}-[0-9]{4}'>
				</div>
				
				<div class='form-row'>
					<label for='form_login'>Логин: </label>
					<input type='text' id='form_login' name='login' pattern="[A-Za-z]{6,15}">
				</div>
				
				<div class='form-row'>
					<label for='form_password'>Пароль: </label>
					<input type='password' id='form_password' name='password' pattern='(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*'>
				</div>
				
				<div class='form-row'>
					<label for='form_password'>Повторить пароль: </label>
					<input type='password' id='form_password' name='password'>
				</div>
				
				<div class='form-row'>
					<input type="submit" value='Зарегистрироваться'>
				</div>
				
</form>