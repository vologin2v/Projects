<?php
/*
Template Name: Страница "Торговые сигналы. Промо"
 */

get_header();
?>
<style>
	.trs-features__item_1 {
			background-image: url(<?php the_field('trs_features_img_1')?>);
		}
		.trs-features__item_2 {
			background-image: url(<?php the_field('trs_features_img_2')?>);
		}
		.trs-features__item_3 {
			background-image: url(<?php the_field('trs_features_img_3')?>);
		}
		.trs-demo{
			background-image: url(<?php the_field('demo_bg')?>);
		}
		.trs-offer{
			background-image: url(<?php the_field('trs_offer_bg')?>);
		}
</style>
<section class="trs-one content">
	<div class="trs-one__left">
		<h1><?php the_field('trs_title')?></h1>
		<img src="<?php the_field('trs_img')?>" alt="<?php the_field('trs_title')?>">
	</div>
	<!-- <form action="" class="form">
		<h3>Зарегистрироваться</h3>
		<input type="text" placeholder="Имя">
		<input type="text" placeholder="E-mail">
		<input type="text" placeholder="Телефон">
		<input type="text" placeholder="Пароль">
		<input type="text" placeholder="Повторите пароль">
		<button class="abtn abtn_fb">Зарегистрироваться</button>
	</form> -->
</section>
<p class="trs-two content">
<?php the_field('trs_text')?>
</p>
<section class="trs-features content">
	<div class="trs-features__item trs-features__item_1">
		<img src="<?php echo get_template_directory_uri();?>/img/trs-features-1.svg" alt="<?php the_field('trs_features_title_1')?>">
		<h2><?php the_field('trs_features_title_1')?></h2>
		<p><?php the_field('trs_features_text_1')?></p>
	</div>
	<div class="trs-features__item trs-features__item_2">
		<img src="<?php echo get_template_directory_uri();?>/img/trs-features-2.svg" alt="<?php the_field('trs_features_title_2')?>">
		<h2><?php the_field('trs_features_title_2')?></h2>
		<p><?php the_field('trs_features_text_2')?></p>
	</div>
	<div class="trs-features__item trs-features__item_3">
		<img src="<?php echo get_template_directory_uri();?>/img/trs-features-3.svg" alt="<?php the_field('trs_features_title_3')?>">
		<h2><?php the_field('trs_features_title_3')?></h2>
		<p><?php the_field('trs_features_text_3')?></p>
	</div>
</section>
<section class="trs-demo">
	<div class="trs-demo__content content">
		<div class="trs-demo__text">
			<h2><?php the_field('demo_title')?></h2>
			<p><?php the_field('demo_text')?></p>
		</div>
		<div class="trs-demo__buttons">
			<a href="<?php echo get_page_link(123) ?>" class="abtn abtn_fw trs-demo__button">Попробовать</a>
			<p><?php the_field('demo_time')?></p>
		</div>
</section>
<section class="trs-how">
	<div class="trs-how__content content">
		<h2><?php the_field('trs_how_title')?></h2>
		<div class="trs-how__items">
			<div class="trs-how__item">
				<img src="<?php echo get_template_directory_uri();?>/img/trs-how-1.svg" alt="<?php the_field('trs_how_1')?>">
				<div class="features-line"></div>
				<p><?php the_field('trs_how_1')?></p>
			</div>
			<div class="trs-how__item">
				<img src="<?php echo get_template_directory_uri();?>/img/trs-how-2.svg" alt="<?php the_field('trs_how_2')?>">
				<div class="features-line"></div>
				<p><?php the_field('trs_how_2')?></p>
			</div>
			<div class="trs-how__item">
				<img src="<?php echo get_template_directory_uri();?>/img/trs-how-3.svg" alt="<?php the_field('trs_how_3')?>">
				<div class="features-line"></div>
				<p><?php the_field('trs_how_3')?></p>
			</div>
			<div class="trs-how__item">
				<img src="<?php echo get_template_directory_uri();?>/img/trs-how-4.svg" alt="<?php the_field('trs_how_4')?>">
				<div class="features-line"></div>
				<p><?php the_field('trs_how_4')?></p>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="trs-offer">
	<div class="trs-offer__content content">
		<p><?php the_field('trs_offer_text')?></p>
		<div class="trs-offer__row">
			<h3><?php the_field('trs_offer_price')?></h3>
			 <a href="?add-to-cart=532" class="abtn abtn_fw">Купить подписку</a> 
		</div>
	</div>
</section>
<?php
get_footer();
