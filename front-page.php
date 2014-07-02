<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package wimp
 */

get_header(); ?>

<div id="primary" class="content-area">

	<?php
		// Main Featured call out with full bg image
		get_template_part( 'home', 'featured' );

		// Map locations
		get_template_part( 'home', 'map' );

		// Events
		get_template_part( 'home', 'events' );

		// About
		get_template_part( 'home', 'about' );

		// Sponsors listings
		get_template_part( 'home', 'sponsors' );

		// Blog feed
		get_template_part( 'home', 'blog-feed' );

		// Get connected
		get_template_part( 'home', 'get-wimpy' );
	?>

</div><!-- #primary -->

<?php get_footer(); ?>
