<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Anhelfund
 */

get_header();
?>

<div class="err__body">
	<h1>404</h1>
	<div class="err__row">
		<h2>Страница не найдена</h2>
		<a href="<?php bloginfo( 'url' )?>" class="abtn abtn_b">Вернуться
			на главную</a>
	</div>
</div>

<?php
get_footer();
