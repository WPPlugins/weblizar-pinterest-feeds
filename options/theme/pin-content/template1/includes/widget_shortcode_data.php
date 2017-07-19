<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if(isset($atts['id'])!=''){ 
		$pinterest_api_id = $atts['id'];
}elseif(isset($instance['pinterest_api_id'])!=''){ 
	$pinterest_api_id = $instance['pinterest_api_id'];		
}elseif(isset($wl_pffree_options['pinterest_api_id'])!=''){
	$pinterest_api_id = $wl_pffree_options['pinterest_api_id'];
}

if(isset($atts['profile'])!=''){		
	$profile = strtolower($atts['profile']);
	if($profile == 'on'){
		$profile = 'on';
	}elseif($profile == 'off'){
		$profile = 'off';			
	}else{
		if($wl_pffree_options['profile_section_onoff']!=''){
			$profile = $wl_pffree_options['profile_section_onoff'];			
		}
	}
}elseif(isset($instance['profile'])!=''){ 
	$profile = $instance['profile'];		
}elseif(isset($wl_pffree_options['profile_section_onoff'])!=''){
	$profile = $wl_pffree_options['profile_section_onoff'];
}


if(isset($atts['profile_image'])!=''){		
	$profile_image = strtolower($atts['profile_image']);
	if($profile_image == 'on'){
		$profile_image = 'on';
	}elseif($profile_image == 'off'){
		$profile_image = 'off';			
	}else{
		if($wl_pffree_options['profile_image_onoff']!=''){
			$profile_image = $wl_pffree_options['profile_image_onoff'];			
		}
	}
}elseif(isset($instance['profile_image'])!=''){ 
	$profile_image = $instance['profile_image'];		
}elseif(isset($wl_pffree_options['profile_image_onoff'])!=''){
	$profile_image = $wl_pffree_options['profile_image_onoff'];
}


if(isset($atts['user_name'])!=''){		
	$user_name = strtolower($atts['user_name']);
	if($user_name == 'on'){
		$user_name = 'on';
	}elseif($user_name == 'off'){
		$user_name = 'off';			
	}else{
		if($wl_pffree_options['user_name_onoff']!=''){
			$user_name = $wl_pffree_options['user_name_onoff'];			
		}
	}
}elseif(isset($instance['user_name'])!=''){ 
	$user_name = $instance['user_name'];		
}elseif(isset($wl_pffree_options['user_name_onoff'])!=''){
	$user_name = $wl_pffree_options['user_name_onoff'];
}

if(isset($atts['user_description'])!=''){		
	$user_description = strtolower($atts['user_description']);
	if($user_description == 'on'){
		$user_description = 'on';
	}elseif($user_description == 'off'){
		$user_description = 'off';			
	}else{
		if($wl_pffree_options['user_description_onoff']!=''){
			$user_description = $wl_pffree_options['user_description_onoff'];			
		}
	}
}elseif(isset($instance['user_description'])!=''){ 
	$user_description = $instance['user_description'];		
}elseif(isset($wl_pffree_options['user_description_onoff'])!=''){
	$user_description = $wl_pffree_options['user_description_onoff'];
}

if(isset($atts['user_counts'])!=''){		
	$user_counts = strtolower($atts['user_counts']);
	if($user_counts == 'on'){
		$user_counts = 'on';
	}elseif($user_counts == 'off'){
		$user_counts = 'off';			
	}else{
		if($wl_pffree_options['user_counts_onoff']!=''){
			$user_counts = $wl_pffree_options['user_counts_onoff'];			
		}
	}
}elseif(isset($instance['user_counts'])!=''){ 
	$user_counts = $instance['user_counts'];		
}elseif(isset($wl_pffree_options['user_counts_onoff'])!=''){
	$user_counts = $wl_pffree_options['user_counts_onoff'];
}

if(isset($atts['user_counts_boards'])!=''){		
	$user_counts_boards = strtolower($atts['user_counts_boards']);
	if($user_counts_boards == 'on'){
		$user_counts_boards = 'on';
	}elseif($user_counts_boards == 'off'){
		$user_counts_boards = 'off';			
	}else{
		if($wl_pffree_options['boards_onoff']!=''){
			$user_counts_boards = $wl_pffree_options['boards_onoff'];			
		}
	}
}elseif(isset($instance['user_counts_boards'])!=''){ 
	$user_counts_boards = $instance['user_counts_boards'];		
}elseif(isset($wl_pffree_options['boards_onoff'])!=''){
	$user_counts_boards = $wl_pffree_options['boards_onoff'];
}

if(isset($atts['user_counts_pins'])!=''){		
	$user_counts_pins = strtolower($atts['user_counts_pins']);
	if($user_counts_pins == 'on'){
		$user_counts_pins = 'on';
	}elseif($user_counts_pins == 'off'){
		$user_counts_pins = 'off';			
	}else{
		if($wl_pffree_options['pins_onoff']!=''){
			$user_counts_pins = $wl_pffree_options['pins_onoff'];			
		}
	}
}elseif(isset($instance['user_counts_pins'])!=''){ 
	$user_counts_pins = $instance['user_counts_pins'];		
}elseif(isset($wl_pffree_options['pins_onoff'])!=''){
	$user_counts_pins = $wl_pffree_options['pins_onoff'];
}


if(isset($atts['user_counts_likes'])!=''){		
	$user_counts_likes = strtolower($atts['user_counts_likes']);
	if($user_counts_likes == 'on'){
		$user_counts_likes = 'on';
	}elseif($user_counts_likes == 'off'){
		$user_counts_likes = 'off';			
	}else{
		if($wl_pffree_options['likes_onoff']!=''){
			$user_counts_likes = $wl_pffree_options['likes_onoff'];			
		}
	}
}elseif(isset($instance['user_counts_likes'])!=''){ 
	$user_counts_likes = $instance['user_counts_likes'];		
}elseif(isset($wl_pffree_options['likes_onoff'])!=''){
	$user_counts_likes = $wl_pffree_options['likes_onoff'];
}

if(isset($atts['user_counts_following'])!=''){		
	$user_counts_following = strtolower($atts['user_counts_following']);
	if($user_counts_following == 'on'){
		$user_counts_following = 'on';
	}elseif($user_counts_following == 'off'){
		$user_counts_following = 'off';			
	}else{
		if($wl_pffree_options['following_onoff']!=''){
			$user_counts_following = $wl_pffree_options['following_onoff'];			
		}
	}
}elseif(isset($instance['user_counts_following'])!=''){ 
	$user_counts_following = $instance['user_counts_following'];		
}elseif(isset($wl_pffree_options['following_onoff'])!=''){
	$user_counts_following = $wl_pffree_options['following_onoff'];
}

if(isset($atts['user_counts_followers'])!=''){		
	$user_counts_followers = strtolower($atts['user_counts_followers']);
	if($user_counts_followers == 'on'){
		$user_counts_followers = 'on';
	}elseif($user_counts_followers == 'off'){
		$user_counts_followers = 'off';			
	}else{
		if($wl_pffree_options['followers_onoff']!=''){
			$user_counts_followers = $wl_pffree_options['followers_onoff'];			
		}
	}
}elseif(isset($instance['user_counts_followers'])!=''){ 
	$user_counts_followers = $instance['user_counts_followers'];		
}elseif(isset($wl_pffree_options['followers_onoff'])!=''){
	$user_counts_followers = $wl_pffree_options['followers_onoff'];
}


if(isset($atts['user_follow'])!=''){		
	$user_follow = strtolower($atts['user_follow']);
	if($user_follow == 'on'){
		$user_follow = 'on';
	}elseif($user_follow == 'off'){
		$user_follow = 'off';			
	}else{
		if($wl_pffree_options['user_follow_onoff']!=''){
			$user_follow = $wl_pffree_options['user_follow_onoff'];			
		}
	}
}elseif(isset($instance['user_follow'])!=''){ 
	$user_follow = $instance['user_follow'];		
}elseif(isset($wl_pffree_options['user_follow_onoff'])!=''){
	$user_follow = $wl_pffree_options['user_follow_onoff'];
}

// Pins Section 

if(isset($atts['pins'])!=''){		
	$pins = strtolower($atts['pins']);
	if($pins == 'on'){
		$pins = 'on';
	}elseif($pins == 'off'){
		$pins = 'off';			
	}else{
		if($wl_pffree_options['pins_section_onoff']!=''){
			$pins = $wl_pffree_options['pins_section_onoff'];			
		}
	}
}elseif(isset($instance['pins'])!=''){ 
	$pins = $instance['pins'];		
}elseif(isset($wl_pffree_options['pins_section_onoff'])!=''){
	$pins = $wl_pffree_options['pins_section_onoff'];
}
$boards = 'on';
$pins_image = 'on';
$pins_description = 'on';
$pins_counts = 'on';
$pins_counts_likes = 'on'; 
$pins_counts_comments = 'on';
$pins_counts_repins = 'on';
$pins_user_profile = 'on';
if(isset($wl_pffree_options['pins_display'])!=''){
	$pins_display = $wl_pffree_options['pins_display'];			
}
?>