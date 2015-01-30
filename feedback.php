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
						<table border="0"> 
							<tr>
								<td class="field-name">Имя</td>
								<td class="field-name-mail">Email</td>
							</tr>
							<tr>
								<td>
									<div style="position:relative;">
										<div class="nameValid" id="text">Вы не ввели имя</div>
									</div>
									<input type="text" name="name" class="text" id="userName" placeholder="Как к вам обращаться" />
								</td>
								<td align="right">
									<input type="email" name="email" id="userMail" placeholder="Куда мне писать" />
									<div style="position:relative;">
										<div class="mailValid" id="text2">Вы не ввели email</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="field-name">Сообщение</td>
							</tr>
							<tr>
								<td colspan="2">
									<div style="position:relative;">
										<div class="textValid" id="text3">Вы не ввели текст</div>
									</div>
									<textarea name="message" id="userText" placeholder="Кратко, в чем суть"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">Введите код, указанный на картинке</td>
							</tr>
							<tr>
								<td>
									<img src="captcha.php" width="170" height="35" id="cap-img" />
								</td>
								<td align="right">
									<div style="position:relative;">
										<div class="codeValid" id="text4">Вы не ввели код</div>
									</div>
									<input type="text" id="userCode" name="capcha" id="" placeholder="Введите код" />
								</td>
							</tr>
							<tr>
								<td><button class="submit" type="submit">Отправить</button></td>
								<td><button type="reset" class="clean">Очистить</button></td>
							</tr>
						</table>
					</div>

<!--[if !IE]><!-->

					<div class="form-body-m">
						<table border="0"> 
							<tr>
								<td class="field-name">Имя</td>
							</tr>
							<tr>								
								<td>
									<div style="position:relative;">
										<div class="nameValid" id="text">Вы не ввели имя</div>
									</div>
									<input type="text" name="name" class="text" id="userName" placeholder="Как к вам обращаться" />
								</td>
							</tr>
							<tr>
								<td class="field-name-mail">Email</td>
							</tr>
							<tr>
								<td>
									<input type="email" name="email" id="userMail" placeholder="Куда мне писать" />
									<div style="position:relative;">
										<div class="mailValid" id="text2">Вы не ввели email</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" class="field-name">Сообщение</td>
							</tr>
							<tr>
								<td colspan="2">
									<div style="position:relative;">
										<div class="textValid" id="text3">Вы не ввели текст</div>
									</div>
									<textarea name="message" id="userText" placeholder="Кратко, в чем суть"></textarea>
								</td>							
							</tr>
							<tr>
								<td colspan="2">Введите код, указанный на картинке</td>
							</tr>
							<tr>
								<td colspan="2">
									<table id="table-colspan">
										<tr>
											<td>
												<img src="captcha.php" width="150" height="35" id="cap-img" />
											</td>
											<td>
												<div style="position:relative;">
													<div class="codeValid" id="text4">Вы не ввели код</div>
												</div>
												<input type="text" id="userCode" name="capcha" placeholder="Введите код" />												
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<table id="table-colspan">
										<tr>
											<td>
												<button class="submit" type="submit">Отправить</button>
											</td>
											<td>
												<button type="reset" class="clean">Очистить</button>											
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>

<!-- <![endif]-->

				</form>
				<div style="clear:both;"></div>
			</div>
		</div>
		<div style="clear:both;"></div>

<!--[if !IE]><!-->

		<div class="contacts-bottom">
			<ul>
				<li><img src="images/phone.png" alt="телефон" /><a href="tel:89818824000">+7 981 882 4000</a></li>
				<li><img src="images/mail.png" alt="электронная почта" /><a href="mailto:metelskiisa@mail.ru">metelskiisa@mail.ru</a></li>
				<li><img src="images/scype-logo.png" alt="телефон" /><a href="scype:metelskiysa?chat">metelskiysa</a></li>
			</ul>
		</div>
		<div class="contacts-bottom-m">
			<ul>
				<li><img src="images/phone.png" alt="телефон" /><a href="tel:89818824000">+7 981 882 4000</a></li>
				<li><img src="images/mail.png" alt="электронная почта" /><a href="mailto:metelskiisa@mail.ru">metelskiisa@mail.ru</a></li>
				<li><img src="images/scype-logo.png" alt="телефон" /><a href="scype:metelskiysa?chat">metelskiysa</a></li>
			</ul>
		</div>
		<div id="social-m">
			<div class="soc" data-buttoncolor="#58697a" data-size="60px" data-radius="circle" data-spacing="15px">
				<a href="http://vk.com/serge_norilsk" class="soc-vkontakte" title="VKontakte"></a>
				<a href="https://twitter.com/metelskiisa" class="soc-twitter" title="Twitter"></a>
				<a href="https://github.com/norzserge" class="soc-github" title="GitHub"></a>
			</div>
			<script type="text/javascript" src="js/soc.js/soc.min.js"></script>
		</div>

<!-- <![endif]-->

	</div>

	<?php require_once("pages/footer.php"); ?>

</body>
</html>