<!-- Contact Info Settings panel content --- >
<!----------------------------------------> 
	<?php $wpsm_mmr_plugin_options_contact_us = unserialize(get_option('wpsm_mmr_plugin_options_contact_us'));	
	?>	
	<script>
		 function send_mail_enable_section(status){
		//alert('none');
			if(status.value=='on')
			    {
					jQuery(".send_mail_enable_section").show(1000);
				}
			   else
				{
				  jQuery(".send_mail_enable_section").hide(500);
			    }
		} 
		
		
	//For Google Map section
		function contact_us_section_enable_map(status){
		if(status.value=='on')
			    {
					jQuery(".contact_us_map").show(1000);
				}
			   else
				{
				  jQuery(".contact_us_map").hide(500);
			    }
			
		}
	
		// For Contact Us Section
		 function contact_section_enable(status){
		//alert('none');
			if(status.value=='on')
			    {
					jQuery(".contact_us_section").show(500);
				}
			   else
				{
				  jQuery(".contact_us_section").hide(500);
			    }
		} 
		
		
	</script>
	<style>
		<?php if($wpsm_mmr_plugin_options_contact_us['contact_us_enable']=="off") { ?>
			.contact_us_section{
				display:none;
			}
		<?php } ?>
	
		
	</style>
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item heading-item">
				<div class="panel panel-default heading-item-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Contact Info Section Settings','WPSM_MMR_TEXT_DOMAIN'); ?>
								</div>
							   
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		   
		</div>
		<form method="post" id="wpsm_mmr_plugin_options_contact_us" >
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Display Contact Info Section','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Hide/display your Contact info Section here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<?php  $contact_us_enable = $wpsm_mmr_plugin_options_contact_us['contact_us_enable']; ?>
								<div class="switch">
									<input type="radio" class="switch-input" name="contact_us_enable" value="on" id="enable_contact_us"  <?php if($contact_us_enable == "on") { echo "checked"; } ?>  onclick="contact_section_enable(this);">
									<label for="enable_contact_us" class="switch-label switch-label-off">Yes</label>
									<input type="radio" class="switch-input" name="contact_us_enable" value="off" id="disable_contact_us" <?php if($contact_us_enable == "off") { echo "checked"; } ?> onclick="contact_section_enable(this);">
									<label for="disable_contact_us" class="switch-label switch-label-on">No</label>
									<span class="switch-selection"></span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
			
			<div class="panel panel-primary panel-default content-panel contact_us_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Contact Info Button Icon','WPSM_MMR_TEXT_DOMAIN')?></th>
							<td></td>
						</tr>
						<tr class="" style="border-bottom:none;">
							<td>
								<!-- Modal -->
								<div class="form-group input-group">
									<input data-placement="bottomRight" class="form-control icp icp-auto" name="contact_us_section_btn_icon" id="contact_us_section_btn_icon" value="<?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_btn_icon']; ?>" type="text" readonly="readonly" />
									<span class="input-group-addon "></span>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
		
			
			<div class="panel panel-primary panel-default content-panel contact_us_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Contact Info Section Title','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Update your Contact info section title here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="contact_us_section_title" name="contact_us_section_title" placeholder="<?php _e('Enter Contact Us section Title Here','WPSM_MMR_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_title']; ?>" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel contact_us_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Contact Info Section Description','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Update your Contact info section description" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<textarea rows="6"  class="pro_text" id="contact_us_section_title_desc" name="contact_us_section_title_desc" placeholder="<?php _e('Enter Your Contact Us Section Description Here...','WPSM_MMR_TEXT_DOMAIN'); ?>"><?php echo $wpsm_mmr_plugin_options_contact_us['contact_us_section_title_desc']; ?></textarea>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel contact_us_section">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Add Your Contact Information Here','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
								<i title="Update your Contact information here" style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><i class="fa fa-map-marker"></i>  <?php _e('Address','WPSM_MMR_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="contact_info_address" name="contact_info_address" placeholder="<?php _e('Enter Your Address Here','WPSM_MMR_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_address']; ?>" />
							</td>
						</tr>
						
						
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><i class="fa fa-phone"></i>  <?php _e('Contact No.','WPSM_MMR_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="contact_info_number" name="contact_info_number"  size="56" value="<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_number']; ?>" />
							</td>
						</tr>
						
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<p class="rcsp_p_admin"><i class="fa fa-envelope-o"></i>  <?php _e('Email Address','WPSM_MMR_TEXT_DOMAIN'); ?></p>
								<input type="text" class="pro_text" id="contact_info_email_address" name="contact_info_email_address" placeholder="<?php _e('Enter Your Contact Email For display on Contact Info Section','WPSM_MMR_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_mmr_plugin_options_contact_us['contact_info_email_address']; ?>" />
							</td>
						</tr>
						
					</table>
				</div>
			</div>
			<div class="panel panel-primary panel-default content-panel ">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Contact Form ','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td >
								<h4><a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Avalable In pro version </a></h4>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="panel panel-primary panel-default content-panel ">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Google Map ','WPSM_MMR_TEXT_DOMAIN'); ?></th>
							<td style="text-align:right;" >
							</td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td >
								<h4><a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Avalable In pro version </a></h4>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
		</form>
		
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" class="btn btn-info btn-lg" onclick="wpsm_mmr_option_data_save('contact_us')"><?php _e('Save Changes','WPSM_MMR_TEXT_DOMAIN'); ?></button>
				</div>
				<div class="pull-right">
					<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_mmr_option_data_reset('contact_us')"><?php _e('Reset Default','WPSM_MMR_TEXT_DOMAIN'); ?></button>
				</div>
			</div>
		</div>
								
							

	</div>
	<!-- /row -->