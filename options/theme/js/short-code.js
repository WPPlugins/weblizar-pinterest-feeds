jQuery(document).ready(function() {
	jQuery('#wnlsp-form-insert').on('click', function() {
		var templates_id = Math.floor((Math.random() * 10000000) + 1);
		var select_templates = jQuery('#selected_template option:selected').val();
		
		var theme_heading = jQuery('#theme_heading').val();
		var heading_settings_onoff = jQuery('#heading_settings_onoff').val();
		if (heading_settings_onoff == 'heading_custom'){
			var heading_size = jQuery('#heading_size').val();
			var heading_color = jQuery('#heading_color').val();
			var heading_data = ' heading = "'+theme_heading+'" heading_size = "'+heading_size+'" heading_color = "'+heading_color+'"';
		}else if(heading_settings_onoff == 'default'){
			var heading_data = ' heading = "'+theme_heading+'"';
		}			
		
		var theme_sub_heading = jQuery('#theme_sub_heading').val();
		var sub_heading_settings_onoff = jQuery('#sub_heading_settings_onoff').val();
		if (sub_heading_settings_onoff == 'sh_custom'){
			var sub_heading_size = jQuery('#sub_heading_size').val();
			var sub_heading_color = jQuery('#sub_heading_color').val();
			var sub_heading_data = ' sub_heading = "'+theme_sub_heading+'" sub_heading_size = "'+sub_heading_size+'" sub_heading_color = "'+sub_heading_color+'"';
		}else if(sub_heading_settings_onoff == 'default'){
			var sub_heading_data = ' sub_heading = "'+theme_sub_heading+'"';
		}
		
		var theme_message = jQuery('#theme_message').val();
		var message_settings_onoff = jQuery('#message_settings_onoff').val();
		if (message_settings_onoff == 'message_custom'){
			var message_size = jQuery('#message_size').val();
			var message_color = jQuery('#message_color').val();
			var message_data = ' message = "'+theme_message+'" message_size = "'+message_size+'" message_color = "'+message_color+'"';
		}else if(message_settings_onoff == 'default'){
			var message_data = ' message = "'+theme_message+'"';
		}	
		
		var icon_type = jQuery('#form_icon_type').val();
		if (icon_type == 'icon'){
			var icon = jQuery('#theme_icon').val();
			var icon_size = jQuery('#icon_size').val();
			var icon_color = jQuery('#icon_color').val();
			var icon_data = ' icon = "'+icon+'" icon_size = "'+icon_size+'" icon_color = "'+icon_color+'"';
		}else if(icon_type == 'icon_image'){
			var icon_image = jQuery('#icon_image_value').val();
			var image_height = jQuery('#icon_image_height').val();
			var image_width = jQuery('#icon_image_width').val();
			var icon_data = ' icon_image = "'+icon_image+'" image_width = "'+image_width+'" image_height = "'+image_height+'"';
		}
		
		var theme_color = jQuery('#theme_color').val();
		var content_color = jQuery('#content_color').val();
		var form_bg_type = jQuery('#form_bg_type').val();
		if (form_bg_type == 'color'){
			var bg_value = jQuery('#color_value').val();
		}else if(form_bg_type == 'image'){
			var bg_value = jQuery('#image_value').val();
		}
		var confirm_email_subscribe = jQuery('#sc_confirm_email_subscribe').val();
		var sc_select_form = jQuery('#sc_select_form').val();
		if(confirm_email_subscribe == 'on'){
			var select_form_value = ' select_form = "'+sc_select_form+'"';
		}else if(confirm_email_subscribe == 'off'){
			select_form_value ='';
		}		
		var social = jQuery('#social_icon_onoff').val();
		if (select_templates==0){
		window.send_to_editor('[pffree_theme id="'+templates_id+'"]');	
		}else{
		window.send_to_editor('[pffree_theme'+select_templates+' id="'+templates_id+'"'+heading_data+sub_heading_data+message_data+' icon_type = "'+icon_type+'"'+icon_data+' theme_color = "'+theme_color+'" bg_type = "'+form_bg_type+'" bg_value = "'+bg_value+'" content_color = "'+content_color+'" social = "'+social+'"'+select_form_value+']');
		}
		tb_remove();
	});
	
	var selectid;
	jQuery('#selected_template').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.custom-option').removeClass('active');
		jQuery('#selected_template'+selectid).addClass('active');
	});
	
	var selectid;
	jQuery('#form_bg_type').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.bg-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	
	var selectid;
	jQuery('#form_icon').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.form_icon-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	
	var selectid;
	jQuery('#form_icon_type').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.icon-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	
	var selectid;
	jQuery('#icon_settings').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.form_icon-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	// heading option js	
	var selectid;
	jQuery('#heading_settings_onoff').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.heading-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	// Sub heading option js	
	var selectid;
	jQuery('#sub_heading_settings_onoff').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.sub_heading-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	// Message option js	
	var selectid;
	jQuery('#message_settings_onoff').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.message-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
	
	var selectid;
	jQuery('#others_settings').on('change',function(){
		selectid = jQuery(this).val();
		jQuery('.others-option').removeClass('active');
		jQuery('#'+selectid).addClass('active');
	});
});