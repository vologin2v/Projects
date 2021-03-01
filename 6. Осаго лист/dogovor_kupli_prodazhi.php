<?php
/*
Template Name: Калькулятор: ДКП
Template Post Type: page
*/
get_header('dkp');
?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/w_dkp.css" rel="stylesheet">
<div class="header-body-clc dkp-clc">
			<h1><?php the_field('dkp_title')?></h1>
		</div>
	</header>
<?php if (is_user_logged_in()): ?>
	<section class="calc dkp-clc">
		<?php the_field('dkp_calc_content')?>
	</section>
<?php else: ?>
<div class="login" id="restricted_area">
<h3 class="login-title">Для оформления договора</h3>
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