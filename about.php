<!DOCTYPE html>
<html>
<head>
	<?php require_once("pages/head.php"); ?>
	<title>Обо мне | LoftSchool</title>
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
			<div class="main-info">		<!-- ABOUT -->
				<h1>Основная информация</h1>
				<img src="images/myface.png" alt="Мой фейс">
				<table>
					<tr>
						<td><b>Меня зовут</b> Метельский Сергей Александрович</td>
					</tr>
					<tr>
						<td><b>Мой возраст</b> 30 лет</td>
					</tr>
					<tr>
						<td><b>Мой город</b> Санкт-Петербург</td>
					</tr>
					<tr>
						<td><b>Моя специализация</b> FRONTEND разработчик</td>
					</tr>
					<tr>
						<td id="main-skills">
							<b>Ключевые навыки</b>
							<ul id="skills-wrap">
								<li>web design</li>
								<li>photoshop</li>
								<li>html</li>
								<li>css</li>
								<li>less</li>
								<li>seo</li>
								<li>jquery</li>
								<li>joomla</li>
								<li>wordpress</li>
								<li>drupal</li>
							</ul>
						</td>
					</tr>
				</table>
				<ul class="about-m">
					<li>Меня зовут</li>
					<li>Метельский Сергей Александрович</li>
					<li>Мой возраст</li>
					<li>30 лет</li>
					<li>Мой город</li>
					<li>Санкт-Петербург</li>
					<li>Моя специализация</li>
					<li>FRONTEND разработчик</li>
					<li>Ключевые навыки</li>
					<li>
						<ul id="skills-wrap">
							<li>web design</li>
							<li>photoshop</li>
							<li>html</li>
							<li>css</li>
							<li>less</li>
							<li>seo</li>
							<li>jquery</li>
							<li>joomla</li>
							<li>wordpress</li>
							<li>drupal</li>
					</li>
				</ul>
				<div style="clear:both;"></div>
			</div>
			<div class="work-experience">			<!-- EXPERIENCE -->
				<h2>Опыт работы</h2>
				<table>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>Фриланс - разработка и поддержка сайтов<br /><span>Май 2012 - по настоящее время</span></td>
					</tr>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>"Простор-Телеком" - Руководитель региональной группы<br /><span>Ноябрь 2011 - апрель 2012</span></td>
					</tr>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>ООО "АРЛОС" (Группа компаний ЗАО "Норильск-Телеком") - Исполнительный директор<br /><span>Август 2009 - август 2011</span></td>
					</tr>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>ООО "АРЛОС" (Группа компаний ЗАО "Норильск-Телеком") - Заместитель исполнительного директора<br /><span>Ноябрь 2008 - июль 2009</span></td>
					</tr>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>ЗАО "Норильск-Телеком" - Заместитель руководителя офисов продаж<br /><span>Июнь 2007 - октябрь 2008</span></td>
					</tr>
					<tr>
						<td><img src="images/bag.png" alt="" /></td>
						<td>ЗАО "Норильск-Телеком" - Администратор офиса продаж<br /><span>Декабрь 2006 - май 2007</span></td>
					</tr>
				</table>
				<ul>
					<li><img src="images/bag.png" alt="" /></li>
					<li>Фриланс - разработка и поддержка сайтов<br /><span>Май 2012 - по настоящее время</span></li>
					<li><img src="images/bag.png" alt="" /></li>
					<li>"Простор-Телеком" - Руководитель региональной группы<br /><span>Ноябрь 2011 - апрель </span></li>
					<li><img src="images/bag.png" alt="" /></li>
					<li>ООО "АРЛОС" (Группа компаний ЗАО "Норильск-Телеком") - Исполнительный директор<br /><span>Август 2009 - август 2011</span></li>
					<li><img src="images/bag.png" alt="" /></li>
					<li>ООО "АРЛОС" (Группа компаний ЗАО "Норильск-Телеком") - Заместитель исполнительного директора<br /><span>Ноябрь 2008 - июль 2009</span></li>
					<li><img src="images/bag.png" alt="" /></li>
					<li>ЗАО "Норильск-Телеком" - Заместитель руководителя офисов продаж<br /><span>Июнь 2007 - октябрь 2008</span></li>
					<li><img src="images/bag.png" alt="" /></li>
					<li>ЗАО "Норильск-Телеком" - Администратор офиса продаж<br /><span>Декабрь 2006 - май 2007</span></li>
				</ul>
			</div>
			<div class="education">					<!-- EDUCATION -->
				<h2>Образование</h2>
				<table>
					<tr>
						<td><img src="images/cap.png"></td>
						<td>ТУСУР, Антикризисное управление<br /><span>2010 - 2012</span></td>
					</tr>
					<tr>
						<td><img src="images/cap.png"></td>
						<td>НИИ, Менеджмент организации<br /><span>2002 - 2007</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Курсы LoftSchool.ru<br /><span>Январь 2015 - по настоящее время</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Углубленное изучение рабочей среды PhotoShop<br /><span>2014</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Основы jQuery<br /><span>2014</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Web-программирование (PHP + MySQL)<br /><span>2013</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Разработка сайтов на основе CMS Joomla!<br /><span>2013</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Продвижение сайтов. Реклама в сети Интернет.<br /><span>2013</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Компьютерная графика и дизайн (PhotoShop, Corel Draw, Illustrator)<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Создание сайтов с использованием CMS систем (PHP/MySQL)<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Создание web сайтов (HTML/CSS)<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Целеполагание<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Мастер-класс по веб-дизайну<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Работа с Клиентом в офисах продаж: продажа и обслуживание<br /><span>2012</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Управление сложными переговорами<br /><span>2010</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Навыки ситуационного руководства<br /><span>2007</span></td>
					</tr>
					<tr>
						<td><img src="images/kurs.png"></td>
						<td>Профессиональные продажи услуг связи<br /><span>2007</span></td>
					</tr>
				</table>
				<ul>
					<li><img src="images/cap.png"></li>
					<li>ТУСУР, Антикризисное управление<br /><span>2010 - 2012</span></li>
					<li><img src="images/cap.png"></li>
					<li>НИИ, Менеджмент организации<br /><span>2002 - 2007</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Курсы LoftSchool.ru<br /><span>Январь 2015 - по настоящее время</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Углубленное изучение рабочей среды PhotoShop<br /><span>2014</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Основы jQuery<br /><span>2014</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Web-программирование (PHP + MySQL)<br /><span>2013</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Разработка сайтов на основе CMS Joomla<br /><span>2013</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Продвижение сайтов. Реклама в сети Интернет.<br /><span>2013</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Компьютерная графика и дизайн (PhotoShop, Corel Draw, Illustrator)<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Создание сайтов с использованием CMS систем (PHP/MySQL)<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Создание web сайтов (HTML/CSS)<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Целеполагание<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Мастер-класс по веб-дизайну<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Работа с Клиентом в офисах продаж: продажа и обслуживание<br /><span>2012</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Управление сложными переговорами<br /><span>2010</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Навыки ситуационного руководства<br /><span>2007</span></li>
					<li><img src="images/kurs.png"></li>
					<li>Профессиональные продажи услуг связи<br /><span>2007</span></li>
				</ul>
			</div>
		</div>
		<div style="clear:both;"></div>
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
	</div>

	<?php require_once("pages/footer.php"); ?>

</body>
</html>