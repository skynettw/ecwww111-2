<?php if (!function_exists('blogus_footer_missed_section')) :
/**
 *  Header
 *
 * @since Blogus
 *
 */
function blogus_footer_missed_section()
{
$you_missed_enable = get_theme_mod('you_missed_enable',true);
$you_missed_title = get_theme_mod('you_missed_title',esc_html__('You Missed','blogus'));
if($you_missed_enable == 'true')
{ ?>
<!--==================== Missed ====================-->
<div class="missed">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="wd-back">
          <?php if($you_missed_title) { ?>
          <div class="bs-widget-title">
            <h2 class="title"><?php echo esc_html($you_missed_title); ?></h2>
          </div>
          <?php } ?>
          <div class="row">
          <?php $blogus_you_missed_loop = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC',  'ignore_sticky_posts' => true));
            if ( $blogus_you_missed_loop->have_posts() ) :
            while ( $blogus_you_missed_loop->have_posts() ) : $blogus_you_missed_loop->the_post(); 
            $url = blogus_get_freatured_image_url($blogus_you_missed_loop->ID, 'blogus-featured'); ?>
          <div class="col-md-6 col-lg-3">
            <div class="bs-blog-post three md back-img bshre mb-lg-0" <?php if(has_post_thumbnail()) { ?> style="background-image: url('<?php echo esc_url($url); ?>'); <?php } ?>">
              <a class="link-div" href="<?php the_permalink(); ?>"></a>
              <div class="inner">
                <div class="bs-blog-category">
                  <?php blogus_post_categories(); ?>
                </div>
                <h4 class="title sm mb-0"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array('before' => 'Permalink to: ','after'  => '') ); ?>"> <?php the_title(); ?></a> </h4> 
              </div>
            </div>
          </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
          </div><!-- end inner row -->
        </div><!-- end wd-back -->
      </div><!-- end col12 -->
    </div><!-- end row -->
  </div><!-- end container -->
</div> 
<!-- end missed -->
<?php 
} }
endif;
add_action('blogus_action_footer_missed_section','blogus_footer_missed_section'); ?>