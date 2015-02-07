<!DOCTYPE html>
<html>
<head>
	<?php require_once("pages/head.php"); ?>
	<title>Авторизация | LoftSchool</title>	
</head>
<body>
	<?php require_once("pages/header.php"); ?>			<!-- HEADER -->
	<div class="container">				<!-- CONTENT -->
		<div class="auth">
			<div class="auth__header">
				Авторизируйтесь
			</div>
			<div class="auth__form">
				<form action="">
					<label for="name">Логин</label>
					<input type="text" class="auth__input-name" id="name" placeholder="Введите логин" autocomplete="on">					
					<label for="pass">Пароль</label>
					<input type="password" class="auth__input-pass" id="pass" placeholder="Введите пароль">
					<input type="submit" class="button" value="Войти"></button>
				</form>
			</div>
		</div>
	</div>
	<?php require_once("pages/footer.php"); ?>
	<script type="text/javascript" src="js/soc.js/soc.min.js"></script>
</body>
</html>