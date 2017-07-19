<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<style>
	#newsletter_pop_upform.ns_pop_up_form .newsletter-api-form-themes{
		margin: 0px;
		z-index: 999;
		position: fixed;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		padding: 30px;
		background: #fff;
		border: 5px solid <?php if(isset($wl_pffree_options['popup_form_button_bgcolor'])){echo $wl_pffree_options['popup_form_button_bgcolor'];} ?>!important;
		display:none;
	}
	#close_form{
		position: absolute;
		right: -4px;
		background: <?php if(isset($wl_pffree_options['popup_form_button_bgcolor'])){echo $wl_pffree_options['popup_form_button_bgcolor'];} ?>!important;
		padding: 0px 6px;
		top: -4px;
		font-weight: bold;
		font-size: 14px !important;
		cursor: pointer;
		box-shadow: -1px 3px 4px <?php if(isset($wl_pffree_options['popup_form_button_bgcolor'])){echo $wl_pffree_options['popup_form_button_bgcolor'];} ?>!important;
		border: 4px solid <?php if(isset($wl_pffree_options['popup_form_button_bgcolor'])){echo $wl_pffree_options['popup_form_button_bgcolor'];} ?>!important;
		color: <?php if(isset($wl_pffree_options['popup_form_button_textcolor'])){echo $wl_pffree_options['popup_form_button_textcolor'];} ?>!important;
	}	
	.pop_up_form_button{		
		z-index: 999;
		position: fixed;
	}
	#pop_up_button{
		background: <?php if(isset($wl_pffree_options['popup_form_button_bgcolor'])){echo $wl_pffree_options['popup_form_button_bgcolor'];} ?>!important;
		color: <?php if(isset($wl_pffree_options['popup_form_button_textcolor'])){echo $wl_pffree_options['popup_form_button_textcolor'];} ?>!important;
		font-weight: 700;
		font-size: 25px;
		border: 0;
		cursor: pointer;
		padding: 10px 10px !important;
	}
<?php if ($popup_form_position){
	if (($popup_form_position == 'bottom')&&($popup_form_position_section == 'start')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		bottom: 0px;
		left: 30px;
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'bottom')&&($popup_form_position_section == 'mid')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		bottom: 0px;
		left: 50%;
		/* bring your own prefixes */
		transform: translate(-50%,0%);
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'bottom')&&($popup_form_position_section == 'last')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		bottom: 0px;
		right: 30px;
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'top')&&($popup_form_position_section == 'start')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		top: 0px;
		left: 30px;
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'top')&&($popup_form_position_section == 'mid')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		top: 0px;
		left: 50%;
		transform: translate(-50%,-0%);
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'top')&&($popup_form_position_section == 'last')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		top: 0px;
		right: 30px;
	}
<?php } } ?>	<?php if ($popup_form_position){
	if (($popup_form_position == 'left')&&($popup_form_position_section == 'start')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		top: 120px;
		left: -85px;
		transform:rotate(90deg);
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'left')&&($popup_form_position_section == 'mid')){	
?>
	.pop_up_form_button{
		margin: 0px;
		transform:rotate(90deg);
		left: -85px;
		bottom: 50%;
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'left')&&($popup_form_position_section == 'last')){	
?>
	.pop_up_form_button{
		transform:rotate(90deg);
		margin: 0px;		
		left: -85px;
		bottom: 120px;
	}
<?php } } ?>
<?php if ($popup_form_position){
	if (($popup_form_position == 'right')&&($popup_form_position_section == 'start')){	
?>
	.pop_up_form_button{
		margin: 0px;		
		top: 120px;
		right: -85px;
		transform:rotate(-90deg);
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'right')&&($popup_form_position_section == 'mid')){	
?>
	.pop_up_form_button{
		margin: 0px;
		transform:rotate(-90deg);
		right: -85px;
		bottom: 50%;
	}
<?php } } ?>	
<?php if ($popup_form_position){
	if (($popup_form_position == 'right')&&($popup_form_position_section == 'last')){	
?>
	.pop_up_form_button{
		transform:rotate(-90deg);
		margin: 0px;		
		right: -85px;
		bottom: 120px;
	}
<?php } } ?>
</style>
<div class="pop_up_form_button">
	<button id="pop_up_button" class="pop_up_button">
<?php if ($popup_form_button_title){ echo $popup_form_button_title;}else { echo "Newsletter Form";}?></button>
</div>
<script>	
	 jQuery("#pop_up_button").click(function () {
		 jQuery('#newsletter_pop_upform.ns_pop_up_form .newsletter-api-form-themes').toggle(500);
	 });	
</script>