<?php
/*
Template Name: Калькулятор: Несчастный случай
Template Post Type: page
*/
get_header();
?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/w_family.css" rel="stylesheet">
<div class="header-body-clc">
			<h1><?php the_field('ns_title')?></h1>
			<div class="header-body-content-ns">
				<!-- Что это и зачем нужно? -->
				<div class="feature-img-ns">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tabs-img-1.jpg" alt="">
				</div>
					<div class="feature-content-ns">
						<h3 class="hide-mb">Страхование <br> несчастного случая</h3>
						<div class="blue-line-ns hide-mb"></div>
							<p>Страхование взрослых и детей</p>
							<p>Расширенный перечень видов спорта</p>
							<p>Страховая сумма до 1.5 млн.рублей</p>
					</div>
			</div>	
		</div>
	</header>
	<section class="calc-ns">
		<?php if (is_user_logged_in()): ?>
		<h2 class="section-header">Рассчитайте стоимость онлайн</h2>
		<?php the_field('ns_calc_content')?>
	</section>
<?php else: ?>
<div class="login" id="restricted_area">
<h3 class="login-title">Для оформления полиса</h3>
	<span class="login-btn" id="authorize_me">авторизуйтесь</span> <span class="ili">или</span> 
	<span class="login-btn" id="register_me">зарегистрируйтесь</span>
</div>
<?php endif; ?>
		</div>
<?php 
get_footer();
get_footer('clc');
?>