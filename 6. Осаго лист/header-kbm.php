<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!-- <title><?php wp_title("|", true, 'right'); ?><?php bloginfo('name'); ?> </title> -->
	<meta name="description" content="<?php bloginfo('description')?>">
	<meta name="viewport" content="width=320px, initial-scale=1,  user-scalable=yes">
<?php
 wp_head();
if ( is_front_page() ) {
	do_action('wp_index');
} else {
    do_action('wp_calc');
}
?>

</head>
<header class="header header-kbm">
		<div class="header-nav">
			<img class="header-nav-burger hide-pc"src="<?php echo get_template_directory_uri(); ?>/assets/img/open-menu.svg" alt="Меню">
			<div class="header-nav-logo"><a href="<?php bloginfo('url')?>"><p>ОСАГО_LIST</p></a></div>
			<?php wp_nav_menu(array(
					'theme_location' => 'top_menu',
					'container' => 'nav',
					'container_class' => 'header-nav-menu',
					'menu_class' => 'wp-menu',
				));?>
			<!-- <div class="header-nav-lk">
				<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lk.svg" alt="Личный кабинет"></a>
			</div> -->
			<div class="header-nav-ordercall hide-mb">
				<button class="call-button">Заказать звонок</button>
				<span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/green.svg" alt=""><a href="tel:<?php the_field('home_number')?>"><?php the_field('home_number')?></a></span>
			</div>
		</div>