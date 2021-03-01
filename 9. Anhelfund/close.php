<?php
/*
Template Name: Страница "Закрытый доступ"
 */

get_header();
?>
<div class="close__body">
	<img src="<?php echo get_template_directory_uri(  );?>/img/red-close.svg" alt="">
	<h2>Доступ закрыт!</h2>
	<h3>Чтобы продолжить, купите ежемесячную подписку или авторизуйтесь</h3>
	<div class="close__buttons">
		<a class="abtn abtn_fb" href="<?php echo get_page_link(193) ?>">Купить подписку</a>
		<a class="abtn abtn_b" href="<?php echo get_page_link(123) ?>">Авторизоваться</a>
	</div>
</div>
<?php
get_footer();
