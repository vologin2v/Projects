<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.min.css">
	<title>Советы для сбора информации</title>
</head>

<body>
	<div class="container">
		<h1 class="container__title">Идем дальше</h1>
		<p class="container__text container__text_justify"><?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>, ваш собственный сайт - это продолжение вас и вашей
			компании. Одна из задач
			сайта
			-
			преподнести вас в лучшем свете вашим посетителям и заставить их сделать выбор в вашу пользу. Любая информация
			будет
			крайне полезной для ее размещения на сайте. Не ленитесь собрать как можно больше информации - это целиком и
			полностью повлияет на финальный результат.</p>
		<div class="container__line"></div>
		<h2 class="container__h2">Что будет полезным</h2>
		<div class="article">
			<div class="question question_1">
				<img id="question-1" src="/img/icons/question.svg" alt="">
				<div id="question-modal-1" class="question__modal">
					<p class="question__text">
						Необходима для <br>
						заключения договора <br>
						и регистрации домена <br> на ваше имя
					</p>
				</div>
			</div>
			<h3 class="article__title">1. Юридичесая информация</h3>
			<p class="article__text">
				Паспортные данные <br>
				Реквизиты компании <br>
				Документы <br>
			</p>
		</div>

		<div class="article">
			<div class="question question_2">
				<img id="question-2" src="/img/icons/question.svg" alt="">
				<div id="question-modal-2" class="question__modal">
					<p class="question__text">
						Они помогут вашим <br>
						клиентам найти и <br>
						связаться с Вами
					</p>
				</div>
			</div>
			<h3 class="article__title">2. Контактные данные</h3>
			<p class="article__text">
				Номера телефонов <br>
				E-mail<br>
				Адреса <br>
				Схемы проездов<br>
				График работы<br>
			</p>
		</div>

		<div class="article">
			<h3 class="article__title">3. Список товаров и услуг</h3>
			<p class="article__text">
				Полное название<br>
				Стоимость<br>
				Артикул<br>
				Краткое и полное описание<br>
				Характеристики<br>
			</p>
		</div>

		<div class="article">
			<h3 class="article__title">4. Медиа материалы</h3>
			<p class="article__text">
				Фото<br>
				Видео<br>
				Логотипы<br>
				Баннеры<br>
				Фирменные цвета<br>
			</p>
		</div>
		<div class="note">
			<p class="note__text">Примечание: рекомендуется использовать медиа материалы высокого качества и разрешения. Если
				такие отсутствуют, лучшим решением будет воспользоваться услугами соответствующих специалистов</p>
		</div>

		<div class="article">
			<h3 class="article__title">5. Продающая информация о компании</h3>
			<p class="article__text">
				Цель компании, миссия <br>
				Подход к работе<br>
				История компании <br>
				Состав команды <br>
				Памятные даты, события, числа <br>
			</p>
		</div>

		<div class="article">
			<h3 class="article__title">6. Достижения</h3>
			<p class="article__text">
				Награды<br>
				Сертификаты<br>
				Благодарственные письма<br>
			</p>
		</div>

		<div class="article">
			<h3 class="article__title">7. Информация о производстве и обработке клиентов</h3>
			<p class="article__text">
				Технология производства товара / оказания услуги <br>
				Характерные особенности<br>
				Стадии<br>
				Как проходит цикл сделки<br>
			</p>
		</div>

		<div class="article">
			<div class="question question_3">
				<img id="question-3" src="/img/icons/question.svg" alt="">
				<div id="question-modal-3" class="question__modal">
					<p class="question__text">
						Только реальные <br> отзывы без нагрузки

					</p>
				</div>
			</div>
			<h3 class="article__title">8. Кейсы и отзывы</h3>
		</div>

		<div class="article article_last">
			<h3 class="article__title">9. Пожелания</h3>
			<p class="article__text">
				Каким бы вы хотели видеть сайт<br>
				Чтобы вы хотели на нем видеть<br>
				Какие дополнительные функции на нем должны присутствовать <br>
			</p>
		</div>
		<p class="container__text container__text_margin_lg">Присылайте в любом удобном для вас виде, или на e-mail
			<a href="mailto:vologin.vladimir@mail.ru">hello@vladimirvologin.ru</a>.
			Остальное обсудим с Вами на следующей беседе.
			</з>
		<p class="container__text container__text_margin_sm">
			Рекомендую заранее ознакомиться с образцами документов, чтобы ислючить неловкие моменты в процессе работы.
		</p>
		<div class="links">
			<a href="/" class="links__item">Договор.pdf</a>
			<a href="/" class="links__item">Техничесое задание.pdf</a>
			<a href="/" class="links__item">Счет на оплату услуг.pdf</a>
		</div>
		<img src="img/logo.svg" alt="" class="logo">
	</div>

	<script>
		//Manual
		document.getElementById('question-1').onmouseover = function () {
			document.getElementById('question-modal-1').style.opacity = '1'
		}
		document.getElementById('question-1').onmouseout = function () {
			document.getElementById('question-modal-1').style.opacity = '0'
		}
		document.getElementById('question-2').onmouseover = function () {
			document.getElementById('question-modal-2').style.opacity = '1'
		}
		document.getElementById('question-2').onmouseout = function () {
			document.getElementById('question-modal-2').style.opacity = '0'
		}
		document.getElementById('question-3').onmouseover = function () {
			document.getElementById('question-modal-3').style.opacity = '1'
		}
		document.getElementById('question-3').onmouseout = function () {
			document.getElementById('question-modal-3').style.opacity = '0'
		}
	</script>

</body>

</html>