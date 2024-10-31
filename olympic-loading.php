<?php

/*
Plugin Name: Olympic Preloader
Plugin URI: http://bdtheme.net/
Description: This is a simple WordPress plugin, to show Olympic preloader before loading full content of your website.
Author: kamal Hossain
Version: 1.0
Author URI: http://bdtheme.net/
License: GPL
Tags: Olympic, Olympic preloader, games preloader, pre-loader, pre loader, , Olympic preloader plugin, simple preloader, css3 preloader, animated preloader.
 */


function olympic_pre_loader_content(){
    echo '<div id="loader">'.
	'<div class="inner-loader">'.
         '<div class="olympic one"></div>'.
         '<div class="olympic two"></div>'.
         '<div class="olympic three"></div>'.
         '<div class="olympic four"></div>'.
         '<div class="olympic five"></div>'.
	'</div>'.
         '</div>';
}

add_action( 'wp_footer', 'olympic_pre_loader_content');
/* Preloader css added code */
function olympic_enqueue_css(){
    $css_url = plugins_url('/css/loadstyle.css', __FILE__);
     wp_enqueue_style( 'olympic-css', $css_url );
}

add_action('wp_enqueue_scripts', 'olympic_enqueue_css');

/* Preloader Script added code */
function olympic_preloader_activation() {
?>
	<script>
		jQuery(window).load(function() {
			jQuery("#loader").delay(350).fadeOut("slow");
		});
	</script>
<?php
}
add_action ('wp_footer', 'olympic_preloader_activation',100);



?>
