<?php
/*
Template Name: Страница "Инвестору"
 */

get_header();
?>
<style>
.inv-one{
	background-image: url('<?php the_field('inv_bg_mob');?>');
}
@media screen and (min-width: 700px) {
		.inv-one{
			background-image: url('<?php the_field('inv_bg_pc');?>');
		}
	}
</style>
<section class="inv-one">
	<div class="inv-ove__content content">
		<h1>
			<?php the_field('inv_title')?>
		</h1>
		<p><?php the_field('inv_subtitle')?></p>
		<div class="inv-one__features">
			<div class="inv-one__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/inv-one-1.svg" alt="<?php the_field('inv_features_1')?>">
				<div class="features-line"></div>
				<h3><?php the_field('inv_features_1')?></h3>
			</div>
			<div class="inv-one__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/inv-one-2.svg" alt="<?php the_field('inv_features_2')?>">
				<div class="features-line"></div>
				<h3><?php the_field('inv_features_2')?></h3>
			</div>
			<div class="inv-one__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/inv-one-3.svg" alt="<?php the_field('inv_features_3')?>">
				<div class="features-line"></div>
				<h3><?php the_field('inv_features_3')?></h3>
			</div>
			<div class="inv-one__item">
				<img src="<?php echo get_template_directory_uri(  );?>/img/inv-one-4.svg" alt="<?php the_field('inv_features_4')?>">
				<div class="features-line"></div>
				<h3><?php the_field('inv_features_4')?></h3>
			</div>
		</div>
	</div>
</section>
<section class="inv-list">
	<div class="inv-list__content content">
		<h2><?php the_field('inv_list_title')?></h2>
		<div class="inv-list__roll">
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">1</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_1')?>
				</p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">2</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_2')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">3</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_3')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">4</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_4')?>
				</p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">5</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_5')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">6</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_6')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">7</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_7')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">8</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_8')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">9</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_9')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">10</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_10')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">11</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_11')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">12</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_12')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">13</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_13')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">14</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_14')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">15</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_15')?></p>
			</div>
			<div class="inv-list__item">
				<div class="number">
					<p class="number__digit">16</p>
				</div>
				<p class="inv-list__article"><?php the_field('inv_list_16')?></p>
			</div>
		</div>
		<a href="#open-risk" class="btn-risk inv__btn abtn abtn_b">Риски</a>
	</div>
</section>
<?php
get_footer();
