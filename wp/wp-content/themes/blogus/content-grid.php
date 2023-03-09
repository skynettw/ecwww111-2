<?php
/**
 * The template for displaying the content.
 * @package Blogus
 */
?>
<div id="grid" class="row" >
     <?php while(have_posts()){ the_post();  
     $blogus_content_layout = esc_attr(get_theme_mod('blogus_content_layout','align-content-right')); ?>
    <div id="post-<?php the_ID(); ?>" <?php if($blogus_content_layout == "grid-fullwidth") { echo post_class('col-lg-4'); } else { echo post_class('col-lg-6'); } ?>>
       <!-- bs-posts-sec bs-posts-modul-6 -->
            <div class="bs-blog-post"> 
                 <?php if ( has_post_format( 'gallery' ) ) { blogus_gallery_format();  } else {  
                    $url = blogus_get_freatured_image_url($post->ID, 'blogus-medium');
                    blogus_post_image_display_type($post); 
                    } ?>
                <article class="small">
                    <?php 
                    $blogus_global_category_enable = get_theme_mod('blogus_global_category_enable','true');
                    if($blogus_global_category_enable == 'true') {
                    ?>
                    <div class="bs-blog-category">
                    <?php blogus_post_categories(); ?>
                    </div>
                    <?php } ?>

                    <h4 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <?php blogus_post_meta(); ?>
                            <?php $blogus_blog_content = get_theme_mod('blogus_blog_content', 'excerpt'); 
                            if($blogus_blog_content == 'excerpt')
                            {
                            ?>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                            <?php } else { the_content(); } ?>
                </article>
            </div>
        </div>
        <?php } ?>
        <div class="col-lg-12 text-center d-md-flex justify-content-center">
            <?php //Previous / next page navigation
                    the_posts_pagination( array(
                    'prev_text'          => '<i class="fa fa-angle-left"></i>',
                    'next_text'          => '<i class="fa fa-angle-right"></i>',
                    ) ); 
            ?>
        </div>
</div>