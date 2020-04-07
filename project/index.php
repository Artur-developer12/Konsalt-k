<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Консалт-К</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="mane">
	<header class="header">
		<div id="nav_inner">
			<div class="container">
				<div class="header_inner">
					<div class="header_logo">
						<div class="header_logo_img">
						</div>
						<a href="index.html" class="header_logo_text">Консалт-к</a>
					</div>

					<nav class="header_nav">
						<a href="#mane" class="header_link">Главная</a>
						<a href="#about" class="header_link">о нас</a>
						<a href="#tafiff" class="header_link">Тарифы</a>
						<a href="#contact" class="header_link">контакты</a>

						<button id="btn_modal" class="btn header_btn">Связаться с нами</button>
					</nav>
					<button id="burger" class="burger">
						<div class="burger_line"></div>
						<div class="burger_line"></div>
						<div class="burger_line"></div>
					</button>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="intro">			 
				<div class="intro_info">
					<h1 class="intro_title">Бухгалтерские услуги <br>Консалтинг</h1>
					<h3 class="intro_text">
						Наши cпециалисты гарантируют полный порядок в вашей бухгалтерии и качественную поддержку во всех возникающих вопросах. Просто позвоните нам и мы все расскажем.
					</h3>
					<button id="btn_modal" class="btn intro--btn">Оставить заявку</button>
				</div>
				<div class="intro_img">
					<img class="intro_img_icon" src="img/header_icon.svg" alt="">
 				</div>		 	 
			</div>
		</div>
	</header>
	<div id="modal" class="modal">
		<div class="modal_inner">
			<div class="modal_close">
				<div class="modal_close_inner"></div>
			</div>
			<h2 class="modal_title">
				Оставьте заявку
			</h2>
			<h3 class="modal_subtitle">
				Оставьте Ваши контакты и мы с вами свяжемся в ближайшее время.
			</h3>
			<form class="modal_form" method="POST" action="">
				<input type="text" class="modal_form_input" name="name" placeholder="Имя">
				<input type="text" class="modal_form_input" name="phone" placeholder="Телефон">
				<textarea class="modal_form_textarea">Сообщение</textarea>
				<button class="btn">Отправить</button>
			</form>
		</div>
		
	</div>

	<section class="about" id="about">

		<div class="about_begin">
			<h2 class="title">чем мы занимаемся?</h2>
			<h3 class="subtitle">Мы обслуживаем разный бизнес: от ресторанов до заводов. Это как собственный отдел бухгалтерии, только в соседнем офисе.</h3>
			<img class="about_begin_image" src="img/about-fon-2.svg" alt="">
		</div> 

		<div class="container">
			<div class="about_block">
				<div class="about_block_info">
					<h2 class="title about--title">эффективное решение задач для бизнеса</h2>
					<h3 class="subtitle about--subtitle">Мы предоставляем организациям малого и среднего бизнеса услуги аутсорсинга, как разовые, так и на постоянной основе, в области бухгалтерского, налогового, кадрового учета. Обеспечиваем юридическое сопровождение предприятий, регистрацию юридических лиц и изменений в учредительные документы</h3>
				</div>
				<div class="about_block_img">
					<img src="img/about-image-1.png" alt="">
				</div>
				
			</div>	

			<div class="about_block about_block--reverse">
				<div class="about_block_info">
					<h2 class="title about--title">кто наши клиенты</h2>
					<h3 class="subtitle about--subtitle">Всех наших клиентов объединяет одно — стремление не отвлекаться на задачи, которые не приносят прибыль. И мы их поддерживаем. Наши клиенты это малый, средний, крупный бизнес желающий перенести нагрузки с обсуживаниу бухгалтерий на нас, тем самым сэкономить</h3>
				</div>
				<div class="about_block_img">
					<img src="img/about-image-2.png" alt="">
				</div>
				
			</div>	
		</div>
	</section>
	
	<section class="advantares">
		<h2 class="title advantares--title">Работаем в интересах бизнеса</h2>

		<div class="advantares_inner">
			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-1.svg" alt="">
				<div class="title advantares_item--title">
					Меньше налогов
				</div>
				<div class="subtitle advantares_item--subtitle">Внедряем все возможные способы законного снижения налогов</div>
			</div>

			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-2.svg" alt="">
				<div class="title advantares_item--title">
					Меньше сюрпризов
				</div>
				<div class="subtitle advantares_item--subtitle">Планируем налоговую нагрузку и прогнозируем кассовые разрывы</div>
			</div>

			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-3.svg" alt="">
				<div class="title advantares_item--title">
					ЭКОНОМИЯ ВРЕМЕНИ
				</div>
				<div class="subtitle advantares_item--subtitle">Вас обслуживает команда из нескольких бухгалтеров. Больше не нужно тратить время на рутину</div>
			</div>

			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-4.svg" alt="">
				<div class="title advantares_item--title">
					ГАРАНТИЯ РЕЗУЛЬТАТА
				</div>
				<div class="subtitle advantares_item--subtitle">Мы работаем по контракту, который предусматривает нашу ответственность за ошибки в бухгалтерии</div>
			</div>

			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-5.svg" alt="">
				<div class="title advantares_item--title">
					ПРОВЕРЕННЫЕ РЕШЕНИЯ
				</div>
				<div class="subtitle advantares_item--subtitle">Вы получите консультации, которые уже работают в других компаниях</div>
			</div>

			<div class="advantares_item">	
				<img class="advantares_item_icon" src="img/advantares-icon/icon-5.svg" alt="">
				<div class="title advantares_item--title">
					Меньше рутины
				</div>
				<div class="subtitle advantares_item--subtitle">Берем на себя общение с банками, налоговой и всю текучку</div>
			</div>



		</div>
	</section>

	<section class="services" id="tafiff">
		<h2 class="title services--title">что мы можем предложить вашему бизнесу</h2>
		<h3 class="subtitle services--subtitle">Наша компания предоставит оперативную помощь в вопросах любой сложности</h3>

		<div class="services_inner">
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Ведение учёта</div>
					<div class="services_item_price">от 1780 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>

			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Регистрация ООО под ключ</div>
					<div class="services_item_price">от 2000 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>

			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Разовая отчётность</div>
					<div class="services_item_price">от 2000 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>

			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Подбор системы налогообложения</div>
					<div class="services_item_price">от 4000 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Консультации ИП</div>
					<div class="services_item_price">от 3500 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Оптимизация налогов</div>
					<div class="services_item_price">от 5800 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Обслуживание юридических лиц</div>
					<div class="services_item_price">от 4930 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Юридическая консультация</div>
					<div class="services_item_price">от 1930 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
			<div class="services_item">
				<div class="services_item_info">
					<div class="title services_item--title">Разблокировка расчётного счёта</div>
					<div class="services_item_price">от 2940 руб</div>
				</div>
				<a href="about_service.html" class="services_item_details">
					Подробнее
				</a>
			</div>
		</div> <!-- /services_inner -->
	</section>

	<section class="complex">
		<h2 class="title">Комплесный подход</h2>
		<h3 class="subtitle complex--subtitle">Мы поможем вам перераспределить нагрузку c вашей компаний на нас</h3>

		<div class="complex_inner">
			<div class="complex_item">
				<h2 class="complex_item_title">Базовый</h2>
				<h3 class="complex_item_price">
					<i class="fas fa-ruble-sign"></i>
					<span>10 999</span>
					<i class="complex_item_price_month">/мес</i>
				</h3>
				<ul class="complex_item_list">
					<li>Расчет и начисление зарплаты сотрудникам</li>
					<li>Подготовка кадровых документов по сотрудникам</li>
					<li>Подготовка зарплатных документов по сотрудникам</li>
					<li>Подготовка отчетности по сотрудникам (ЕСВ, 1ДФ, другие)</li>
					<li> Юридическая консультация</li>
					<li> Подбор системы налогообложения</li>
					<li> Оптимизация налогов</li>
					<li> Разблокировка расчётного счёта</li>
				</ul>

				<button id="btn_modal" class="complex_item_btn">Заказать</button>
			</div>
			<div class="complex_item">
				<h2 class="complex_item_title">Базовый</h2>
				<h3 class="complex_item_price">
					<i class="fas fa-ruble-sign"></i>
					<span>10 999</span>
					<i class="complex_item_price_month">/мес</i>
				</h3>
				<ul class="complex_item_list">
					<li>Расчет и начисление зарплаты сотрудникам</li>
					<li>Подготовка кадровых документов по сотрудникам</li>
					<li>Подготовка зарплатных документов по сотрудникам</li>
					<li>Подготовка отчетности по сотрудникам (ЕСВ, 1ДФ, другие)</li>
					<li> Юридическая консультация</li>
					<li> Подбор системы налогообложения</li>
					<li> Оптимизация налогов</li>
					<li> Разблокировка расчётного счёта</li>
				</ul>

				<button id="btn_modal" class="complex_item_btn">Заказать</button>
			</div>
			<div class="complex_item">
				<h2 class="complex_item_title">Базовый</h2>
				<h3 class="complex_item_price">
					<i class="fas fa-ruble-sign"></i>
					<span>10 999</span>
					<i class="complex_item_price_month">/мес</i>
				</h3>
				<ul class="complex_item_list">
					<li>Расчет и начисление зарплаты сотрудникам</li>
					<li>Подготовка кадровых документов по сотрудникам</li>
					<li>Подготовка зарплатных документов по сотрудникам</li>
					<li>Подготовка отчетности по сотрудникам (ЕСВ, 1ДФ, другие)</li>
					<li> Юридическая консультация</li>
					<li> Подбор системы налогообложения</li>
					<li> Оптимизация налогов</li>
					<li> Разблокировка расчётного счёта</li>
				</ul>

				<button id="btn_modal" class="complex_item_btn">Заказать</button>
			</div>
		</div>
	</section> <!-- /complex -->


	<section class="handling">
		<div class="title handling--title">как происходит обсуживание</div>
		<div class="handling_inner">
			<div class="handling_item">
				<div class="handling_item_number">1</div>
				<div class="handling_item_info">
					<h2 class=" title handling_item--title">КОММУНИКАЦИЯ</h2>
					<div class="handling_item_text">
						Вас обслуживает целая команда бухгалтеров, но общается один закрепленный Старший бухгалтер. Задачи можно ставить по телефону или по электронной почте.
					</div>
				</div>
				
			</div>

			<div class="handling_item">
				<div class="handling_item_number">2</div>
				<div class="handling_item_info">
					<h2 class=" title handling_item--title">Документы</h2>
					<div class="handling_item_text">
						Сканы документов Вы сбрасываете нам для оперативного отражения в учете. Оригиналы документов приносите в наш офис, после чего они проверяются и сшиваются в папки. Вы получаете папку, готовую к налоговой проверке.
					</div>
				</div>
				
			</div>

			<div class="handling_item">
				<div class="handling_item_number">3</div>
				<div class="handling_item_info">
					<h2 class=" title handling_item--title">Мы ведем бухгалтерию</h2>
					<div class="handling_item_text">
						Мы - это как Ваша собственная бухгалтерия, только в соседнем офисе. Все запросы выполняются максимально оперативно
					</div>
				</div>
				
			</div>

			<div class="handling_item">
				<div class="handling_item_number">4</div>
				<div class="handling_item_info">
					<h2 class=" title handling_item--title">экономия</h2>
					<div class="handling_item_text">
						Снижаем ваши расходы на бухгалтера, юриста, кадровика в несколько раз
					</div>
				</div>
				
			</div>
		</div>

	</section> <!-- /handling -->

	<section class="maps">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4d149d9269ee11260cc696f5d13288f5660dd00230607f78e7e97751deaa1f47&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
	</section>


	<section class="contact" id="contact">
		<h2 class="title">ДАВАЙТЕ ОБСУДИМ ВАШ БИЗНЕС</h2>
		<h3 class="subtitle contact--subtitle">Мы готовы заняться Вашей бухгалтерией уже сегодня</h3>

		<div class="contact_inner">
			<div class="contact_info">
				<h2 class=" title contact_info--title">
					Контакты
				</h2>
				<div class="contact_info_list">
					<img class="contact_info_list_icon" src="img/contact-icon-1.svg" alt="">
					<div class="contact_info_list_text">
						Нальчик, ул головко 196, 3 этаж, 303 каб
					</div>
				</div>

				<div class="contact_info_list">
					<img class="contact_info_list_icon" src="img/contact-icon-2.svg" alt="">
					<div class="contact_info_list_text">
						8-939-838-93-93
					</div>
				</div>
				<div class="contact_info_list">
					<img class="contact_info_list_icon" src="img/contact-icon-3.svg" alt="">
					<div class="contact_info_list_text">
						aida.aloeva.mail.ru
					</div>
				</div>
			</div><!-- /contact_info -->

			<form class="contact_form" action="">
				<input placeholder="Имя" type="text">
				<input placeholder="Фамилия" type="text">
				<input placeholder="Введите телефон" type="text">
				<textarea placeholder="Сообщение" name="" id="" cols="30" rows="10"></textarea>
				<button class="btn">отправить заявку</button>

			</form>

		</div>
	</section>

	<footer class="footer">
		<div class="footer_text">copyright ©  2020г.  WebSky - разработка сайтов и мобильных приложений</div>			 
	</footer>

	

 	
<script src="https://kit.fontawesome.com/56d3c7edd4.js"></script>
<script src="js/main.js"></script>

</body>
</html>