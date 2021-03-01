<?php
/*
Template Name: Страница "Экономический календарь"
 */

get_header();
?>
<div class="content">
	<div class="page__title">
		<img src="<?php echo get_template_directory_uri(  );?>/img/table-icon.svg" alt="Экономический календарь">
		<h2>Экономический календарь</h2>
	</div>
	<div class="page__body">

		<iframe style=" height: 1000px; border: none; overflow: hidden; margin: 0 auto;"
			src="<?php the_field('ecc_link');?>"
			width="100%" height="240"></iframe>
	</div>
</div>
<?php
get_footer();
