<?php 
/*
 * Plugin Name:       Weblizar Pinterest Feeds
 * Description:       Weblizar team introduce a new plugin which is used to show your Pinterest feed at any where your site. You can use shortcode and widgets to show your Pinterest images.
 * Version: 		  1.0.3
 * Author: 			  Weblizar
 * Text Domain: 	  pinterest_feed_wordpress
 * Author URI:        https://weblizar.com/plugins/pinterest-feed-pro/
 * Plugin URI:        https://weblizar.com/plugins/pinterest-feed-pro/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Copyright 2016 Weblizar (email : info@Weblizar.com, twitter : @Weblizar)  
 */

/**
 * Default Constants
 */

define( 'PFFREE_TEXT_DOMAIN','pinterest_feed_wordpress'); // Your textdomain
define( 'PFFREE_PLUGIN_NAME', __('Pinterest Feed Wordpress', PFFREE_TEXT_DOMAIN ) ); // Plugin Name shows up on the admin settings screen.
include 'options/option-panel.php';
include 'options/default-options.php'; 

//Name shows up on the admin settings screen.
define("PFFREE_PLUGIN_SHORT_NAME", "Pinterest Feed Wordpress" );
define("PFFREE_VERSION", "1.0"); // Plugin Version Number
define("PFFREE_PLUGIN_URL", plugin_dir_path(__FILE__));
define("PFFREE_PLUGIN_LINK", 'https://weblizar.com/plugins/pinterest_feed_wordpress/');

add_action('plugins_loaded', 'PFFREE_Language_Translater');
function PFFREE_Language_Translater() {
	load_plugin_textdomain( PFFREE_TEXT_DOMAIN , FALSE, dirname( plugin_basename(__FILE__)).'/languages' );
}

function weblizar_pffree_activation(){
	$pffree_default_options_data = pffree_default_options_data();
	$pffree_default_options_data_settings = get_option('weblizar_pffree_options'); // get existing option data 		
	if($pffree_default_options_data_settings) {
		$pffree_default_options_data_settings = array_merge($pffree_default_options_data, $pffree_default_options_data_settings);
		update_option('weblizar_pffree_options', $pffree_default_options_data_settings);	// Set existing and new option data			
	} else {
		add_option('weblizar_pffree_options', $pffree_default_options_data);  // set New option data
	} 
}

register_activation_hook( __FILE__, 'weblizar_pffree_activation' );

// Do redirect when Plugin activate

function PFFREE_nht_plugin_activate() {
add_option('PFFREE_nht_plugin_do_activation_redirect', true);
}
function PFFREE_nht_plugin_redirect() {
	if (get_option('PFFREE_nht_plugin_do_activation_redirect', false)) {
		delete_option('PFFREE_nht_plugin_do_activation_redirect');
		if(!isset($_GET['activate-multi'])) {
			wp_redirect("admin.php?page=pffree-weblizar");
		}
	}
}
register_activation_hook(__FILE__, 'PFFREE_nht_plugin_activate');
add_action('admin_init', 'PFFREE_nht_plugin_redirect');