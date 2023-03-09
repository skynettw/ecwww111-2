<?php
/**
 * The template for displaying all WooCommerce pages.
 *
 * @package Blogus
 */
get_header(); ?>
<!--==================== breadcrumb section ====================-->
<?php do_action('blogus_breadcrumb_content'); ?>

<!-- #main -->
<main id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 bs-card-box padding-20">
				<?php woocommerce_content(); ?>
			</div>
		</div><!-- .container -->
	</div>	
</main><!-- #main -->
<?php get_footer(); ?>