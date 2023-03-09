<?php
function theme_options_color() {
	
	$top_bar_header_background_color = get_theme_mod('top_bar_header_background_color','');
	$top_bar_header_color = get_theme_mod('top_bar_header_color','');

	/*=================== Subscribe Button Color ===================*/
	$menu_btn_color = get_theme_mod('menu_btn_color','');
	$menu_btn_hover_color = get_theme_mod('menu_btn_hover_color','');
	$menu_btn_text_color = get_theme_mod('menu_btn_text_color','');
	$menu_btn_text_hover_color = get_theme_mod('menu_btn_text_hover_color','');
	$menu_btn_border_color = get_theme_mod('menu_btn_border_color','');
	$menu_btn_border_hover_color = get_theme_mod('menu_btn_border_hover_color','');

	/*=================== Menus Color ===================*/
	$menu_area_bg_color = get_theme_mod('menu_area_bg_color');
	$menu_area_bg_hover_color = get_theme_mod('menu_area_bg_hover_color','');
	$menu_link_color = get_theme_mod('menu_link_color','');
	$menu_link_hover_color = get_theme_mod('menu_link_hover_color', '');
	$primary_menu_bg_color = get_theme_mod('primary_menu_bg_color', ''); 

	/*=================== Menus Dropdown Color ===================*/
	$menu_dropdown_bg_color = get_theme_mod('menu_dropdown_bg_color','#fff');
	$menu_dropdown_bg_hover_color = get_theme_mod('menu_dropdown_bg_hover_color','');
	$menu_dropdown_color = get_theme_mod('menu_dropdown_color','');
	$menu_dropdown_hover_color = get_theme_mod('menu_dropdown_hover_color','');

	/*=================== Breadeking News Color ===================*/
	$breaking_news_background_color = get_theme_mod('breaking_news_background_color');
	$breaking_news_color = get_theme_mod('breaking_news_color','');

	/*=================== Slider Overlay Color ===================*/
	$blogus_slider_overlay_color = get_theme_mod('blogus_slider_overlay_color','#00000099');
	$blogus_slider_overlay_text_color = get_theme_mod('blogus_slider_overlay_text_color','');
	$blogus_slider_title_font_size = get_theme_mod('blogus_slider_title_font_size',50);

	?>
<style type="text/css">
/*==================== Top Bar color ====================*/
.bs-head-detail
{
  background: <?php echo esc_attr($top_bar_header_background_color); ?>;
}

.bs-head-detail .top-date, .bs-head-detail
{
	color: <?php echo esc_attr($top_bar_header_color); ?>; 
}
/*==================== Menu color ====================*/
.navbar-wp
{
  background: <?php echo esc_attr($menu_area_bg_color); ?>;
}

.bs-default .navbar-wp .navbar-nav > li > a{
	background: <?php echo esc_attr($menu_area_bg_hover_color); ?>;
	color: <?php echo esc_attr($menu_link_color); ?>; 
}

.bs-default .navbar-wp .navbar-nav > li > a:hover{
	color: <?php echo esc_attr($menu_link_hover_color); ?>; 
}

.navbar-wp .dropdown-menu > li > a {
    background: <?php echo esc_attr($menu_dropdown_bg_color); ?>;
	color: <?php echo esc_attr($menu_dropdown_color); ?>;
}
.navbar-wp .dropdown-menu > li > a:hover, .navbar-wp .dropdown-menu > li > a:focus {
    background: <?php echo esc_attr($menu_dropdown_bg_hover_color); ?>;
	color: <?php echo esc_attr($menu_dropdown_hover_color); ?>;
}
.bs-default .navbar-collapse ul, .navbar-wp .dropdown-menu > li > a:hover, .navbar-wp .dropdown-menu > li > a:focus {
    background: <?php echo esc_attr($primary_menu_bg_color); ?>;
}
/*=================== Subscribe Button Color ===================*/

	.desk-header .btn-subscribe{
	background: <?php echo esc_attr($menu_btn_color); ?>;
	color: <?php echo esc_attr($menu_btn_text_color); ?>;
	border-color: <?php echo esc_attr($menu_btn_border_color); ?>;
	}
	.desk-header .btn-subscribe:hover{
	background: <?php echo esc_attr($menu_btn_hover_color); ?>;
	color: <?php echo esc_attr($menu_btn_text_hover_color); ?>;
	border-color: <?php echo esc_attr($menu_btn_border_hover_color); ?>;
	}
/*=================== Breadeking News Color ===================*/
.bs-latest-news
{
	background: <?php echo esc_attr($breaking_news_background_color); ?>;
}

.bs-latest-news .bs-latest-news-slider a
{
	color: <?php echo esc_attr($breaking_news_color); ?>; 
}

/*=================== Slider Color ===================*/
.homemain .bs-slide.overlay:before{
	background-color: <?php echo esc_attr($blogus_slider_overlay_color); ?>;
} 
.bs-slide .inner .title a
{
	color: <?php echo esc_attr($blogus_slider_overlay_text_color); ?>;
}

.bs-slide .inner .title{
	font-size: <?php echo esc_attr($blogus_slider_title_font_size); ?>px;
} 
</style>
<?php } 
function custom_typography_function() { ?>
<style>
.site-branding-text p, .site-title a{
	font-weight:<?php echo esc_attr(get_theme_mod('site_title_fontweight','700')); ?>;
	font-family:<?php echo esc_attr(get_theme_mod('site_title_fontfamily','Open Sans')); ?>; 
}
.navbar-wp .navbar-nav > li> a{ 
	font-family:<?php echo esc_attr(get_theme_mod('blogus_menu_fontfamily','Open Sans')); ?>; 
}
</style>
<?php }
?>