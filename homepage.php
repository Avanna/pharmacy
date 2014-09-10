<?php
/**
 * Template Name: Impact Pharmacy Homepage
 *
 */

get_header(); ?>

<div id="slider">
	<p>Welcome to impact pharmacy online</p>
</div>

<?php echo do_shortcode('[featured_products per_page="3" columns="3"]'); ?>
<?php echo do_shortcode('[recent_products per_page="3" columns="3"]'); ?>

<?php get_footer(); ?>