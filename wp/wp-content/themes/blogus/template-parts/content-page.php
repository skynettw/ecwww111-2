<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blogus
 */

?>

<?php if( class_exists('woocommerce') && (is_account_page() || is_cart() || is_checkout())) { ?>
	<div class="col-md-12 bs-card-box padding-20">
		<?php if (have_posts()) {  while (have_posts()) : the_post(); ?>
			<?php the_content(); endwhile; } } else {?>
			<div class="col-lg-8">
				<div class="bs-card-box padding-20">
					<?php if( have_posts()) :  the_post(); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>		
					<?php the_content(); ?>
					<?php endif; 
						while ( have_posts() ) : the_post();
						// Include the page
						the_content();
						comments_template( '', true ); // show comments
						
						endwhile;
					?>	
				</div>
			</div>
	<!--Sidebar Area-->
	<aside class="col-lg-4">
         <?php get_sidebar();?>
    </aside>
	<?php } ?>
	<!--Sidebar Area-->