<?
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anhelfund
 */

?>
<footer id="footer" class="footer">
	<div class="footer__content content">
		<div id="ft1" class="footer__title">
			<h3>Навигация</h3>
		</div>
		<div id="fn" class="footer__nav">
		<?php wp_nav_menu( array(
				'theme_location'  => 'footerMenu1',
				'container'       => null, 
				'menu_class' => 'footer__col',

			) )?>
			<?php wp_nav_menu( array(
				'theme_location'  => 'footerMenu2',
				'container'       => null, 
				'menu_class' => 'footer__col',

			) )?>
			<?php wp_nav_menu( array(
				'theme_location'  => 'footerMenu3',
				'container'       => null, 
				'menu_class' => 'footer__col',

			) )?>
		</div>
		<div id="fd" class="footer__disclaimer">
		<?php the_field('footer_warning', 'option'); ?>
		</div>
		<div id="ft2" class="footer__title">
			<h3>Контакты</h3>
		</div>
		<div id="fc" class="footer__contacts">
			<div class="footer__address">
				<ul>
					<li><a href="tel:<?php the_field('tel', 'option'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/tel.svg" alt=""><?php the_field('tel', 'option'); ?></a></li>
					<li><a href="mailto:<?php the_field('mail', 'option'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/mail.svg" alt=""><?php the_field('mail', 'option'); ?></a></li>
				</ul>
			</div>
			<div class="footer__social">
			<a href="<?php the_field('linkedin', 'option'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/linkedin.svg" alt="LinkedIn" target="_blank"></a>
			<a href="skype:<?php the_field('skype', 'option'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/skype.svg" alt="Skype" target="_blank"></a>
			<a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri();?>/img/instagram.svg" alt="Instagram" target="_blank"></a>
				
				
			</div>
		</div>
		<div id="fb" class="footer__buttons">
			<button class="abtn abtn_w footer__button_1 btn-callback">Обратная связь</button>
			<a href="#body" class="abtn abtn_w footer__button_2"><img src="<?php echo get_template_directory_uri();?>/img/arrow1.svg" alt=""></a>
		</div>
		<div id="fl" class="footer__last">
			<div class="footer__item footer__item_1">Copyright © Anhelfund 2021</div>
			<span class="btn-policy footer__item footer__item_2 footer__link">Политика конфиденциальности</span>
			<a href="https://teleg.run/vladimir_vologin" target="_blank"
				class="footer__item footer__item_3 footer__link">Author Vladimir
				Vologin</a>
		</div>
	</div>
</footer>
<div id="modal-risk" class="modal">
	<div class="modal__body">
		<div class="modal__wrapper modal__wrapper_small content risk">
			<img class="modal__close" src="<?php echo get_template_directory_uri();?>/img/close.svg" alt="Закрыть">
			<div class="modal__content modal__content_small">
				<div class="modal__left modal__left_risk">
					<div id="open-risk"></div>
					<?php the_field('risk_text', 'option')?>
				</div>
				<div class="modal__img modal__img_risk">
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal-callback" class="modal">
	<div class="modal__body">
		<div class="modal__wrapper modal__wrapper_small content risk">
			<img id="callback-close" class="modal__close" src="<?php echo get_template_directory_uri();?>/img/close.svg" alt="Закрыть">
			<div class="modal__content modal__content_small">
				<div class="modal__left modal__left_form">
					<h3 class="content-four__title content-four__title_modal">Напишите мне</h3>
					<h4 class="content-four__subtitle content-four__subtitle_modal">Я лично прочитаю Ваше сообщение и отвечу на
						него</h4>
					<form enctype="multipart/form-data" method="post" id="modal-form" onsubmit="send(event,'send.php')"
						class="content-four__form content-four__rows_modal">
						<input required type="text" name="name" class="input_color_modal content-form__form-input form-grid__item_1"
							placeholder="Ваше имя">
						<input required type="text" name="tel" class="input_color_modal content-form__form-input form-grid__item_2"
							placeholder="Ваш телефон">
						<input type="text" name="email" class="input_color_modal content-form__form-input form-grid__item_3"
							placeholder="Ваш E-mail">
						<textarea name="text" class="input_color_modal content-form__form-input form-grid__item_4"
							placeholder="Ваш вопрос"></textarea>
						<input type="hidden" name="act" value="order">
						<button type="submit" class="abtn abtn_fb  form-grid__item_5">Отправить</button>
						<p class="content-form__warning black-important form-grid__item_6">Вводя ваши данные вы соглашаетесь
							с <br> <span class="btn-policy black-important">152-ФЗ «О персональных данных»</span></p>
					</form>
				</div>
				<div class="modal__img modal__img_callback">
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal-policy" class="modal">
	<div class="modal__body">
		<div class="modal__wrapper modal__wrapper_wide modal__wrapper_padding content risk">
			<img id="policy-close" class="modal__close" src="<?php echo get_template_directory_uri();?>/img/close.svg" alt="Закрыть">
			<div class="modal__content modal__content_wide">
				<div class="modal__left modal__left_policy">
					<h3 class="modal__title">Политика конфиденциальности</h3>
					<p class="modal__p">Настоящий документ «Политика конфиденциальности» (далее по тексту – «Политика»)
						представляет собой правила использования Администрацией сайтата данных интернет-пользователей (далее «вы»
						и/или «Пользователь»), собираемых с использованием сайта www.anhelfund.com (далее – «Сайт»).
					</p>
					<h4 class="modal__subtitle">1. Обрабатываемые данные</h4>
					<p class="modal__p">1.1. Мы не осуществляем сбор ваших персональных данных с использованием Сайта.</p>
					<p class="modal__p">1.2. Все данные, собираемые на Сайте, предоставляются и принимаются в обезличенной форме
						(далее – «Обезличенные данные»).</p>
					<p class="modal__p">1.3. Обезличенные данные включают следующие сведения, которые не позволяют вас
						идентифицировать:</p>
					<p class="modal__p">1.3.1. Информацию, которую вы предоставляете о себе самостоятельно с использованием
						онлайн-форм и программных модулей Сайта, включая имя и номер телефона и/или адрес электронной почты.</p>
					<p class="modal__p">1.3.2. Данные, которые передаются в обезличенном виде в автоматическом режиме в
						зависимости от настроек используемого вами программного обеспечения.</p>
					<p class="modal__p">1.4. Администрация вправе устанавливать требования к составу Обезличенных данных
						Пользователя, которые собираются использованием Сайта.</p>
					<p class="modal__p">1.5. Если определенная информация не помечена как обязательная, ее предоставление или
						раскрытие осуществляется Пользователем на свое усмотрение. Одновременно вы даете информированное согласие на
						доступ неограниченного круга лиц к таким данным. Указанные данные становится общедоступными с момента
						предоставления и/или раскрытия в иной форме.</p>
					<p class="modal__p">1.6. Администрация не осуществляет проверку достоверности предоставляемых данных и наличия
						у Пользователя необходимого согласия на их обработку в соответствии с настоящей Политикой, полагая, что
						Пользователь действует добросовестно, осмотрительно и прилагает все необходимые усилия к поддержанию такой
						информации в актуальном состоянии и получению всех необходимых согласий на ее использование.</p>
					<p class="modal__p">1.7. Вы осознаете и принимаете возможность использования на Сайте программного обеспечения
						третьих лиц, в результате чего такие лица могут получать и передавать указанные в п.1.3 данные в
						обезличенном виде.</p>
					<h4 class="modal__subtitle">2. Цели обработки данных</h4>
					<p class="modal__p">2.1. Администрация использует данные в следующих целях:</p>
					<p class="modal__p">2.1.1. Обработка поступающих запросов и связи с Пользователем;</p>
					<p class="modal__p">2.1.2. Информационное обслуживание, включая рассылку рекламно-информационных материалов;
					</p>
					<p class="modal__p">2.1.3. Проведение маркетинговых, статистических и иных исследований;</p>
					<p class="modal__p">2.1.4. Таргетирование рекламных материалов на Сайте.</p>
					<h4 class="modal__subtitle">3. Требования к защите данных</h4>
					<p class="modal__p">3.1. Администрация осуществляет хранение данных и обеспечивает их охрану от
						несанкционированного доступа и распространения в соответствии с внутренними правилами и регламентами.</p>
					<p class="modal__p">3.2. В отношении полученных данных сохраняется конфиденциальность, за исключением случаев,
						когда они сделаны Пользователем общедоступными, а также когда используемые на Сайте технологии и программное
						обеспечение третьих лиц либо настройки используемого Пользователем программного обеспечения предусматривают
						открытый обмен с данными лицами и/или иными участниками и пользователями сети Интернет.</p>
					<p class="modal__p">3.3. В целях повышения качества работы Администрация вправе хранить лог-файлы о действиях,
						совершенных Пользователем в рамках использования Сайта в течение 1 (Одного) года.</p>
					<h4 class="modal__subtitle">4. Передача данных</h4>
					<p class="modal__p">4.1. Администрация вправе передать данные третьим лицам в следующих случаях:</p>
					<p class="modal__p">Пользователь выразил свое согласие на такие действия, включая случаи применения
						Пользователем настроек используемого программного обеспечения, не ограничивающих предоставление определенной
						информации;</p>
					<p class="modal__p">Передача необходима в рамках использования Пользователем функциональных возможностей
						Сайта;</p>
					<p class="modal__p">Передача требуется в соответствии с целями обработки данных;</p>
					<p class="modal__p">В связи с передачей Сайта во владение, пользование или собственность такого третьего лица;
					</p>
					<p class="modal__p">По запросу суда или иного уполномоченного государственного органа в рамках установленной
						законодательством процедуры;</p>
					<p class="modal__p">Для защиты прав и законных интересов Администрации в связи с допущенными Пользователем
						нарушениями.</p>
					<h4 class="modal__subtitle">5. Изменение Политики конфиденциальности</h4>
					<p class="modal__p">5.1. Настоящая Политика может быть изменена или прекращена Администрацией в одностороннем
						порядке без предварительного уведомления Пользователя. Новая редакция Политики вступает в силу с момента ее
						размещения на Сайте, если иное не предусмотрено новой редакцией Политики.</p>
					<p class="modal__p">5.2. Действующая редакция Политики находится на Сайте в сети Интернет по адресу.
						Действующая редакция Политики от 13 ноября 2020 г.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal-training" class="modal">
	<div class="modal__body">
		<div class="modal__wrapper modal__wrapper_wide content training">

			<div class="modal__content modal__content_wide">
				<div class="training__img">
					<img id="training-close" class="modal__close" src="<?php echo get_template_directory_uri();?>/img/close.svg" alt="Закрыть">
					<h2>Индивидуальное обучение <br> торговле фьючерсами</h2>
				</div>
				<div class="accordeon">
					<div class="accordeon__trigger">
						<h3 class="accordeon__title">Преимущества обучения у меня</h3>
						<svg class="accordeon__arrow" width="29" height="17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path id="path"
								d="M13.704 16L.328 2.587A1.125 1.125 0 011.92 1L14.5 13.615 27.08.999a1.124 1.124 0 111.592 1.588L15.296 16a1.122 1.122 0 01-1.592 0z"
								fill="#000" />
						</svg>
					</div>
					<div class="accordeon__wrapper">
						<div class="accordeon__content">
							<div class="accordeon__grid">
								<div class="accordeon__item">
									<img src="img/features-img-1.svg" alt="Дистанционный формат индивидуального обучения торговле">
									<h4>Дистанционный формат индивидуального обучения торговле</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-2.svg" alt="Бесплатный ознакомительный курс перед началом обучения">
									<h4>Бесплатный ознакомительный курс перед началом обучения</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-3.svg"
										alt="Длительность обучения торговле - до полного усвоения материала">
									<h4>Длительность обучения торговле - до полного усвоения материала</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-4.svg"
										alt="Занятия проходят два-три раза в неделю по 1.5 часа в удобное для Вас время">
									<h4>Занятия проходят два-три раза в неделю по 1.5 часа в удобное для Вас время</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-5.svg" alt="Очень много реальной практики на живых примерах">
									<h4>Очень много реальной практики на живых примерах</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-6.svg"
										alt="Обучение торговле проводится на реальных котировках во время работы бирж">
									<h4>Обучение торговле проводится на реальных котировках во время работы бирж</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-7.svg" alt="Постоянное общение начинающего трейдера с опытным трейдером">
									<h4>Постоянное общение начинающего трейдера с опытным трейдером</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-8.svg" alt="Можно в любой момент переспросить  и задать вопросы">
									<h4>Можно в любой момент переспросить и задать вопросы</h4>
								</div>
								<div class="accordeon__item">
									<img src="img/features-img-9.svg"
										alt="После обучения торговле регулярный анализ торгов трейдера на реальном депозите">
									<h4>После обучения торговле регулярный анализ торгов трейдера на реальном депозите</h4>
								</div>
							</div>

						</div>
					</div>



				</div>
				<div class="training__text">
					<p class="training__p">Цель обучения торговле фьючерсами состоит в том, чтобы дать Вам достаточно полное
						представление о том, что такое фьючерсы, как они работают и как ими торговать. Мы обсудим механизм торговли
						ценовыми стратегиями фьючерсов, как стать эффективным трейдером, получить знания о функционировании и
						механизме ценообразования на фьючерсном рынке.</p>

					<p class="training__p">Прежде чем Вы начнете интенсивное обучение торговле фьючерсами, есть несколько вещей, с
						которыми нужно будет познакомиться:</p>
					<p class="training__p list">
						1.Изучение торговой стратегии. <br>
						2.Научиться следить за тенденциями рынка, процентных ставок и доходности облигаций. <br>
						3.Выбрать временные рамки, в которых Вам будет комфортно торговать. <br>
						4.Знакомство с рисками, прежде чем начинать торговать. <br>
						5.Создать тонкую стратегию управления рисками, исходя из своих возможностей. <br>
						6.Правильно оперировать соотношением риска/вознаграждения, исходя из <br> текущих рыночных условий. <br>
						7.Узнать типы торговых ордеров брокеру. <br>
						8.Понять важность Short- техники торговли и другое. <br>
					</p>
					<div class="big">
						<h3 class="big__text">Торговлю фьючерсами нельзя проводить импульсивно.</h3>
					</div>
					<p class="training__p">Необходимо четко соблюдать <strong>правила определенной торговой системы</strong>,
						которую Вы узнаете в процессе индивидуального обучения трейдингу. </p>
					<p class="training__p">Торговая система определяет, когда необходимо войти в рынок, открыв длинные или
						короткие позиции, когда закрыть сделку: либо с прибылью либо с убытком. </p>
					<p class="training__p">Торговая система должна быть подходящей для Вас. Каждый фьючерсный трейдер имеет свой
						собственный уровень терпимости к риску и объем свободного рискового капитала, поэтому торговая система
						должна использоваться с учетом этих параметров.</p>
					<div class="big">
						<h3 class="big__text">Обучение торговой системе основано на внутридневной торговле фьючерсными контрактами.
						</h3>
					</div>
					<p class="training__p">Преподаваемая мною торговая система позволяет торговать на большом количестве
						фьючерсных рынков одновременно или же только на одном рынке. Перед глазами нужно иметь около десяти рынков,
						чтобы иметь возможность выбирать один или несколько, или сразу же все рынки. Главное, чтобы рынки были
						динамичны. </p>
					<p class="training__p">Торги по конкретному рынку не должны проходить в узком ценовом диапазоне.
						<strong>Наличие волатильности на рынках - главный принцип</strong>, на котором строится получение прибыли.
						При этом, абсолютно все равно, куда может пойти цена: вверх или вниз.
					</p>
					<p class="training__p">В течение всей торговой сессии трейдер уже понимает: дойдет ли цена до первого,
						второго, третьего или пятого уровня, которые он определяет согласно торговой системе.</p>
					<p class="training__p">Основной принцип нашей торговой системы состоит в ритмичности рынков. У каждого рынка
						есть до пяти ритмических уровней, в которых возможно ценовое движение. Ритмичность рынка может проявляться в
						течение дня, а может и не показать себя. Это зависит от динамичности рынка, которая привязана к таким
						внешним факторам, как экономические и геополитические новости.
					</p>
					<p class="training__p">Ритм рынка позволяет определить ценовые границы, за которые цена не уйдет.
						<strong>Понимание
							ценовых границ играет для трейдера важную психологическую роль.</strong>
					</p>
					<div class="speech">
						<img src="img/speech-img.jpg" alt="Преподаваемая мною торговая система предоставляет реальную возможность освоить
						уникальную методику торгов фьючерсными инструментами, позволяет оптимизировать прибыль, управлять риском
						и минимизировать возможные потери.">
						<div class="speech__text">
							<p class="speech__p">Преподаваемая мною торговая система предоставляет реальную возможность освоить
								уникальную методику торгов фьючерсными инструментами, позволяет оптимизировать прибыль, управлять риском
								и минимизировать возможные потери.
							</p>
							<p class="speech__p">Пройдя индивидуальное обучение торговле фьючерсными контрактами, Вы научитесь
								понимать и оценивать события, которые происходят ежедневно в экономике и использовать эти знания для
								успешных торгов фьючерсами каждый день.
							</p>
						</div>
					</div>
					<p class="training__p">Есть консервативные и агрессивные фьючерсные стратегии, но даже агрессивные трейдеры
						должны только рисковать деньгами, которые они могут позволить себе потерять, особенно если они неопытны в
						торговле фьючерсами. </p>
					<p class="training__p"><strong>Трейдер должен принять риск, как должное</strong>. Он не должен надеяться на
						высокую инвестиционную доходность без принятия волатильности (изменчивости рынка). </p>
					<div class="big">
						<h3 class="big__text">Риск является неотъемлемой частью
							фьючерсных рынков.
						</h3>
					</div>
					<p class="training__p">Риск является неотъемлемой частью фьючерсных рынков. Все активы характеризуются двумя
						главными особенностями - это риск и инвестиционная доходность. Именно риск служит причиной нестабильности
						рынков и вызывает резкие изменения цен на акции, золото, нефть, бонды...</p>
					<p class="training__p">Несмотря на то, что о риске говорят и пишут много, он остается малопонятным в сфере
						финансовой индустрии понятием. Одним из самых главных источников опасности торговли фьючерсами является риск
						внезапных потерь. Таким образом, риск - основная забота трейдера и это составная часть любого трейдингового
						процесса. Именно риск отделяет понятие сбережение от понятия инвестиция.</p>
					<p class="training__p">Успешный трейдер не может надеяться на высокую прибыль без принятия флуктуации или
						изменчивости рынка. Также он должен понимать, что флуктуация никогда не бывает позитивной.</p>
					<p class="training__p">Нужно четко осознать грань своей терпимости к риску. Не все дни бывают у трейдера
						прекрасными, много и плохих дней. Плохие дни должны быть учтены в торговой стратегии. Но самое главное, что
						надо осознавать, что если нет риска, то нет причин ожидать более высокую прибыль.</p>
					<div class="big">
						<h3 class="big__text">Терпимость к риску - это своего рода езда верхом на быке, а награда в виде прибыли
							присуждается тем, кто дольше всех остается верхом на быке.
						</h3>
					</div>
					<p class="training__p">Учет риска в торговой системе означает, что будущая прибыль от торговли фьючерсами
						непредсказуема. Понятие риска может быть определено как возможность того, что фактическая прибыль не может
						быть такой же, как ожидалось.</p>
					<p class="training__p">Риск может рассматриваться как шанс изменения прибыли. Торговля фьючерсами считается
						очень рискованным занятием. </p>
					<p class="training__p">Трейдеру научиться управлять рисками так же важно, как и разработать надежную торговую
						стратегию. Неизбежность убыточных сделок в торговле - это аксиома. Тонкая стратегия управления рисками - это
						то, что дает трейдерам возможность, теряя на сделках, не наносить непоправимый ущерб своим счетам.</p>
					<p class="training__p">Если Вас заинтересовала описанная выше информация – приглашаю на свой эксклюзивный курс
						по обучению торговле фьючерсами на бирже.</p>
				</div>
				<div class="training__end">
					<button id="btn-callback-training"
						class=" training__button button training__button_full-black">Связаться</button>
					<button id="back" class=" training__button button training__button_black">Назад</button>
					<!-- <p class="training__signature">Р. Казанович</p> -->
					<img class="training__signature" src="img/signature.svg" alt="Руслан Казанович">
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.modal__img_risk{
		background-image: url('<?php the_field('risk_img', 'option');?>');
	}
	.modal__img_callback{
		background-image: url('<?php the_field('contants_img', 'option');?>');
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri (); ?>/js/script.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>

<script>
jQuery(document).ready(function($) {
             for(i=0;i<=$('.field_rows div:last-child').attr('row');i++)
	          {
		      for(j=1;j<=10;j++)//
		      {
			
			    $('.tdt__table tbody tr:nth-child('+(i+1)+') td:nth-child('+(j+2)+')').find('div.cell .signal_time').html($("div[row="+i+"][col="+j+"]").html());
		      }
        	}	
	setInterval(function() {
	 $('.field_rows').remove();
     //updating
	 $.ajax({
		 url: "/торговые-сигналы-закрытый-доступ/?ajax=1",
		 success: function(data){
			 $('.updating').html(data);
             for(i=0;i<=$('.field_rows div:last-child').attr('row');i++)
	          {
		      for(j=1;j<=10;j++)//
		      {
			
			    $('.tdt__table tbody tr:nth-child('+(i+1)+') td:nth-child('+(j+2)+')').find('div.cell .signal_time').html($("div[row="+i+"][col="+j+"]").html());
		      }
        	}
			 
         }
	 });	 
	 
	}, 5000);
	
	
});
</script>
</body>

</html>
