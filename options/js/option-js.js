// /*Admin options pannal data value*/
// function weblizar_pffree_option_data_save(name) 
	// { 	//tinyMCE.triggerSave();
		// var weblizar_settings_save= "#weblizar_pffree_settings_save_"+name;
		// var weblizar_theme_options = "#weblizar_pffree_"+name;
		// var weblizar_settings_save_success = ".success-msg";
		// var weblizar_loding = ".msg-overlay";		
		// jQuery(weblizar_loding).show();	
		// jQuery(weblizar_settings_save).val("1");        
	    // jQuery.ajax({
				// url:'?page=pffree-weblizar',
				// type:'post',
				// data : jQuery(weblizar_theme_options).serialize(),
				 // success : function(data)
				 // { 
				 	// jQuery(weblizar_loding+' #loading-image').hide();
				 	// jQuery(weblizar_settings_save_success).fadeIn();
					// jQuery(weblizar_settings_save_success).fadeOut(1000);
					// jQuery(weblizar_loding).fadeOut(2000);					
					// window.location = '?page=pffree-weblizar';
				 // }			
		// });
	// }
	
// /*Admin options value reset */
	// function weblizar_pffree_option_data_reset(name) 
	// {  
		// var r=confirm(pffree_js.data_reset_confirm)
		// if (r==true)
		// {		var weblizar_settings_save= "#weblizar_pffree_settings_save_"+name;
				// var weblizar_theme_options = "#weblizar_pffree_"+name;
				// var weblizar_loding = ".msg-overlay";
				// var weblizar_settings_save_reset = ".reset-msg";
				// jQuery(weblizar_loding).show();
				// jQuery(weblizar_settings_save).val("2");
				// jQuery.ajax({
				   // url:'?page=pffree-weblizar',
				   // type:'post',
				   // data : jQuery(weblizar_theme_options).serialize(),
				   // success : function(data){
					// jQuery(weblizar_loding+' #loading-image').hide();
					// jQuery(weblizar_settings_save_reset).fadeIn();
					// jQuery(weblizar_settings_save_reset).fadeOut(1000);
					// jQuery(weblizar_loding).fadeOut(2000);
					// window.location = '?page=pffree-weblizar';
				// }			
			// });
		// } else  {
		// alert(pffree_js.data_reset_cancelled);  }		
	// }

// js to active the link of option pannel
jQuery(document).ready(function(){
	// rate it option js	
	jQuery( '.rating-stars' ).find( 'a' ).hover(
		function() {
			jQuery( this ).nextAll( 'a' ).children( 'span' ).removeClass( 'dashicons-star-filled' ).addClass( 'dashicons-star-empty' );
			jQuery( this ).prevAll( 'a' ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
			jQuery( this ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
		}, function() {
			var rating = $( 'input#rating' ).val();
			if ( rating ) {
				var list = $( '.rating-stars a' );
				list.children( 'span' ).removeClass( 'dashicons-star-filled' ).addClass( 'dashicons-star-empty' );
				list.slice( 0, rating ).children( 'span' ).removeClass( 'dashicons-star-empty' ).addClass( 'dashicons-star-filled' );
			}
		}
	);
	
	
	/********media-upload******/
	// media upload js
	var uploadID = ''; /*setup the var*/
	var get_version ='';
	jQuery('.upload_image_button').click(function() {
		uploadID = jQuery(this).prev('input'); /*grab the specific input*/
		get_version =jQuery('#get_version').val();
		
		formfield = jQuery('.upload').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		
		window.send_to_editor = function(html)
		{	
		if (get_version => '4.5'){
			imgurl = jQuery(html).attr('src');
		}else{
			imgurl = jQuery('img',html).attr('src');
			}	
			uploadID.val(imgurl); /*assign the value to the input*/
			tb_remove();
		};		
		return false;
	});
	
	
	/* Script For cookie */	
	
	if(getCookie('pffree_currentab')!=""){
		jQuery('ul.options_tabs li a#'+getCookie('pffree_currentab')).parent().addClass('currunt active');
		jQuery('ul.options_tabs li a#'+getCookie('pffree_currentab')).addClass('active');
		jQuery('ul.options_tabs li:first-child').removeClass('active');
	}

	// menu click	
	jQuery('ul.options_tabs > li > a').click(function(){		
		if (jQuery(this).attr('class') != 'active')
		{ 		
			jQuery('ul.options_tabs li a').removeClass('active');
			jQuery(this).addClass('active');
			jQuery('.ui-tabs-panel').removeClass('currunt');
		  
			jQuery('ul.options_tabs li').removeClass('active');
			jQuery(this).parent().addClass('active');		
			var divid =  jQuery(this).attr("id");
			document.cookie="pffree_currentabChild=;expires="+Date(jQuery.now());
			document.cookie="pffree_currentab="+divid;
			var add="div#"+divid;
			var strlenght = add.length;
			
			if(strlenght<17)
			{	
				var add="div#option-ui-id-"+divid;
				var ulid ="#ui-id-"+divid;
				jQuery('ul.options_tabs li').removeClass('currunt');
				jQuery(ulid).parent().addClass('currunt');	
			}			
			jQuery('div.ui-tabs-panel').addClass('deactive');
			jQuery('div.ui-tabs-panel').removeClass('active');
			jQuery(add).removeClass('deactive');		
			jQuery(add).addClass('active');		
		}
	});
	
	
	if(getCookie('pffree_currentab')!=""){
			var divid = getCookie('pffree_currentab');
			var add="div#"+divid;
			var strlenght = add.length;
			
			if(strlenght<17)
			{	
				var add="div#option-ui-id-"+divid;
				var ulid ="#ui-id-"+divid;
				jQuery('ul.options_tabs li li ').removeClass('currunt');
				jQuery(ulid).parent().addClass('currunt');	
			}			
			jQuery('div.ui-tabs-panel').addClass('deactive');
			jQuery('div.ui-tabs-panel').removeClass('active');
			jQuery(add).removeClass('deactive');		
			jQuery(add).addClass('active');	
		}
		
	/* Function to get cookie */
	
	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
		}
		return "";
	}
	
	/* Tooltip js */
	jQuery('[data-toggle="tooltip"]').tooltip({trigger: "hover"});
	var bg= jQuery('#predefine_bg_image').val();
		jQuery('.bg-image-selection img').click(function() {
			var imgLink= jQuery(this).attr('src');
			jQuery('.bg-image-selection img').removeClass('pffree_active');
			jQuery(this).addClass('pffree_active');
			jQuery('#predefine_bg_image').val(imgLink);
		});	
	jQuery('select[multiple]').multiselect({		
		placeholder: 'Select options'
	});	
	
	
	/* Profile Section hide/show */
	jQuery('#profile_section_onoff').change(function() {
		if (this.checked) {
			jQuery('.profile_template-options').addClass('active');
		} else {
			jQuery('.profile_template-options').removeClass('active');
		}
	});	
	/* Profile Image hide/show */
	jQuery('#profile_image_onoff').change(function() {
		if (this.checked) {
			jQuery('.profile_img-options').addClass('active');
		} else {
			jQuery('.profile_img-options').removeClass('active');
		}
	});	
	
	/* Profile User Name hide/show */
	jQuery('#user_name_onoff').change(function() {
		if (this.checked) {
			jQuery('.profile_uname-options').addClass('active');
		} else {
			jQuery('.profile_uname-options').removeClass('active');
		}
	});
	
	/* Profile Description hide/show */
	jQuery('#user_description_onoff').change(function() {
		if (this.checked) {
			jQuery('.profile_descrip-options').addClass('active');
		} else {
			jQuery('.profile_descrip-options').removeClass('active');
		}
	});	
	
	/* Profile Section counts hide/show */
	jQuery('#user_counts_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_counts-options').addClass('active');
		} else {
			jQuery('.user_counts-options').removeClass('active');
		}
	});
	
	/* Profile Section counts boards hide/show */
	jQuery('#boards_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_c_board-options').addClass('active');
		} else {
			jQuery('.user_c_board-options').removeClass('active');
		}
	});

	 /* Profile Section counts Pins hide/show */
	jQuery('#pins_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_c_pins-options').addClass('active');
		} else {
			jQuery('.user_c_pins-options').removeClass('active');
		}
	});	
	
	/* Profile Follow button hide/show */	
	jQuery('#user_follow_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_follow-options').addClass('active');
		} else {
			jQuery('.user_follow-options').removeClass('active');
		}
	});	
	
	/* Profile followers hide/show */
	jQuery('#followers_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_followers-options').addClass('active');
		} else {
			jQuery('.user_followers-options').removeClass('active');
		}
	});	
	
	/* Profile Following hide/show */
	jQuery('#following_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_following-options').addClass('active');
		} else {
			jQuery('.user_following-options').removeClass('active');
		}
	});	
	
	/* Profile Likes hide/show */
	jQuery('#likes_onoff').change(function() {
		if (this.checked) {
			jQuery('.user_likes-options').addClass('active');
		} else {
			jQuery('.user_likes-options').removeClass('active');
		}
	});		
	
	/* Boards Section hide/show */
	jQuery('#boards_section_onoff').change(function() {
		if (this.checked) {
			jQuery('.boards_template-options').addClass('active');
		} else {
			jQuery('.boards_template-options').removeClass('active');
		}
	});	
		
    jQuery('#board_display').on('change', function() {
        if (jQuery(this).val() == '1') {
            jQuery('.pinterest-boards').addClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-boards').removeClass('col-md-6 col-sm-6 col-xs-6');
			jQuery('.pinterest-boards').removeClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-boards').removeClass('col-md-3');
        } else if (jQuery(this).val() == '2') {
            jQuery('.pinterest-boards').addClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-boards').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-boards').removeClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-boards').removeClass('col-md-3 col-sm-3 col-xs-3');
        }else if (jQuery(this).val() == '3') {
            jQuery('.pinterest-boards').addClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-boards').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-boards').removeClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-boards').removeClass('col-md-3 col-sm-3 col-xs-3');
        }else if (jQuery(this).val() == '4') {
            jQuery('.pinterest-boards').addClass('col-md-3 col-sm-3 col-xs-3');
            jQuery('.pinterest-boards').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-boards').removeClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-boards').removeClass('col-md-4 col-sm-4 col-xs-4');
        }
    });
	
	
	
	jQuery('#pins_display').on('change', function() {
        if (jQuery(this).val() == '1') {
            jQuery('.pinterest-pins').addClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-pins').removeClass('col-md-6 col-sm-6 col-xs-6');
			jQuery('.pinterest-pins').removeClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-pins').removeClass('col-md-3');
        } else if (jQuery(this).val() == '2') {
            jQuery('.pinterest-pins').addClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-pins').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-pins').removeClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-pins').removeClass('col-md-3 col-sm-3 col-xs-3');
        }else if (jQuery(this).val() == '3') {
            jQuery('.pinterest-pins').addClass('col-md-4 col-sm-4 col-xs-4');
            jQuery('.pinterest-pins').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-pins').removeClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-pins').removeClass('col-md-3 col-sm-3 col-xs-3');
        }else if (jQuery(this).val() == '4') {
            jQuery('.pinterest-pins').addClass('col-md-3 col-sm-3 col-xs-3');
            jQuery('.pinterest-pins').removeClass('col-md-12 col-sm-12 col-xs-12');
            jQuery('.pinterest-pins').removeClass('col-md-6 col-sm-6 col-xs-6');
            jQuery('.pinterest-pins').removeClass('col-md-4 col-sm-4 col-xs-4');
        }
    });
	
	/* Boards Section boards image hide/show */
	jQuery('#board_image_onoff').change(function() {
		if (this.checked) {
			jQuery('.boards_image-options').addClass('active');
		} else {
			jQuery('.boards_image-options').removeClass('active');
		}
	});	
	
	/* Boards Section boards Name hide/show */
	jQuery('#board_name_onoff').change(function() {
		if (this.checked) {
			jQuery('.boards_name-options').addClass('active');
		} else {
			jQuery('.boards_name-options').removeClass('active');
		}
	});	
	
	/* Boards Section boards create hide/show */
	jQuery('#board_create_onoff').change(function() {
		if (this.checked) {
			jQuery('.board_create-options').addClass('active');
		} else {
			jQuery('.board_create-options').removeClass('active');
		}
	});		
	
	/* Boards Section counts hide/show */
	jQuery('#board_counts_onoff').change(function() {
		if (this.checked) {
			jQuery('.board_counts-options').addClass('active');
		} else {
			jQuery('.board_counts-options').removeClass('active');
		}
	});	
	
	/* Boards Section counts Followers hide/show */
	jQuery('#board_followers_value_onoff').change(function() {
		if (this.checked) {
			jQuery('.board_c_followers-options').addClass('active');
		} else {
			jQuery('.board_c_followers-options').removeClass('active');
		}
	});	
	
	/* Boards Section counts Pins hide/show */
	jQuery('#board_pins_value_onoff').change(function() {
		if (this.checked) {
			jQuery('.board_c_pins-options').addClass('active');
		} else {
			jQuery('.board_c_pins-options').removeClass('active');
		}
	});	
	
	jQuery('#pins_section_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_section-options').addClass('active');
		} else {
			jQuery('.pins_section-options').removeClass('active');
		}
	});
	
	jQuery('#pins_section_onoff').change(function() {
		if (this.checked) {
			jQuery('.board_pins-options').addClass('active');
		} else {
			jQuery('.board_pins-options').removeClass('active');
		}
	});
	
	
	jQuery('#pins_image_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_img-options').addClass('active');
		} else {
			jQuery('.pins_img-options').removeClass('active');
		}
	});
	
	
	jQuery('#pins_counts_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_counts-options').addClass('active');
		} else {
			jQuery('.pins_counts-options').removeClass('active');
		}
	});
	
	jQuery('#pins_likes_value_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_counts_likes-options').addClass('active');
		} else {
			jQuery('.pins_counts_likes-options').removeClass('active');
		}
	});
	
	jQuery('#pins_comments_value_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_counts_comments-options').addClass('active');
		} else {
			jQuery('.pins_counts_comments-options').removeClass('active');
		}
	});
	
	jQuery('#pins_repins_value_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_counts_repins-options').addClass('active');
		} else {
			jQuery('.pins_counts_repins-options').removeClass('active');
		}
	});
	
	jQuery('#pins_description_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_description-options').addClass('active');
		} else {
			jQuery('.pins_description-options').removeClass('active');
		}
	});
	
	jQuery('#pins_user_profile_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_profile-options').addClass('active');
		} else {
			jQuery('.pins_profile-options').removeClass('active');
		}
	});
	
	
	jQuery('#pins_preview_onoff').change(function() {
		if (this.checked) {
			jQuery('.pins_preview-options').addClass('active');
			jQuery('.pins_preview_off-options').removeClass('active');
		} else {
			jQuery('.pins_preview_off-options').addClass('active');
			jQuery('.pins_preview-options').removeClass('active');
		}
	});
	
	
	
	jQuery('a.back-top').click(function() {
		jQuery('html, body').animate({
			scrollTop: 100
		}, 700);
		return false;
	});
	
	 
});

/* for scroll arrow */
jQuery(window).scroll(function() {
	var amountScrolled = 300;
	if ( jQuery(window).scrollTop() > amountScrolled ) {
		jQuery('a.back-top').fadeIn('slow');
	} else {
		jQuery('a.back-top').fadeOut('slow');
	}
		
});