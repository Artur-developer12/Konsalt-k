<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Услуги</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header class="header header--about">
		<div id="nav_inner">
			<div class="container">
				<div class="header_inner">
					<div class="header_logo">
						<div class="header_logo_img">
						</div>
						<a href="index.html" class="header_logo_text">Консалт-к</a>
					</div>

					<nav class="header_nav--about">
						<button id="btn_modal" class="btn">Связаться с нами</button>
					</nav>			
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="header_block">
				<div class="title">Ведение бухгалтерского учета</div>
				<div class="header_block_line"></div>
				<div class="header_block_subtitle">
					Подготовим, сдадим, убедимся, что приняли
				</div>
				<button id="btn_modal" class="btn">Связаться с нами</button>
			</div>
		</div>
	</header>
	<div id="modal" class="modal">
		<div class="modal_inner">
			<div class="modal_close" id="modal_close">
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
	<section class="info">
		<div class="container">
			<div class="info_inner">
				<div class="info_breadCramp">
					<a href="" class="info_breadCramp_page">
						Главная / 
					</a>
					<a href="" class="info_breadCramp_page info_breadCramp--active">
						Ведение бухгалтерского учета
					</a>
				</div>

				<div class="info_item">
					<div class="title info--title">Почему учет так важен для бизнеса?</div>
					<div class="info_item_text">
						<p>
							Бухучет — это свод подробных данных о материальном положении компании, в который входят не только денежные активы организации на счетах, но и имущество, займы, долговые обязательства и хозяйственные операции общества с ограниченной ответственностью или ИП.
						</p>
						
						<p>
							В бухучете и бухгалтерской отчетности максимально заинтересовано государство, потому что через бухгалтерию оно отслеживает денежные потоки и соблюдение законодательства.
						</p>

						<p>
							Такой контроль осуществляется, в том числе, через ИФНС с помощью налоговых проверок, которые могут повлечь за собой огромные штрафы, если компания не вела бухгалтерский учет или вела его некорректно.
						</p>
						
						<p>
							Четкие данные о финансовых операциях компании помогают руководителям выработать правильную стратегию развития и оценить прибыльность и убыточность бизнеса.
						</p>
						
					</div>

					<div class="info_item_line"></div>
					<div class="info_item_fact">73% выездных налоговых проверок в 2019 году завершились выявлением нарушений</div>
				</div>

				<div class="info_item">
					<div class="title info--title">Кто должен вести бухучет?</div>

						<div class="info_item_text">
						<p>
							Ведение бухучета входит в обязанности всех организаций, вне зависимости от системы налогообложения.

						</p>
						
						<p>
							Комплексное ведение бухгалтерии предприятия все чаще передают на аутсорсинг в специализированные компании. Самостоятельное ведение бухучета организации отнимает много времени, которое можно потратить на развитие бизнеса, а содержать штатного специалиста дорого и не всегда целесообразно, особенно для задач бухгалтерии маленькой фирмы.

						</p>
						
						<p>
							Компания «Консалт-К» предлагает полное ведение бухгалтерского учета ООО и ИП.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="sale">
		<div class="container">
			<div class="sale_inner">
				<div class="sale_text">При заказе услуги через наш сайт <br> скидка 10%</div>
				<button id="btn_modal" class="btn">оставить заявку</button>
			</div>
		</div>
	</section>	

	<footer class="footer">
		<div class="footer_text">copyright ©  2020г.  WebSky - разработка сайтов и мобильных приложений</div>			 
	</footer>


	<script src="js/main.js"></script>
</body>
</html>