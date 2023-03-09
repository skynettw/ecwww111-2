<?php
if (!function_exists('blogus_get_terms')):
function blogus_get_terms( $category_id = 0, $taxonomy='category', $default='' ){
    $taxonomy = !empty($taxonomy) ? $taxonomy : 'category';

    if ( $category_id > 0 ) {
            $term = get_term_by('id', absint($category_id), $taxonomy );
            if($term)
                return esc_html($term->name);


    } else {
        $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => true,
        ));


        if (isset($terms) && !empty($terms)) {
            foreach ($terms as $term) {
                if( $default != 'first' ){
                    $array['0'] = __('Select Category', 'blogus');
                }
                $array[$term->term_id] = esc_html($term->name);
            }

            return $array;
        }   
    }
}
endif;


if (!function_exists('blogus_get_column')):
function blogus_get_column( $default='' ){


  // Declare an array 
$arr = array( "2" => "2", "3" => "3", "4" => "4", "6" => "6", "7" => "7", "8" => "8", "10" => "10", "12" => "12");  
  
// Loop through the array elements 
foreach ($arr as $element) { 
    echo esc_attr("$element");
}

return $arr;
     
}
endif;

/**
 * Returns all categories.
 *
 * @since blogus 1.0.0
 */
if (!function_exists('blogus_get_terms_link')):
function blogus_get_terms_link( $category_id = 0 ){

    if (absint($category_id) > 0) {
        return get_term_link(absint($category_id), 'category');
    } else {
        return get_post_type_archive_link('post');
    }
}
endif;

/**
 * Returns word count of the sentences.
 *
 * @since blogus 1.0.0
 */
if (!function_exists('blogus_get_excerpt')):
    function blogus_get_excerpt($length = 25, $blogus_content = null, $post_id = 1) {
        $widget_excerpt   = blogus_get_option('global_widget_excerpt_setting');
        if($widget_excerpt == 'default-excerpt'){
            return the_excerpt();
        }

        $length          = absint($length);
        $source_content  = preg_replace('`\[[^\]]*\]`', '', $blogus_content);
        $trimmed_content = wp_trim_words($source_content, $length, '...');
        return $trimmed_content;
    }
endif;

/**
 * Returns no image url.
 *
 * @since blogus 1.0.0
 */
if(!function_exists('blogus_no_image_url')):
    function blogus_no_image_url(){
        $url = get_template_directory_uri().'/assets/images/no-image.png';
        return $url;
    }

endif;





/**
 * Outputs the tab posts
 *
 * @since 1.0.0
 *
 * @param array $args  Post Arguments.
 */
if (!function_exists('blogus_render_posts')):
  function blogus_render_posts( $type, $show_excerpt, $excerpt_length, $number_of_posts, $category = '0' ){

    $args = array();
   
    switch ($type) {
        
        case 'recent':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'orderby' => 'date',
                'ignore_sticky_posts' => true
            );
            break;

        case 'popular':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'ignore_sticky_posts' => true
            );
            $category = isset($category) ? $category : '0';
            if (absint($category) > 0) {
                $args['cat'] = absint($category);
            }
            break;

        case 'categorised':
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => absint($number_of_posts),
                'ignore_sticky_posts' => true
            );
            $category = isset($category) ? $category : '0';
            if (absint($category) > 0) {
                $args['cat'] = absint($category);
            }
            break;


        default:
            break;
    }

    if( !empty($args) && is_array($args) ){
        $all_posts = new WP_Query($args);
        if($all_posts->have_posts()):
            echo '<div class="bs-posts-sec bs-posts-modul-2"><div class="bs-posts-sec-inner row"><div class="small-list-post col-lg-12"><ul>';
            while($all_posts->have_posts()): $all_posts->the_post();

                ?>
                
                  <li class="small-post clearfix">
                        <?php
                        if(has_post_thumbnail()){
                            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                            $url = $thumb['0'];
                            $col_class = 'col-sm-8';
                        }else {
                            $url = '';
                            $col_class = 'col-sm-12';
                        }
                        global $post;
                        ?>
                        <?php if (!empty($url)): ?>
                           <div class="img-small-post">
                                <img src="<?php echo esc_url($url); ?>"/>
                            </div>
                        <?php endif; ?>
                        <div class="small-post-content">
                                   <?php blogus_post_categories('/'); ?>
                                 <div class="title_small_post">
                                     <h5 class="title">
                                    <a href="<?php the_permalink(); ?>"> 
                                        <?php the_title(); ?> 
                                    </a>
                                   </h5>
                                </div>
                        </div>
                </li>
            <?php
            endwhile;wp_reset_postdata();
            echo '</ul></div></div></div>';
        endif;
    }
}
endif;