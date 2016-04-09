<?php
/**
 * Template for the 404 page.
 *
 * @package Sage/Templates
 */

get_template_part( 'templates/page', 'header' );
?>

<div class="alert alert-warning">
	<?php esc_html_e( 'Sorry, but the page you were trying to view does not exist.', 'sage' ); ?>
</div>

<?php get_search_form(); ?>
