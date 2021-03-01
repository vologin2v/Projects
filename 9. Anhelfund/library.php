<?php
/*
Template Name: Библиотека
 */

get_header();
?>
<style>
.book__img{
	background-image: url(<?php echo get_template_directory_uri(  );?>/img/library-plug.jpg);
}
</style>

<div class="content">
<div class="page__title">
	<img src="<?php echo get_template_directory_uri(  );?>/img/library-icon.svg" alt="Библиотека">
	<h2>Библиотека</h2>
</div>
	<div class="page__body library library__content ">

<?php 
$posts = get_posts( array(
	'post_type'   => 'book',
) );
?>

<?php foreach( $posts as $post ){
	setup_postdata($post);?>
  <div class="library__item book">
			<div class="book__img">
				<img src="<?php the_field('book_img') ?>" alt="<?php the_field('book_name') ?>">
			</div>
			<h3><?php the_field('book_name') ?></h3>
			<p><?php the_field('book_author') ?></p>
			<a href="<?php the_field('book_file') ?>" class="abtn abtn_b" download>Скачать</a>
		</div>
	<?php 	
	}
?>

	</div>
</div>
<?php
get_footer();
