<footer class="footer">
		<div class="footer-left">
			<p class="footer-left-logo">ОСАГО_LIST</p>
			<h3>Телефон:<span><a href="tel:<?php the_field('home_number')?>"><?php the_field('home_number')?></a></span></h3>
			<h3>E-mail: <span><a href="mailto:<?php the_field('footer_email')?>"><?php the_field('footer_email')?></a></span></h3>
			<a class="footer-politic hide-pc politic-call">Политика конфиденциальности</a>
		</div>
		<div class="footer-middle hide-mb"><a  class="footer-politic politic-call">Политика конфиденциальности</a></div>
		<div class="footer-right">
			<div class="createers">
				<a href="">Сайт сделан <br> в <span>CREATEERS</span></a>
			</div>
		</div>
	</footer>

	<!-- Модальное окно для закрытого доступа -->
	   <div class="modal">
	  	 		<div class="modal-window">
	  	 			<h2>Для оформления полиса необходимо <br> войти или зарегистрироваться</h2>
	  	 			<div class="modal-window-content">
	  	 				<div class="modal-window-content-top back-grid">
	  	 					<div class="tabs-body-buttons-modal" id="tabs">
	  	 						<div class="tab1 tabs-body-buttons_item-1" id="five"><h3>Вход</h3></div>
	  	 						<div class="tab1 tabs-body-buttons_item-1" id="six"><h3>Регистрация</h3></div>
	  	 						<div class="active-line-modal"></div>
	  	 					</div>
	  	 					<div class="back-link">
	  	 						<a href="">Перейти на главную</a>
	  	 					</div>
	  	 				</div>
	  	 				<div class="modal-window-content-bottom">
	  	 					<div class="tabs-body-content-modal" id="home">
	  	 			<div class="feature1 modal-login">
	  	 				<form action="">
	  	 					<input class="modal-input" type="text" placeholder="Пароль или E-mail">
	  	 					<input class="modal-input" type="password" placeholder="Введите ваш пароль">
	  	 					<button>Войти в личный кабинет</button>
	  	 				</form>
	  	 			</div>
	  	 			<div class="feature1 modal-signup">
	  	 				<form action="">
	  	 					<input class="modal-input" type="text" placeholder="Ваше имя">
	  	 					<input class="modal-input" type="text" placeholder="Ваш телефон">
	  	 					<input class="modal-input" type="text" placeholder="Придумайте логин">
	  	 					<input class="modal-input" type="text" placeholder="E-mail">
	  	 					<input class="modal-input" type="password" placeholder="Придумайте пароль">
	  	 					<input class="modal-input" type="password" placeholder="Повтор пароля">
	  	 					<button>Получить доступ</button>
	  	 					<div class="modal-check">
	  	 						<input type="checkbox" checked="true">
	  	 						<span>Я принимаю условия <a href="">передачи информации</a></span>
	  	 					</div>
	  	 				</form>
	  	 			</div>
	  	 				</div>
	  	 			</div>
	  	 		</div>
	  	 	</div>
	  	 	</div>  
<!-- Модальное окно для лк -->
	 <div id="lk" class="modal">
			<div class="modal-window mw">
				<div class="modal-window-content">
					<div class="modal-window-content-top">
						<div class="tabs-body-buttons-modal gc-2" id="tabs">	
							<div class="grs-2 tab2 tabs-body-buttons_item-1 t2" id="seven"><h3>Вход</h3></div>
							<div class="grs-2 tab2 tabs-body-buttons_item-1 t2 " id="eight"><h3>Регистрация</h3></div>
							<div class="active-line-modal"></div>
							<div class="close-block close">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="">
							</div>
						</div>
		
					</div>
					<div class="modal-window-content-bottom">
						<div class="tabs-body-content-modal" id="home">
				<div class="feature2 modal-login">
					<form action="">
						<input class="modal-input" type="text" placeholder="Пароль или E-mail">
						<input class="modal-input" type="password" placeholder="Введите ваш пароль">
						<button>Войти в личный кабинет</button>
					</form>
				</div>
				<div class="feature2 modal-signup">
					<form action="">
						<input class="modal-input" type="text" placeholder="Ваше имя">
						<input class="modal-input" type="text" placeholder="Ваш телефон">
						<input class="modal-input" type="text" placeholder="Придумайте логин">
						<input class="modal-input" type="text" placeholder="E-mail">
						<input class="modal-input" type="password" placeholder="Придумайте пароль">
						<input class="modal-input" type="password" placeholder="Повтор пароля">
						<button>Получить доступ</button>
						<div class="modal-check">
							<input type="checkbox" checked="true">
							<span>Я принимаю условия <a href="">передачи информации</a></span>
						</div>
					</form>
				</div>
					</div>
				</div>
			</div>
		</div>
		</div> 

<!-- Мобильное меню -->
<div id="modal-menu" class="modal">
	<div class="modal-menu mw">
		<div class="modal-menu-close">
			<img  id="modal-menu-close"class="close" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="">
		</div>
		<?php wp_nav_menu(array(
					'theme_location' => 'top_menu',
					'container' => 'nav',
					'container_class' => 'modal-menu-content',
					'menu_class' => 'modal-menu-content-ul',
				));?>
		

	</div>
</div>
<div class="modal modal-call" >
	<div class="modal-window-call mw">
		<div class="modal-window-call-top">
			<img  id="modal-menu-close"class="close close-call" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="">
			<h2>Обратная связь</h2>
		</div>
		<div class="modal-window-call-bottom">
			<!-- <input class="mc mc-input" type="text" placeholder="Введите ваше имя">
			<input class="mc mc-input .form-tel" type="tel" placeholder="Ваш телефон">
			<button class="mc mc-button">Оставить заявку</button>  -->
			<?php echo do_shortcode('[contact-form-7 id="322" title="Обратная связь"]')?> 
		</div>
	</div>
</div>
<div id="modal-politic" class="modal">
		<div class="modal-window-info mw">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="close" class="close close-politic">
			<div class="modal-content">
				<p>Предоставляя свои персональные данные Покупатель даёт согласие на обработку, хранение и использование своих персональных данных на основании ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. в следующих целях:</p>

				<p>Регистрации Пользователя на сайте
				Осуществление клиентской поддержки
				Получения Пользователем информации о маркетинговых событиях
				Выполнение Продавцом обязательств перед Покупателем
				Проведения аудита и прочих внутренних исследований с целью повышения качества предоставляемых услуг.
				Под персональными данными подразумевается любая информация личного характера, позволяющая установить личность Покупателя такая как:</p>

				<p>Фамилия, Имя, Отчество<br>
				Дата рождения<br>
				Контактный телефон<br>
				Адрес электронной почты<br>	
				Почтовый адрес<br>
				Персональные данные Покупателей хранятся исключительно на электронных носителях и обрабатываются с использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка персональных данных необходима в связи с исполнением требований законодательства.</p>

				<p>Продавец обязуется не передавать полученные персональные данные третьим лицам, за исключением следующих случаев:</p>

				<p>По запросам уполномоченных органов государственной власти РФ только по основаниям и в порядке, установленным законодательством РФ<br>
				Стратегическим партнерам, которые работают с Продавцом для предоставления продуктов и услуг, или тем из них, которые помогают Продавцу реализовывать продукты и услуги потребителям. Мы предоставляем третьим лицам минимальный объем персональных данных, необходимый только для оказания требуемой услуги или проведения необходимой транзакции. <br>
				Продавец оставляет за собой право вносить изменения в одностороннем порядке в настоящие правила, при условии, что изменения не противоречат действующему законодательству РФ. Изменения условий настоящих правил вступают в силу после их публикации на Сайте.</p>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>
<script>
	$('.call-button').click(function(){
  		$('.modal-call').css("display","flex");
  		$('body').css("overflow","hidden");

  	});
	$('.politic-call').click(function(){
		console.log(1)
  		$('#modal-politic').css("display","flex");
  		$('body').css("overflow","hidden");
  	});
		$(".form-tel").mask("+7(999) 999-99-99");
			/*var tabs = new MGFX.Tabs('.tab','.feature',{
				autoplay: false,
				transitionDuration:500,
				slideInterval:3000,
				hover:true
			});
			var tabs = new MGFX.Tabs('.tab1','.feature1',{
				autoplay: false,
				transitionDuration:500,
				slideInterval:3000,
				hover:true
			});
			var tabs = new MGFX.Tabs('.tab2','.feature2',{
				autoplay: false,
				transitionDuration:500,
				slideInterval:3000,
				hover:true
			});*/
			
    		$(document).ready(function(){
      			$('.company-slider').slick({
  					responsive: [
    					{
    					  breakpoint: 600,
    					  settings: {
    					    arrows:false,
      						autoplay:true,
  							infinite: true,
  							speed: 300,
  							slidesToShow: 5,
  							centerMode: true,
  							variableWidth: true,
    					  }
    					},
    					{
    						breakpoint:10000,
    						settings:{
    							variableWidht:false,
    							centerMode:false,
    							slidesToShow:5,
    							slidesToScroll:1,
    							autoplay:true,
    							speed:300,
    							arrows:true,
    							prevArrow: '<button class="arrow-prev"></button>',
        						nextArrow: '<button class="arrow-next"></button>',
    						}
    					}
    					// You can unslick at a given breakpoint now by adding:
    					// settings: "unslick"
    					// instead of a settings object
  				]
      			});
    		});

			$('.tab').click(function(){
				$('.tab').removeClass('tabs-active');
				$(this).addClass("tabs-active");
			})
			$('.close').click(function(){
  			$('.modal').hide();
  			$('body').css("overflow", "scroll");
  		}) 
			$('.header-nav-burger').click(function(){
				$('body').css("overflow","hidden");
				$('.modal-menu').css("left","0");
				$('#modal-menu').show();
				
			});
			$('#modal-menu-close').click(function(){
				$('.modal-menu').css("left","-70%");
			})
			$('.modal').mouseup(function (e){ // событие клика по веб-документу
			var div = $(".mw"); // тут указываем ID элемента
				if (!div.is(e.target) // если клик был не по нашему блоку
		    	&& div.has(e.target).length === 0) { // и не по его дочерним элементам
					$('.modal').hide(); // скрываем его
					$('body').css("overflow", "auto");
					$('.modal-menu').css("left","-70%");
				}
			});
			var $set1 = $('.tabs-body-buttons-modal .t2');
			$('.tabs-body-buttons-modal').on('click', '.t2', function () {
    			var n1=$set1.index(this); 
    			var num1=n1.toString(10);
    			console.log(n1);
    			lefd1=n1*50
    			console.log(lefd1);
    			document.querySelector('.active-line-modal').style.left = lefd1 + '%' + ' !inportant';
    		});
    		var $set = $('.tabs-body-buttons .tabs-body-buttons_item');
			$('.tabs-body-buttons').on('click', '.tabs-body-buttons_item', function () {
    			var n=$set.index(this); 
    			var num=n.toString(10);
    			lefd=12.5+n*25
    			document.querySelector('#active-line').style.left = lefd + '%';
    		});

    		$(document).ready(function() {  // 1 строка
				$("#SCIB-31").mouseover(function (){  // 2 строка
					$('#SCIB-3').css("height","40%"); //3 строка
					$('#SCIB-3 h3').css("opacity", "0");
 				});
 				$("#SCIB-31").mouseout(function (){
 					$('#SCIB-3').css("height","95%");
 					$('#SCIB-3 h3').css("opacity", "1");
 				});
			});
			$(document).ready(function() {  // 1 строка
				$("#SCIB-41").mouseover(function (){  // 2 строка
					$('#SCIB-4').css("height","50%"); //3 строка
					$('#SCIB-4 h3').css("opacity", "0");
 				});
 				$("#SCIB-41").mouseout(function (){
 					$('#SCIB-4').css("height","95%");
 					$('#SCIB-4 h3').css("opacity", "1");
 				});
			});

			$(function(){
				$('sub-menu').show();
				$('.header-nav-menu .menu-item').hover(function(){
					$(this).children('.sub-menu').show(0).css("opacity", "1").css("display","flex");
				},function(){
					$(this).children('.sub-menu').delay(300).hide(0).css("opacity","0");
				})
			})

		$('.sub-menu').append("<img src='<?php echo get_template_directory_uri();?>/assets/img/triangle.svg'>");
		$('.modal-menu-content-ul li').addClass('mm-item');
	
</script>
</body>
</html>
