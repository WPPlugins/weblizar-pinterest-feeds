<?php
if ( ! defined( 'ABSPATH' ) ) exit;
//Default Options
function pffree_default_options_data()
{
$default_options_data = array (
    'PFFREE_Access_Token' => 'AR279LrFeQjD9TSEEOcd3E28Ue_dFIt1O1BmKABDlEOsVSBCXQAAAAA',	
	'pinterest_user_id' => '',
    'profile_section_onoff' => 'on',
    'profile_image_onoff' => 'on',
    'user_name_onoff' => 'on',
    'user_description_onoff' => 'on',
    'user_counts_onoff' => 'on',    
    'boards_onoff' => 'on',    
    'pins_onoff' => 'on',    
    'likes_onoff' => 'on',    
    'following_onoff' => 'on',    
    'followers_onoff' => 'on',    
    'user_follow_onoff' => 'on',    
	'pins_section_onoff' => 'off',
    'pins_limits_value' => '2',
    'pins_display' => '2',    
	'pinterest_board_name' => array('Kids','Animals'),
	'single_pins_id' => '',
	'pins_fields_value' => array('id','image','link','media','url'),
	'single_pins_fields_value' => array('creator','id','image','link','media','original_link','url'),
	'board_fields_value' => array('id','image','name','url'),
	'user_fields_value' => array('account_type','bio','first_name','id','image','last_name','url','username'),
	'pins_preview_onoff' => 'off',
	'pinterest_custom_css' => ''
  ); 
 return apply_filters( 'weblizar_pffree_options', $default_options_data );
}  

// Options API
function weblizar_pffree_get_options() {
    // Options API Settings
    return wp_parse_args( get_option( 'weblizar_pffree_options', array() ), pffree_default_options_data() );    
}

//General Options Setting
function pffree_user_setting() {
	$pffree_options_values = get_option('weblizar_pffree_options');
	$pffree_options_values['PFFREE_Access_Token'] = 'AR279LrFeQjD9TSEEOcd3E28Ue_dFIt1O1BmKABDlEOsVSBCXQAAAAA';
	$pffree_options_values['pinterest_user_id'] = '';
	$pffree_options_values['user_fields_value'] = array('account_type','bio','first_name','id','image','last_name','url','username');
	update_option('weblizar_pffree_options', $pffree_options_values);
}
function pffree_general_setting() {
	$pffree_options_values = get_option('weblizar_pffree_options');
	$pffree_options_values['profile_section_onoff'] = 'on';
	$pffree_options_values['profile_image_onoff'] = 'on';
	$pffree_options_values['user_name_onoff'] = 'on';
	$pffree_options_values['user_description_onoff'] = 'on';
	$pffree_options_values['user_counts_onoff'] = 'on';
	$pffree_options_values['boards_onoff'] = 'on';
	$pffree_options_values['pins_onoff'] = 'on';
	$pffree_options_values['likes_onoff'] = 'on';
	$pffree_options_values['following_onoff'] = 'on';
	$pffree_options_values['followers_onoff'] = 'on';	
	$pffree_options_values['pins_section_onoff'] = 'off';
	$pffree_options_values['pins_limits_value'] = '2';
	$pffree_options_values['pins_display'] = '2';	
	$pffree_options_values['single_pins_id'] = '';
	$pffree_options_values['pinterest_board_name'] = array('Kids','Animals');
	$pffree_options_values['single_pins_fields_value'] = array('creator','id','image','link','media','original_link','url');
	$pffree_options_values['pins_fields_value'] = array('id','image','link','media','url');
	$pffree_options_values['board_fields_value'] = array('id','image','name','url');
	$pffree_options_values['user_fields_value'] = array('account_type','bio','first_name','id','image','last_name','url','username');
	$pffree_options_values['pins_preview_onoff'] = 'off';
	$pffree_options_values['pinterest_custom_css'] = '';
	update_option('weblizar_pffree_options', $pffree_options_values);
}
?>