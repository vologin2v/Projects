<?php get_header();?>

<div class="header-body">
			<div class="header-body-left">
				<h1><?php the_field('main_title')?></h1>
				<div class="header-features">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-features-mob-1.svg" alt="Без очереди">
					<h2>Без очереди</h2>
				</div>
				<div class="header-features">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-features-mob-2.svg" alt="В любое удобное вам время">
					<h2>В любое удобное вам время</h2>
				</div>
				<div class="header-features">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-features-mob-3.svg" alt="Без навязывания дополнительных услуг">
					<h2>Без навязывания дополнительных услуг</h2>
				</div>
				<div class="header-features">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-features-mob-4.svg" alt="Без комиссии напрямую от страховых компаний">
					<h2>Без комиссии напрямую от страховых компаний</h2>
				</div>
			</div>

			<div class="header-body-right">
				<div class="header-body-right-content">
					<h3>Калькулятор ОСАГО</h3>
					<p>Узнайте стоимость страхового <br> полиса не выходя из дома</p>
					<button onclick="document.location='osago'">Расчитать стоимость полиса</button> 
					<img class="rings hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/rings.svg" alt="">
				</div>
				
			</div>
			
		</div>
<img class="auto hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/auto.png" alt="">
	</header>
	<section class="tabs">
		<h2>Рассчитайте стоимость онлайн</h2>
		
		<div class="tabs-body">
			<div class="tabs-body-buttons" id="tabs">
				<div class="tab tabs-body-buttons_item tabs-active" id="one"><h3>Несчастный случай</h3></div>
				<div class="tab tabs-body-buttons_item" id="two"><h3>Договор <br class="hide-pc"> купли-продажи</h3></div>
				<div class="tab tabs-body-buttons_item" id="three"><h3>Полис путешественника</h3></div>
				<div class="tab tabs-body-buttons_item" id="four"><h3>Проверка кбм</h3>
				</div>
				<div id="active-line" class="active-line"></div>
			</div>

			<div class="tabs-body-content" id="home">
			<div class="feature">
				<!-- Несчастный случай -->
				<div class="feature-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-img-1.jpg" alt="">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb">Страхование <br> несчастного случая</h3>
						<div class="blue-line hide-mb"></div>
						<ul>
							<li><span>Стахование взрослых и детей</span></li>
							<li><span>Расширенный перечень видов спорта</span></li>
							<li><span>Страховая сумма до 1.5 млн. рублей</span></li>
						</ul>
						<button onclick="document.location='neschastnyj_sluchaj'">Рассчитать стоимость полиса</button>
					</div>
			</div>
			<!-- Договор купли-продажи -->
			<div class="feature">
				<div class="feature-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-img-2.jpg" alt="">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb">Договор купли-продажи</h3>
						<div class="blue-line hide-mb"></div>
						<p class="feature-p-2">Уважаемые гости и участники сервиса, на нашем сайте доступно бесплатное оформление договора купли-продажи установленной формы</p>
						<button onclick="document.location='dogovor_kupli_prodazhi'">Оформить договор</button>
					</div>
			</div>
			<!-- Полис путешественника -->
			<div class="feature">
				<div class="feature-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-img-3.jpg" alt="">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb">Полис путешественника</h3>
						<div class="blue-line hide-mb"></div>
						<ul>
							<li><span>Страховка для всех, кто выезжает за границу</span></li>
							<li><span>Защита от крупных незапланированных расходов, связанных с получением медицинской помощи за рубежом</span></li>
							<li><span>При помощи документов на визу обязательно <br>требуется страховка</span></li>
						</ul>
						<button onclick="document.location='polis_puteshestvennika'">Рассчитать стоимость полиса</button>
					</div>
			</div>
			<!-- Расчет КБМ -->
			<div class="feature">
				<div class="feature-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-img-4.jpg" alt="">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb">Проверка КБМ</h3>
						<div class="blue-line hide-mb"></div>
						<p>Коэффициент бонус-малус — числовое значение, которое присваивается при расчете стоимости полиса ОСАГО</p>
						<p>Данное значение изменяется в зависимости от того, попадает ли водитель в дорожно-транспортные проишествия.</p>
						<p class="bold-p hide-mb">При первом оформлении полиса ОСАГО каждому водителю присваивается КБМ=1</p>
						<button onclick="document.location='koefficient_bonus_malus'">Проверить КБМ</button>
					</div>
			</div>
		</div>
		</div>
	</section>
	<section class="services">
		<h2>Что вы хотите застраховать?</h2>
		<div class="services-content">
			<a href="https://sigma.broker/cards/?PointOfSale=RoG3q3I" target="_blank">
				<div class="services-content-item">
				<div id="SCIB-1" class="services-content-item_button">
					<h3>Банковскую карту</h3>
				</div>
				<div class="substrate"></div>

			</div>
			</a>
			<div class="services-content-item">
				<div id="SCIB-2" class="services-content-item_button">
					<h3>Ипотеку</h3>
				</div>
				<div class="substrate"></div>
			</div>
			<div id="SCIB-31" class="services-content-item">

				<div id="SCIB-3" class="services-content-item_button">
					<h3>Здоровье</h3>
				</div>
				<div class="substrate-1"></div>
				
				<div class="substrate">
					<!-- <?php wp_nav_menu(array(
					'theme_location' => 'health_menu',
					'container' => 'div',
					'container_class' => 'substrate-content',
									));?> -->
					<div class="substrate-content">
						<a href="">Несчастный случай</a>
						<a href="">Полис для мигрантов</a>
						<a href="">Антиклещ</a>
					</div> 
				</div>

			</div>
			<a href="osago">
				<div class="services-content-item">
				<div id="SCIB-4" class="services-content-item_button">
					<h3>Транспорт</h3>
				</div>
				<div class="substrate"></div>
			</div>
			</a>
		</div>
	</section>
	<section class="company">
		<h2>Работаем с ведущими страховыми компаниями</h2>
		<div class="company-slider">
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/1.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/2.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/3.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/4.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/5.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/6.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/7.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/8.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/9.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/10.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/11.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/12.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/13.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/14.svg" alt=""></div>
			<div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/15.svg" alt=""></div>
			<!-- <div class="company-slider-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/16.svg" alt=""></div> -->
		</div>
	</section>
	<section class="order">
		<div class="order-content">
			<div class="order-left">
			<h3>Вам нужен техосмотр?</h3>
			<h2>Помощь в оформлении техосмотра за 20 минут</h2>
			<h4>Оформите его онлайн заполнив форму на нашем сайте</h4>
		<div class="order-feature hide-pc">
			<p>Не нужно заезжать в бокс <br>и ждать очереди</p>
			<img class="box"  src="<?php echo get_template_directory_uri(); ?>/assets/img/box.svg" alt="">
		</div>
		<div class="button-preblock">
			<div class="button-block">
			<p>Цена: <br><span>600 ₽</span></p>
			<button onclick="document.location='to'">Оформить техосмотр</button>
		</div>
		</div>
		</div>
		<div class="order-right hide-mb">
			<div class="order-right-text">
				<div class="order-right-text-row">
					<p>1. Заполняете форму</p>
					<p>2. Получаете образец диагностической карты</p>
					<img class="rings-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ring-arrow.svg" alt="">
				</div>
				<div class="order-right-text-row">
					<p>3. Оплачиваете техосмотр картой</p>
					<p>4. Получаете PDF файл на почту или любой мессенджер</p>
					<img class="rings-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/ring-arrow.svg" alt="">
				</div>
			</div>
			<div class="order-feature-pc">
			<div class="order-feature-pc-content">
				<p>Не нужно заезжать в бокс <br>и ждать очереди</p>
			</div>
			<img class="box"  src="<?php echo get_template_directory_uri(); ?>/assets/img/box.svg" alt="">
			<img class="order-rings" src="<?php echo get_template_directory_uri(); ?>/assets/img/order-rings.svg" alt="">
		</div>
		</div>
		</div>
		<img class="auto-2 hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/auto-2.png" alt="" class="auto-2">
	</section>
	<section class="how">
		<h2>Как работает оформление<br class="hide-pc"> полиса онлайн?</h2>
		<div class="how-content">
			<div class="how-content-numbers">
			<div class="how-content-numbers-item">
				<p>01</p>
			</div>
			<div class="how-content-numbers-item">
				<div class="digit-line"></div>
				<p>02</p>
			</div>
			<div class="how-content-numbers-item">
				<div class="digit-line"></div>
				<p>03</p>
			</div>
			<div class="how-content-numbers-item">
				<div class="digit-line"></div>
				<p>04</p>
			</div>
		</div>
		<div class="how-content-words">
			<div class="words-item">
				<img class="hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img-1.svg" alt="">
				<h3>Делаете расчет  <br>своего полиса</h3>
				<div class="blue-line hide-pc"></div>
			</div>
			<div class="words-item">
				<img class="hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img-2.svg" alt="">
				<h3>Сравниваете цены <br> по компаниям</h3>
				<div class="blue-line hide-pc"></div>
			</div>
			<div class="words-item">
				<img class="hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img-3.svg" alt="">
				<h3>Оплачиваете полис <br>картой</h3>
				<div class="blue-line hide-pc"></div>
			</div>
			<div class="words-item">
				<img class="hide-mb" src="<?php echo get_template_directory_uri(); ?>/assets/img/how-img-4.svg" alt="">
				<h3>Получаете полис <br> на свой E-mail</h3>
				<div class="blue-line hide-pc"></div>
			</div>
		</div>
		</div>
	</section>

<?php get_footer();
