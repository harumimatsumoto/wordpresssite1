<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oria
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">
		<?php $myposts = get_posts(array('post_type' => 'page')); ?>
		<?php foreach($myposts as $post) : setup_postdata($post); ?>
			<?php
					get_template_part( 'template-parts/content', /*'toppage'*/get_post_format() );
			?>
		<?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
