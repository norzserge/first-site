<?php 
// Проверяем если капча была введена 
if ( isset($_POST['capcha']) ) 
{ 
$code = $_POST['capcha']; // Получаем переданную капчу. 
session_start(); 

// Сравниваем введенную капчу с сохраненной в переменной в сессии 
if(isset($_SESSION['capcha']) && strtoupper($_SESSION['capcha']) == strtoupper($code))  
{echo 'Верно!';} 
else 
{echo 'Не верно!';} 

// Удаляем капчу из сессии 
unset($_SESSION['capcha']);  

exit(); 
} 
?>


<!DOCTYPE html>
<html>
<head>
	<?php require_once("pages/head.php"); ?>
	<title>Обратная связь | LoftSchool</title>
</head>
<body>
	<?php require_once("pages/header.php"); ?>			<!-- HEADER -->
	<div class="container">				<!-- CONTENT -->
		<div class="left-column">
			<?php require_once("pages/nav.php"); ?>		<!-- NAVIGATION -->
			<div class="contacts">		<!-- CONTACTS -->
				<div>Контакты</div>
				<div><img src="images/mail.png" alt="электронная почта" /><a href="mailto:metelskiisa@mail.ru">metelskiisa@mail.ru</a></div>
				<div><img src="images/phone.png" alt="телефон" /><a href="tel:89818824000">+7 981 882 4000</a></div>
				<div><img src="images/scype-logo.png" alt="телефон" /><a href="scype:metelskiysa?chat">metelskiysa</a></div>
			</div>
		</div>
		<div class="right-column">
			<div class="feedback">		<!-- FEEDBACK -->
				<div class="write-me">
					У вас интересный проект? Напишите мне
				</div>
				<div class="blue-line"></div>
				<form class="contact_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="form-body">
						<div class="form-body__input-name">
							<label for="input-name">Имя</label>
							<label><input type="text" name="input-name" id="input-name" class="form-body__input text" placeholder="Как к вам обращаться" /></label>
						</div>
						<div class="form-body__input-mail">
							<label for="input-mail">Email</label>
							<input type="text" name="input-mail" id="input-mail" class="form-body__input text" placeholder="Как к вам обращаться" />
						</div>
						<div class="form-body__comment">
							<label for="message">Сообщение</label><br>
							<textarea name="message" id="message" class="form-body__textarea" placeholder="Кратко, в чем суть"></textarea>
						</div>		
						<div class="form-body__capcha">
							<label for="capcha">Введите код, указанный на картинке
							<img src="captcha.php" width="170" height="35" id="cap-img" class="form-body__capcha-img" />
							<input class="form-body__input valign" type="text" name="capcha" id="capcha" placeholder="Введите код" />
						</div>
						<button class="form-body__button submit" type="submit">Отправить</button></td>
						<button type="reset" class="form-body__button clean">Очистить</button></td>
					</div>
				</form>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
	<?php require_once("pages/footer.php"); ?>
	<script type="text/javascript" src="js/soc.js/soc.min.js"></script>
</body>
</html>