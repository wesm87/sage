<?php
/**
 * Template for displaying search results.
 *
 * @package Sage/Templates
 */

get_template_part( 'templates/page', 'header' );
?>

<?php if ( ! have_posts() ) : ?>
	<div class="alert alert-warning">
		<?php esc_html_e( 'Sorry, no results were found.', 'sage' ); ?>
	</div>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'templates/content', 'search' ); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
