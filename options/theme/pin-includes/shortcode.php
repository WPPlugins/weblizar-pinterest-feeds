<?php
if ( ! defined( 'ABSPATH' ) ) exit;
// Initial shortcode lines
function pffree_shortcode( $atts, $content = null, $tag ) { 
// Get all setting here for profile,board and pins
	ob_start();
	if ( ! defined( 'ABSPATH' ) ) exit;
	require_once('pinterest_feed_api.php');	
	$wl_pffree_options = get_option('weblizar_pffree_options');
	$pinterest_feed_api = new PFFREE_pinterest_feed_api($wl_pffree_options['PFFREE_Access_Token']);	
	$profile_result = $pinterest_feed_api->add_pffree_profile_result();
	$board_result = $pinterest_feed_api->add_pffree_board_result();
	
	if($wl_pffree_options['pinterest_custom_css']!=''){ 
		echo '<style>'.$wl_pffree_options['pinterest_custom_css'].'</style>'; 
	}
	// Initial shortcode lines 
	extract( shortcode_atts(  array(
		'id' => '',
		'template' => '',	
		// Profile Section 
		'profile' => '',
		'profile_image' => '',
		'user_name' => '',
		'user_description' => '',
		'user_counts' => '',
		'user_counts_boards' => '',
		'user_counts_pins' => '',
		'user_counts_likes' => '',
		'user_counts_following' => '',
		'user_counts_followers' => '',
		'user_follow' => '',		
		'pins' => '',
	), $atts ) );
	?><div id="pinterest_feed1" class="container pinterest-full pinterest-main pinterest_feed1">
				<?php include PFFREE_PLUGIN_URL .'options/theme/pin-content/content-template1.php'; ?>        
				</div>
		<?php	
	return ob_get_clean();
}
add_shortcode('pinterest_feed','pffree_shortcode');

// Initial shortcode lines
function pffree_shortcode_profile( $atts, $content = null, $tag ) { 
// Get all setting here for profile,board and pins
	ob_start();
	if ( ! defined( 'ABSPATH' ) ) exit;
	require_once('pinterest_feed_api.php');	
	$wl_pffree_options = get_option('weblizar_pffree_options');
	$pinterest_feed_api = new PFFREE_pinterest_feed_api($wl_pffree_options['PFFREE_Access_Token']); 
	$profile_result = $pinterest_feed_api->add_pffree_profile_result();
	if($wl_pffree_options['pinterest_custom_css']!=''){ 
		echo '<style>'.$wl_pffree_options['pinterest_custom_css'].'</style>'; 
	}
	// Initial shortcode lines 
	extract( shortcode_atts(  array(
		'id' => '',
		'template' => '',	
		// Profile Section 
		'profile' => '',
		'profile_image' => '',
		'user_name' => '',
		'user_description' => '',
		'user_counts' => '',
		'user_counts_boards' => '',
		'user_counts_pins' => '',
		'user_counts_likes' => '',
		'user_counts_following' => '',
		'user_counts_followers' => '',
		'user_follow' => ''			
	), $atts ) ); ?>
	<div id="pinterest_feed1" class="container pinterest-full pinterest-main pinterest_feed1">
	<?php include PFFREE_PLUGIN_URL .'options/theme/pin-content/template1/profile/profile.php'; ?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode('pinterest_profile','pffree_shortcode_profile');
?>