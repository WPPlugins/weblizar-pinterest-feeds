<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
if($pins=='on'){ ?>
<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-pins-main pinterest-pins-main-div  pins_section-options <?php if($pins=='on') echo "active"; ?>" id="pins_section-template">	
<div class="tabcontent_<?php if(isset($pinterest_api_id)){ echo $pinterest_api_id;} ?>" id="Pins_<?php if(isset($pinterest_api_id)){ echo $pinterest_api_id;} ?>">
	
	<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad widget-text pinterest-pins-main gallery1">
	<?php	
	$pins_limits = intval($wl_pffree_options['pins_limits_value']);	
	$pins_limits_value = '100';	
	$pinterest_board_name = $wl_pffree_options['pinterest_board_name'];	
	$pinterest_user_id = $wl_pffree_options['pinterest_user_id'];	
	if (count($pinterest_board_name)<= '1'){
		if(isset($pinterest_board_name)){	
				if($pinterest_board_name!= ''){
					foreach($pinterest_board_name as $pinterest_pins_board_name){
					$boards_name = $pinterest_pins_board_name;	
					}
				}
		}
		$profile_pins_result = $pinterest_feed_api->add_pffree_pins_result($boards_name,$pins_limits_value,$pinterest_user_id);	
	}elseif (count($pinterest_board_name) > '1'){
		$profile_pins_result = $pinterest_feed_api->add_pffree_profile_pins_result($pins_limits_value);	
	}
	
	if(isset($profile_pins_result)){	
	if($profile_pins_result!= ''){ 
		$count = 0;	
		foreach($profile_pins_result->data as $all_pins){
		$pinterest_board_name = $wl_pffree_options['pinterest_board_name'];	
			if(isset($pinterest_board_name)){	
				if($pinterest_board_name!= ''){
					foreach($pinterest_board_name as $pinterest_pins_board_name){
					$boards_name = $pinterest_pins_board_name;			
			if(isset($boards_name)){
				$all_boards_name = str_replace(' ','-',$all_pins->board->name);
				if($boards_name == $all_boards_name){
					$count++;	
					if($count <= $pins_limits){
			if(isset($pins_display)){	
				if($pins_display!= ''){
					$pins_display = '1';
					if($pins_display == '1'){
						$output = '12';
					}elseif($pins_display == '2'){
						$output = '6';
					}elseif($pins_display == '3'){
						$output = '4';
					}elseif($pins_display == '4'){
						$output = '3';
					} ?>
			<div class="wl-gallery pinterest-pins col-sm-6 col-xs-12 col-md-<?php echo $output; ?>">
				<div class="pinterest-pins-inner">
					<?php if($pins_image =='on'){ ?>	
						<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-pins-images pins_img-options <?php if($pins_image =='on') echo "active"; ?>" id="board_pins_img-template">
							<a target="_blank" href="<?php echo $all_pins->link; ?>"><img class="pinterest-img-responsive img-responsive" src="<?php echo $all_pins->image->original->url; ?>"/></a>
						</div>
						<?php if($pins_counts =='on'){ ?>
							<ul class="pintrst-ovrful-cont-social-icon">
								<?php if($pins_counts_likes =='on'){ ?>
								<li> <a href="javascript:void(0)" title='likes' class="fa  fa-heart"><?php _e(' '.$all_pins->counts->likes,PFFREE_TEXT_DOMAIN)?></a> </li>
									<?php } ?>
									<?php if($pins_counts_repins =='on'){ ?>
								<li> <a href="javascript:void(0)" title='repins' class="fa  fa-thumb-tack"><?php _e(' '.$all_pins->counts->repins,PFFREE_TEXT_DOMAIN)?></a> </li>
								<?php } ?>
								<?php if($pins_counts_comments =='on'){ ?>
								<li> <a href="javascript:void(0)" title='comments' class="fa fa-comments"><?php _e(' '.$all_pins->counts->comments,PFFREE_TEXT_DOMAIN)?></a> </li>
								<?php } ?>
							</ul>
							<?php } ?>
					<?php } ?>
					<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-pins-details">
						<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-pins-note">
							<?php if($pins_description =='on'){ ?>
								<p class="pinterest-pins-detail pins_description-options <?php if($pins_description =='on') echo "active"; ?>" id="pins_description-template"><?php _e($all_pins->note,PFFREE_TEXT_DOMAIN)?></p>
							<?php } ?>
							<?php if($pins_user_profile =='on'){ ?>
							<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad pinterest-pins-profile pins_profile-options <?php if($pins_user_profile =='on') echo "active"; ?>" id="pins_profile-template">
								<a target="_blank" href="<?php echo $all_pins->creator->url; ?>">
									<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad">
									<p class="pinterest-pins-profile-name">
									<?php _e($all_pins->creator->first_name .' '.$all_pins->creator->last_name,PFFREE_TEXT_DOMAIN) ?>(<?php echo $all_boards_name; ?>)
									</p>
									</div>							
									<?php $created = $all_pins->created_at; ?>				
									<div class="col-md-12 col-sm-12 col-xs-12 pint-no-pad">			
									<p class="pinterest-pins-profile-create">
									<?php _e(date("D M j Y", strtotime($created)),PFFREE_TEXT_DOMAIN)?>
									</p>
									</div>
								</a>						
							</div>	
							<?php } ?>
						</div>			
					</div>
<div class="clearfix"> </div>					
				</div>			
			</div>			
	<?php } } } } } } } } ?>
	<?php } } } ?>
	</div>
</div>
</div>
<?php } ?>