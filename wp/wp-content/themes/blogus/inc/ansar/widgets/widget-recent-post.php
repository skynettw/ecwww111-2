<?php add_action( 'widgets_init','blogus_featured_latest_news'); 
function blogus_featured_latest_news() 
{ 
	return   register_widget( 'blogus_featured_latest_news' );
}

class blogus_featured_latest_news extends WP_Widget {

	function __construct() {
		parent::__construct(
			'blogus_featured_latest_news', //Base ID
			__('AR: Recent Post', 'blogus'), //Name
			array( 'description' => __( 'Display your recent posts on your website', 'blogus' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		
		$instance['title'] = (isset($instance['title'])?$instance['title']:'');
		$instance['number_of_posts'] = (isset($instance['number_of_posts'])?$instance['number_of_posts']:3);
		$instance['tumb_size'] = (isset($instance['tumb_size'])?$instance['tumb_size']:'');
		$instance['image_show']=(isset($instance['image_show'])?$instance['image_show']:true);
		
		echo $args['before_widget'];
		
		if($instance['title'])
	
		echo $args['before_title'] . $instance['title'] . $args['after_title'];
		 
		$loop = new WP_Query(array( 'post_type' => 'post','ignore_sticky_posts' => 1, 'showposts' => $instance['number_of_posts'] )); ?>
		<div class="bs-recent-blog-post">
		<?php	if( $loop->have_posts() ) : 
			while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="small-post">
				<div class="small-post-content">
					<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<div class="bs-blog-meta">
						<span class="bs-blog-date">
							<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
								<?php echo esc_html(get_the_date('M j, Y')); ?>
							</a>
         				</span>
					</div>
				</div>
				<?php if($instance['image_show']==true): if(has_post_thumbnail()):?>
				<div class="img-small-post back-img hlgr right">
					<a href="<?php the_permalink(); ?>" class="post-thumbnail"> <?php $defalt_arg =array('class' => "img-fluid" ); the_post_thumbnail($instance['tumb_size'], $defalt_arg); ?>
					</a>
				</div>
				<?php endif; endif; ?>
				
			</div>
		<?php endwhile; 
			endif; ?>
		</div>	
		<?php
			
		echo $args['after_widget']; 	
	}

	public function form( $instance ) {

		$instance['title'] = (isset($instance['title'])?$instance['title']:'');
		$instance['number_of_posts'] = (isset($instance['number_of_posts'])?$instance['number_of_posts']:'');
		
		$instance['tumb_size'] = (isset($instance['tumb_size'])?$instance['tumb_size']:'');
		$instance['image_show']=(isset($instance['image_show'])?$instance['image_show']:true);
		?>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title','blogus' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'number_of_posts' )); ?>"><?php esc_html_e( 'Number of posts to show','blogus' ); ?></label> 
		<input size="3" maxlength="2"id="<?php echo esc_attr($this->get_field_id( 'number_of_posts' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number_of_posts' )); ?>" type="text" value="<?php echo esc_attr( $instance['number_of_posts'] ); ?>" />
		</p>	
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'tumb_size' )); ?>"><?php esc_html_e( 'Featured post image size','blogus' ); ?></label><br/> 
		<select id="<?php echo esc_attr($this->get_field_id( 'tumb_size' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'tumb_size' )); ?>">
			<option value>-- <?php esc_html_e('Select post image size','blogus'); ?> --</option>
			<option value="thumbnail" <?php echo esc_attr($instance['tumb_size']=='thumbnail'?'selected':''); ?>><?php esc_html_e('Thumbnail','blogus'); ?></option>
			<option value="full" <?php echo esc_attr($instance['tumb_size']=='full'?'selected':''); ?>><?php esc_html_e('Full','blogus'); ?></option>
		</select>
	</p>
	
	<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'image_show' )); ?>"><?php esc_html_e( 'Enable feature image','blogus' ); ?></label> 
		<input type="checkbox" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'image_show' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image_show' )); ?>" <?php if($instance['image_show']==true) echo esc_attr('checked'); ?> >
	</p>
		
	<?php 
	}

	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? $new_instance['title'] : '';
		$instance['number_of_posts'] = ( ! empty( $new_instance['number_of_posts'] ) ) ? strip_tags( $new_instance['number_of_posts'] ) : '';
		
		$instance['tumb_size'] = ( ! empty( $new_instance['tumb_size'] ) ) ? strip_tags( $new_instance['tumb_size'] ) : '';
		$instance['image_show'] = ( ! empty( $new_instance['image_show'] ) ) ? $new_instance['image_show'] : '';
		
		return $instance;
	}

} // class
?>