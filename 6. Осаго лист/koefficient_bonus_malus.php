<?php
/*
Template Name: Калькулятор: КБМ
Template Post Type: page
*/
get_header('kbm');
?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/w_kbm.css" rel="stylesheet">
<div class="header-body-clc">
			<h1><?php the_field('kbm_title')?></h1>
	
			<div class="header-body-content-clc">

				<div class="tabs-body-buttons" id="tabs">
					<div class="tab tabs-body-buttons_item" id="one"><h3><?php the_field('kbm_tab_1_title')?></h3></div>
					<div class="tab tabs-body-buttons_item" id="two"><h3><?php the_field('kbm_tab_2_title')?></h3></div>
					<div id="active-line" class="active-line"></div>
				</div>

				<div class="tabs-body-content" id="home">
					<div class="feature">
				<!-- Что это и зачем нужно? -->
				<div class="feature-img">
					<img src="<?php the_field('kbm_tab_1_img')?>" alt="<?php the_field('kbm_tab_1_title')?>">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb"><?php the_field('kbm_tab_1_title')?></h3>
						<div class="blue-line hide-mb"></div>
						<?php the_field('kbm_tab_1_text')?>	
					</div>
					</div>
				<div class="feature">
				<!-- От чего зависит стоимость? -->
				<div class="feature-img">
					<img src="<?php the_field('kbm_tab_2_img')?>" alt="<?php the_field('kbm_tab_2_title')?>">
				</div>
					<div class="feature-content">
						<h3 class="hide-mb"><?php the_field('kbm_tab_2_title')?></h3>
						<div class="blue-line hide-mb"></div>
						<?php the_field('kbm_tab_2_text')?>
					</div>
				</div>

				</div>
			</div>	
		</div>
	</header>
	<section class="calc">
		<?php if (is_user_logged_in()): ?>
		<div class="calc-content-kbm">
			<h2 class="section-header kbm-section-header">Калькулятор КБМ</h2>
			<div id="w_kbm"></div>
		</div>
	</section>
<?php else: ?>
<div class="login" id="restricted_area">
<h3 class="login-title">Для оформления полиса</h3>
	<span class="login-btn" id="authorize_me">авторизуйтесь</span> <span class="ili">или</span> 
	<span class="login-btn" id="register_me">зарегистрируйтесь</span>
</div>
<?php endif; ?>
	<?php get_footer();?>
<script type="text/javascript">
			var tabs = new MGFX.Tabs('.tab','.feature',{
				autoplay: false,
				transitionDuration:500,
				slideInterval:3000,
				hover:true
			});


			var $set = $('.tabs-body-buttons .tabs-body-buttons_item');
			$('.tabs-body-buttons').on('click', '.tabs-body-buttons_item', function () {
    			var n=$set.index(this); 
    			var num=n.toString(10);
    			console.log(num);
    			lefd=25+n*50
    			console.log(lefd);
    			document.querySelector('#active-line').style.left = lefd + '%';
    		});
		</script>
<?php get_footer('clc');?>