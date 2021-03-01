<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anhelfund
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=640px">
	<title><?php wp_title(); ?> </title>
	<meta name="description" content="<?php $my_descr = get_post_meta($post->ID, "_yoast_wpseo_metadesc", true); if ($my_descr){ echo  "$my_descr"; } else echo  "Нет описания для данной страницы"; ?>">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300&display=swap"
		rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/woocommerce/woocommerce.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/woocommerce/style1.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri (); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri (); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri (); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri (); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri (); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
</head>

<body id="body" <?php body_class(); ?>>
	<header class="header">
		<div class="header__content content">
			<a href="<?php bloginfo( 'url' )?>" class="header__logo">
				<img src="<?php the_field('logo', 'option'); ?>" alt="AnhelFund.com">
			</a>
			<button id="header-burger" class="header__burger">
				<img id="btn-header-burger" src="<?php echo get_template_directory_uri (); ?>/img/burger.svg" alt="Мобильное меню">
			</button>
			<button id="header-close" class="header__close">
				<img id="btn-header-close" src="<?php echo get_template_directory_uri (); ?>/img/close.svg" alt="Закрыть">
			</button>
			<?php wp_nav_menu( array(
				'theme_location'  => 'headerMenu',
				'container'       => 'nav', 
				'container_class' => 'header__nav',  

			) )?>
			<!-- <nav class="header__nav">
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/">Инвестору</a></li>
					<li><a href="/">Торговые сигналы</a></li>
					<li><a href="/">Обучение</a></li>
					<li><a href="/">Контакты</a></li>
				</ul>
			</nav> -->
		</div>
		<div class="sub-header">
		 <div class="nav">
		 <?php wp_nav_menu( array(
				'theme_location'  => 'headerSubMenu',
				'container_class' => 'sub-header__content content',  
				'menu_class' => 'sub-header__ul',
			))?>
		 </div> 
			<!-- <nav class="sub-header__content content">
				<ul class="sub-header__ul">
					<li class="sub-header__item"><a href="/">Экономический календарь</a>
					</li>
					<li class="sub-header__item"><a href="/">Календарь экспирации</a></li>
					<li class="sub-header__item"><a href="/">Биржевые часы</a></li>
					<li class="sub-header__item"><a href="/">Энциклопедия</a></li>
					<li class="sub-header__item sub-header__item_sub"><a href="/">TV Online</a>
						<ul class="sub-menu">			
								<li><a href="/">RBK TV</a></li>
								<li><a href="/">Bloomberg TV</a></li>		
						</ul>
					</li>
					<li class="sub-header__item"><a href="/">Telegramm канал</a></li>
				</ul>
			</nav> -->
		</div>
		<div id="mobile-menu" class="mobile-menu">
			<div class="mobile-menu__content content">
			<?php wp_nav_menu( array(
				'theme_location'  => 'headerMenu',
				'container'       => 'nav', 
				'container_class' => 'mobile__nav',  
			) )?>
				<!-- <nav class="mobile__nav">
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="/">Инвестору</a></li>
						<li><a href="/">Торговые сигналы</a></li>
						<li><a href="/">Обучение</a></li>
						<li><a href="/">Контакты</a></li>
					</ul>
				</nav> -->
				<?php wp_nav_menu( array(
				'theme_location'  => 'headerSubMenuMob',
				'container'       => 'nav', 
				'container_class' => 'mobile__sub-nav',  
			) )?>
				<!-- <nav class="mobile__sub-nav">
					<ul>
						<li><a href="/">Экономический календарь</a></li>
						<li><a href="/">Календарь экспирации</a></li>
						<li><a href="/">Биржевые часы</a></li>
						<li><a href="/">Энциклопедия</a></li>

						<li><a href="/">RBK TV</a></li>
						<li><a href="/">Bloomberg TV</a></li>

						<li><a href="/">Telegramm канал</a></li>
					</ul>
				</nav> -->
			</div>
		</div>
	</header>
