<?php
/*
Template Name: Главная страница
 */

get_header();
?>
<style>
		.one{
			background-image: url('<?php the_field('one_bg');?>');
		}
		.sentence{
			background-image: url('<?php the_field('sentence_bg');?>');
		}
		.four{
			background-image: url('<?php the_field('four_bg');?>');
		}
	</style>
	<section class="one">
	<div class="gradient">
		<div class="content content-one">
			<div class="header1">
				<div class="one__offer">
					 <h1 class="one__title"><?php the_field('index_title');?> <!--<span class="span_title">торговля фьючерсами</span><br>
						<span class="one__span">- Ваш путь к финансовой независимости</span> -->
					</h1>
					<h2 class="one__subtitle"><?php the_field('index_subtitle_1')?></h2>
					<h2 class="one__subtitle"><?php the_field('index_subtitle_2')?></h2>
					<button class="btn-callback abtn abtn_fw  one__button">Связаться</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="sentence">
	<div class="sentence__content content">
		<span class="sentence__title">
			<h2>Торговые сигналы</h2><img src="<?php echo get_template_directory_uri(  );?>/img/online.svg" alt="Онлайн">
		</span>
		<div class="sentence__features">
			<div class="sentence__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/sentense-img.svg" alt="<?php the_field ('sentence_features_1')?>">
				<h3> <?php the_field ('sentence_features_1')?></h3>
			</div>
			<div class="sentence__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/sentense-img.svg" alt="<?php the_field ('sentence_features_2')?>">
				<h3> <?php the_field ('sentence_features_2')?></h3>
			</div>
			<div class="sentence__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/sentense-img.svg" alt="<?php the_field ('sentence_features_3')?>">
				<h3> <?php the_field ('sentence_features_3')?></h3>
			</div>
		</div>
		<div class="sentence__buttons">
			<a href="<?php echo get_page_link(123) ?>" class="abtn abtn_fw">Демо доступ</a>
			<a href="<?php echo get_page_link(193) ?>" class="a_white">Подробнее</a>
		</div>
	</div>
</section>


<section class="two">
	<div class="content content-two">
		<div class="content-two__left">
			<div class="content-two__wrapper">
				<p class="content-two__text"><?php the_field('two_text_1')?></p>
				<p class="content-two__text"><?php the_field('two_text_2')?></p>
				<p class="content-two__text"><?php the_field('two_text_3')?></p>

				<div class="content-two__buttons">
					<button class="btn-callback  abtn abtn_w">Связаться</button>
					<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank">LinkedIn</a>
					<a href="skype:<?php the_field('skype', 'option'); ?>" target="_blank">Skype</a>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">Instagram</a>
				</div>
			</div>
		</div>
		<div class="content-two__right">
			<img src="<?php the_field('person_photo')?>" alt="<?php the_field('person_name')?>. <?php the_field('person_regalia')?>">
			<div class="two-name">
				<p class="two-name__name"><?php the_field('person_name')?></p>
				<p class="two-name__regalia"><?php the_field('person_regalia')?></p>
			</div>
		</div>
	</div>
</section>
<section id="three" class="three">
	<div class="content content-three">
		<div class="content-three__left">
			<img src="<?php the_field('three_img')?>" alt="<?php the_field('three_title')?>">
		</div>
		<div class="content-three__right">
			<h3 class="content-three__title"><?php the_field('three_title')?></h3>
			<?php the_field('three_text')?>
			<a href="#open-risk" class="btn-risk content-three__btn abtn_b abtn">Риски</a>
		</div>
	</div>
</section>
<section id="four" class="four">
	<div class="content content-four">
		<div class="content-four__left">
			<div class="four__wrapper">
				<div class="four__contacts">
					<div class="four-name">
						<p class="four-name__name"><?php the_field('person_name')?></p>
						<p class="four-name__regalia"><?php the_field('person_regalia')?></p>
					</div>
					<a href="tel:<?php the_field('tel', 'option'); ?>" class="content-four__link"><?php the_field('tel', 'option'); ?></a>
					<a href="mailto:<?php the_field('mail', 'option'); ?> " class="content-four__link"><?php the_field('mail', 'option'); ?></a>
					<div class="link-wrapper">
						<a href="<?php the_field('linkedin', 'option'); ?>" class="content-four__link"
							target="_blank">/ LinkedIn</a>
						<a style="margin-left: 10px;" href="skype:<?php the_field('skype', 'option'); ?>" class="content-four__link" target="_blank">
							Skype</a>
							<a style="margin-left: 10px;" href="<?php the_field('instagram', 'option'); ?>" class="content-four__link" target="_blank">
							Instagram</a>
					</div>
				</div>
			</div>
		</div>
		<div class="content-four__right">
			<h3 class="content-four__title content-four__title_four">Напишите мне</h3>
			<h4 class="content-four__subtitle content-four__subtitle_four">Я лично прочитаю Ваше сообщение и отвечу на него
			</h4>
			<form enctype="multipart/form-data" method="post" id="form" onsubmit="send(event, 'send.php')"
				class="content-four__form content-four__rows_four">
				<input required type="text" name="name"
					class="content-form_fix input_color_four content-form__form-input form-grid__item_1" placeholder="Ваше имя">
				<input required type="text" name="tel"
					class="content-form_fix input_color_four content-form__form-input form-grid__item_2"
					placeholder="Ваш телефон">
				<input type="text" name="email"
					class="content-form_fix input_color_four content-form__form-input form-grid__item_3" placeholder="Ваш E-mail">
				<textarea name="text" class="content-form_fix input_color_four content-form__form-input form-grid__item_4"
					placeholder="Ваш вопрос"></textarea>
				<input type="hidden" name="act" value="order">
				<button type="submit" class="abtn abtn_w  form-grid__item_5">Отправить</button>
				<p class="content-form__warning form-grid__item_6">Вводя ваши данные вы соглашаетесь
					с <br> <span class="btn-policy">152-ФЗ «О персональных данных»</span></p>
			</form>
		</div>
	</div>
</section>

<?php
get_footer();
