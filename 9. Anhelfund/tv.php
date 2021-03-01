<?php
/*
Template Name: Страница "ТВ"
 */

get_header();
?>
<div class="content">
<div class="page__title">
	<img src="<?php echo get_template_directory_uri(  );?>/img/tv-icon.svg" alt="<?php the_title(); ?>">
	<h2><?php the_title(); ?></h2>
</div>
<div class="page__body">
<div id="player" class="player"></div>
<a href="<?php the_field('tv_source') ?>" class="abtn abtn_b" target="_blank">Перейти на сайт</a>
</div>
</div>
<script src="<?php echo get_template_directory_uri (); ?>/js/playerjs.js" type="text/javascript"></script>
<script>
   var player = new Playerjs({id:"player", file:"<?php the_field('tv_link')?>"});
</script>
<?php
get_footer();
?>
