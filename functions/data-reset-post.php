<?php 
if(isset($_POST['action_mmr_reset']) == "action_mmr_page_setting_reset_post")
	{

	$hook = $_POST['hook'];
	$default_url =  wpsm_mmr_PLUGIN_URL.'img/slide6-min.jpg'; 
	$default_url2 =  wpsm_mmr_PLUGIN_URL.'img/wp2.png'; 
	
	
	/******************* DASHBOARD *************************************
	********************************************************************/	
	
	if($hook=="dashboard"){
		$wpsm_mmr_plugin_options_dashboard = array( 'wpsm_csp_status' => "0" );
		update_option("wpsm_mmr_plugin_options_dashboard", serialize($wpsm_mmr_plugin_options_dashboard));
	}
	
	/******************* TEMPLATES *************************************
	********************************************************************/	
	
	if($hook=="templates"){
		$wpsm_mmr_plugin_options_templates = array( 'templates' => "1" );
		update_option("wpsm_mmr_plugin_options_templates", serialize($wpsm_mmr_plugin_options_templates));
	}
	
	
	
	/******************* GENERAL SETTINGS *******************************
	********************************************************************/
	
	if($hook=="general"){
		
	
		$wpsm_mmr_plugin_options_general = array( 
		'rcsp_logo_url' => $default_url2,
		'logo_width' => "200",
		'logo_height' => "50",
		'logo_enable' => "on",
		'rcsp_headline' => "Coming Soon",
		'rcsp_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.",
		);
		
		update_option("wpsm_mmr_plugin_options_general", serialize($wpsm_mmr_plugin_options_general));
		
	}
	
	
	
	
	/******************* HEADER SETTINGS *******************************
	********************************************************************/	
	if($hook=="header"){	
	
	$wpsm_mmr_plugin_options_header = array( 
		'favicon' => $default_url2,
		'meta_title' => "Coming Soon",
		'meta_desc' => "",
		'google_al' => "",
	);
	
	update_option("wpsm_mmr_plugin_options_header", serialize($wpsm_mmr_plugin_options_header));
	
	}
	
	
	/******************* COUNTDOWN SETTINGS *******************************
	********************************************************************/	

if($hook=="countdown"){	
	
	$wpsm_mmr_plugin_options_countdown = array( 
		'countdown_enable' => "on",
		'countdown_date' => "2017/11/22",
		'countdown_time' => "10:50",
		'days' => "Days",
		'hours' => "Hours",
		'minutes' => "Minutes",
		'seconds' => "Seconds",
	);
	
	update_option("wpsm_mmr_plugin_options_countdown", serialize($wpsm_mmr_plugin_options_countdown));
	
}
	
	
	/******************* BACKGROUND SETTINGS *******************************
	********************************************************************/

	if($hook=="background"){	
		
		$wpsm_mmr_plugin_options_background = array( 
			'select_background' => "bg_image",
			'background_color' => "#31a3dd",
			'bg_effect' => "off",
			'background_color_overlay' => "1",
			'background_image' => $default_url,
			'bg_slideshow_no' => "2",
			'background_slides_0' => $default_url,
			'background_slides_1' => $default_url,
			'background_slides_2' => $default_url,
			'background_slides_3' => $default_url,
			'background_slides_4' => $default_url,
		);
		
		update_option("wpsm_mmr_plugin_options_background", serialize($wpsm_mmr_plugin_options_background));
		
	}
	
	
	/******************* TEXT AND COLOR SETTINGS *******************************
	********************************************************************/		
	
	if($hook=="text_and_color"){
	
		$wpsm_mmr_plugin_options_text_and_color = array( 
			'headeline_ft_clr' => "#ffffff",
			'desc_ft_clr' => "#ffffff",
			'sb_btn_ft_clr' => "#ffffff",
			'cnd_timer_clr' => "#ffffff",
			'social_icon_clr' => "#333333",
			'social_icon_bg_clr' => "#ffffff",
			'ext_ft_clr' => "#ffffff",
			'headline_ft_size' => "65",
			'desc_ft_size' => "20",
			'headlines_ft_stl' => "sans-serif",
			'desc_ft_stl' => "sans-serif",
			'other_ft_stl' => "sans-serif",
		);
		
		update_option("wpsm_mmr_plugin_options_text_and_color", serialize($wpsm_mmr_plugin_options_text_and_color));
	
	}
	
	
	/******************* CUSTOM CSS SETTINGS *******************************
	********************************************************************/	
	if($hook=="custom_css"){	
		
		$wpsm_mmr_plugin_options_custom_css = array( 
			'custom_css' => "",
			
		);
		
		update_option("wpsm_mmr_plugin_options_custom_css", serialize($wpsm_mmr_plugin_options_custom_css));
		
	}
	
	
	/******************* SOCIAL SETTINGS *******************************
	********************************************************************/		
	
	if($hook=="social"){
	
		$wpsm_mmr_plugin_options_social = array( 
			'social' => array('#','#','#','#','#','#'),
			'social_icon' => array('fa-facebook','fa-twitter','fa-linkedin','fa-google-plus','fa-youtube-play','fa-pinterest-p'),
			'social_name' => array('facebook','twitter','linkedin','google plus','youtube','pinterest'),
			
		);
			
		update_option("wpsm_mmr_plugin_options_social", serialize($wpsm_mmr_plugin_options_social));
	
	}
	
	
	/******************* ABOUT US *******************************
	********************************************************************/	
	if($hook=="about_us"){	
	
		$wpsm_mmr_plugin_options_about_us = array( 
			'about_us_enable' => "on",
			'about_btn_icon' => "fa-user",
			'about_section_title' => "About Us",
			'about_section_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendiss lacus est.",
			
		);
		
		update_option("wpsm_mmr_plugin_options_about_us", serialize($wpsm_mmr_plugin_options_about_us));	
	
	}
	
	/******************* CONTACT INFO *******************************
	********************************************************************/	

	if($hook=="contact_us"){	
	
		$wpsm_mmr_plugin_options_contact_us = array( 
			'contact_us_enable' => "on",
			'contact_us_section_btn_icon' => "fa-info",
			'contact_us_section_title' => "Contact Info",
			'contact_us_section_title_desc' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec conseenigmat laore gittis. Suspendisse ultricies ultrices viverra.",
			'contact_info_address' => "123 Street, City",
			'contact_info_number' => "(00) 123-4567890",
			'contact_info_email_address' => "email@example.com",
			
		);
		
		update_option("wpsm_mmr_plugin_options_contact_us", serialize($wpsm_mmr_plugin_options_contact_us));
	
	}

	/******************* NEWSLETTER SETTINGS ****************************
	********************************************************************/	

	if($hook=="newsletter"){	
	
		
		$wpsm_mmr_plugin_options_newsletter = array( 
			'wpsm_mmr_newsletter_dropdown' => "0",
			'to_subs_mail_sub' => "Coming soon page",
			'to_subs_mail_msg' => "Thanks for submitting your email. We will notify you once we launch",
			'to_admin_mail_sub' => "Coming soon page",
			'to_admin_mail_msg' => "Hey Some one has subscribed to the Coming Soon page",
			'email_add_of_admin' => "",
			
			
		);
		
		update_option("wpsm_mmr_plugin_options_newsletter", serialize($wpsm_mmr_plugin_options_newsletter));
	
	}


	/******************* SUBSCRIBER FIELD SETTINGS ****************************
	********************************************************************/		
	if($hook=="subscription_field"){
		$wpsm_mmr_plugin_options_subscription_field = array( 
			'subs_me_button_icon' => "fa-envelope-o",
			'email_field_pl_hold_text' => "Enter Your Email",
			'success_subs_notification_text' => "Thank you for subscribing Us",
			'invalid_email_notification_text' => "Invalid Email , Please enter valid Email",
			
			
		);
		
		update_option("wpsm_mmr_plugin_options_subscription_field", serialize($wpsm_mmr_plugin_options_subscription_field));

	}	
	
	
	 
}
?>