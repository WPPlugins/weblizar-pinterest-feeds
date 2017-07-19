<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$PFFREE_Access_Token = $wl_pffree_options['PFFREE_Access_Token'];
if(!empty($PFFREE_Access_Token)){
include PFFREE_PLUGIN_URL .'options/theme/pin-content/template1/includes/widget_shortcode_data.php';
if(isset($profile_result)){
	if(!empty($profile_result)){ ?>
<div class="col-md-12 col-sm-12 col-xs-12 pinterest-profile profile_template-options <?php if($profile == 'on') echo "active"; ?>" id="profile-template">
<?php if($profile_image == 'on' || $user_follow == 'on'){ ?>
	<div class="col-md-4 col-sm-4 col-xs-12 ">
		<?php if($profile_image == 'on'){ ?>
		<div class="pinterest-profile-image profile_img-options <?php if($profile_image == 'on') echo "active"; ?>" id="profile-img">
			<?php 
					
			foreach($profile_result->data->image as $hello){
					$image = $hello->url;
				}
				$image = str_replace('_60','',$image);
			?>
			<img src="<?php echo $image; ?>" class="pinterest-img-fix"/>
		</div>	
		<?php } ?>		
		<?php if($user_follow == 'on'){ ?>		
		<div class="col-md-12 col-sm-12 col-xs-12 pinterest-stat-default pinterest-stat-follow user_follow-options <?php if($user_follow =='on') echo "active"; ?>">
			<div class="icon-desc-default">		
				<a target='_blank' href="<?php _e($profile_result->data->url,PFFREE_TEXT_DOMAIN)?>">
				<i class="fa fa-paper-plane"></i> <?php _e('Follow', PFFREE_TEXT_DOMAIN );?></a>
			</div>	
		</div>	
		<?php } ?>
	</div>
<div class="col-md-8 col-sm-8 col-xs-12 pint-no-pad  pinterest-profile-detail">	
<?php }else{ ?>	
<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad  pinterest-profile-detail">
<?php } ?>	
		<?php if($user_name == 'on'){ ?>
		<p class="pinterest-profile-name profile_uname-options <?php if($user_name == 'on') echo "active"; ?>" id="profile-uname"><?php _e($profile_result->data->first_name .' '.$profile_result->data->last_name,PFFREE_TEXT_DOMAIN)?></p>
		<?php } 
		if($user_description=='on'){ ?>			
		<p class="pinterest-profile-description profile_descrip-options <?php if($user_description=='on') echo "active"; ?>" id="profile-udescrip"><?php _e($profile_result->data->bio,PFFREE_TEXT_DOMAIN)?></p>
		<?php } ?>
	<?php if($user_counts == 'on'){ ?>	
	<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-stats pinterest-stats-single">			
		<?php if($user_counts_pins=='on' || $user_counts_boards =='on'){ ?>
		<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-stat-left">					
			<?php if($user_counts_pins=='on'){ ?>
			<div class="col-md-6 col-sm-6 col-xs-12 pinterest-stat-default pinterest-stat-pins">				
				<div class="pins-desc icon-desc">	
				<span class="user_counts-options <?php if($user_counts == 'on') echo "active"; ?>">
				<small id="count-number" data-to="<?php echo $profile_result->data->counts->pins; ?>" data-speed="1500" class="pinterest-timer count-title user_c_pins-options <?php if($user_counts_pins =='on') echo "active"; ?>"></small>	
				</span>			
				<span class="count-text "><?php _e('Pins', PFFREE_TEXT_DOMAIN );?></span>			
				</div>
			</div>
			<?php } ?>	
			<?php if($user_counts_boards =='on'){ ?>
			<div class="col-md-6 col-sm-6 col-xs-12 pinterest-stat-default pinterest-stat-board">				
				<div class="board-desc icon-desc">		
				<span class="user_counts-options <?php if($user_counts == 'on') echo "active"; ?>">		
				<small class="pinterest-timer count-title user_c_board-options <?php if($user_counts_boards =='on') echo "active"; ?>" id="count-number" data-to="<?php echo $profile_result->data->counts->boards; ?>" data-speed="1500"></small>
				</span>			 
				<span class="count-text"><?php _e('Boards', PFFREE_TEXT_DOMAIN );?></span>					
				</div>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
		<?php if($user_counts_followers == 'on' || $user_counts_following =='on' || $user_counts_likes == 'on'){ ?>
		<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-stat-left user_counts-options <?php if($user_counts == 'on') echo "active"; ?>" id="user_counts-template">		
			<?php if($user_counts_followers == 'on'){ ?>
			<div class="col-md-4 col-sm-4 col-xs-12 pinterest-stat-default pinterest-stat-followers user_followers-options <?php if($user_counts_followers == 'on') echo "active"; ?>" id="count-number">
				<div class="followers-desc icon-desc">
					 <small class="pinterest-timer count-title" data-to="<?php echo $profile_result->data->counts->followers; ?>" data-speed="1500"></small>
				 </div>
				<p class="count-text "><?php _e('Followers', PFFREE_TEXT_DOMAIN );?></p>
			</div>
			<?php } ?>
			<?php if($user_counts_following =='on'){ ?>
			<div class="col-md-4 col-sm-4 col-xs-12 pinterest-stat-default pinterest-stat-following user_following-options <?php if($user_counts_following == 'on') echo "active"; ?>" id="count-number">
				<div class="following-desc icon-desc">
					 <small class="pinterest-timer count-title" data-to="<?php echo $profile_result->data->counts->following; ?>" data-speed="1500"></small>
				 </div>
				<p class="count-text"><?php _e('Following', PFFREE_TEXT_DOMAIN );?></p>
			</div>
			<?php } ?>
			<?php if($user_counts_likes == 'on'){ ?>
			<div class="col-md-4 col-sm-4 col-xs-12 pinterest-stat-default pinterest-stat-likes user_likes-options <?php if($user_counts_likes == 'on') echo "active"; ?>" id="count-number">
				<div class="icon-desc icon-desc">
					 <small class="pinterest-timer count-title" data-to="<?php echo $profile_result->data->counts->likes; ?>" data-speed="1500"></small>
				 </div>
				<p class="count-text "><?php _e('Likes', PFFREE_TEXT_DOMAIN );?></p>
			</div>
			<?php } ?>			
		</div>
		<?php } ?>	
	</div>
	<?php } ?>
<?php if($profile_image == 'on' || $user_follow == 'on'){ ?>	
</div>
<?php }else{ ?>	
</div>
<?php } ?>	
</div>
<?php } }elseif($PFFREE_Access_Token!=''){ ?>
		<div class="alert-danger col-md-12">	
			<h4 style="color:red; text-align:center;margin:0;padding:10px"><?php _e('Error !!!', PFFREE_TEXT_DOMAIN );?></h4>
			<p style="color:red; text-align:center"><?php _e('Your Access Token is wrong or Your request limit is exhausted.', PFFREE_TEXT_DOMAIN );?></p>
		</div>
		<?php
			$wl_pffree_options['pinterest_user_id'] = '';
			update_option('weblizar_pffree_options', $wl_pffree_options);
}elseif($PFFREE_Access_Token == ''){
				$wl_pffree_options['pinterest_user_id'] = '';
				update_option('weblizar_pffree_options', $wl_pffree_options);
			} 	
	}else{ ?>
		<div class="alert-danger col-md-12">	
			<h4 style="color:red; text-align:center;margin:0;padding:10px"><?php _e('Pinterest Access Token filled is Empty !', PFFREE_TEXT_DOMAIN );?></h4>	
		</div>
<?php } ?>