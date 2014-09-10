<?php
/**
 * Template Name: Impact Pharmacy Homepage
 *
 */

get_header(); ?>

<p>Welcome to impact pharmacy online</p>

<?php echo do_shortcode('[featured_products per_page="1" columns="1"]'); ?>
<?php echo do_shortcode('[recent_products per_page="1" columns="1"]'); ?>

<?php get_footer(); ?>