<?php
/*
Template Name: Страница "Календарь экспирации"
 */

get_header();
?>
<div class="content">
<div class="page__title ">
	<img src="<?php echo get_template_directory_uri();?>/img/table-icon.svg" alt="Календарь экспирации контрактов">
	<h2>Календарь экспирации контрактов</h2>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/currency.svg" alt="Валюта">
			<h3>Валюта</h3>
		</div>
<?php echo do_shortcode( '[table id=1 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/energy.svg" alt="Энергоносители">
			<h3>Энергоносители</h3>
		</div>
<?php echo do_shortcode( '[table id=2 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/percent.svg" alt="Процентные ставки">
			<h3>Процентные ставки</h3>
		</div>
<?php echo do_shortcode( '[table id=3 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/corn.svg" alt="Зерновые">
			<h3>Зерновые</h3>
		</div>
<?php echo do_shortcode( '[table id=4 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/index.svg" alt="Индексы">
			<h3>Индексы</h3>
		</div>
<?php echo do_shortcode( '[table id=5 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/steel.svg" alt="Металлы">
			<h3>Металлы</h3>
		</div>
<?php echo do_shortcode( '[table id=6 /]' ); ?>
</div>

<div class="exp-table ">
		<div class="exp-table__title">
			<img src="<?php echo get_template_directory_uri();?>/img/soft.svg" alt="Софты">
			<h3>Софты</h3>
		</div>
<?php echo do_shortcode( '[table id=7 /]' ); ?>
</div>
</div>
<?php
get_footer();
