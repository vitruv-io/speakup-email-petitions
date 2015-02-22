<div class="wrap" id="dk-speakup">

	<div id="icon-dk-speakup" class="icon32"><br /></div>
	<h2><?php _e( 'Email Petitions Settings', 'dk_speakup' ); ?></h2>
	<?php if ( $message_update ) echo '<div id="message" class="updated"><p>' . $message_update . '</p></div>'; ?>

	<form action="" method="post" id="dk-speakup-settings">
		<?php wp_nonce_field( $nonce ); ?>
		<input type="hidden" name="action" value="<?php echo $action; ?>" />
		<input type="hidden" name="tab" id="dk-speakup-tab" value="<?php echo $tab; ?>" />

		<ul id="dk-speakup-tabbar">
			<li><a class="dk-speakup-tab-01" rel="dk-speakup-tab-01"><?php _e( 'Petition Form', 'dk_speakup' ); ?></a></li>
			<li><a class="dk-speakup-tab-02" rel="dk-speakup-tab-02"><?php _e( 'Signature List', 'dk_speakup' ); ?></a></li>
			<li><a class="dk-speakup-tab-03" rel="dk-speakup-tab-03"><?php _e( 'Confirmation Emails', 'dk_speakup' ); ?></a></li>
			<li><a class="dk-speakup-tab-04" rel="dk-speakup-tab-04"><?php _e( 'Admin Display', 'dk_speakup' ); ?></a></li>
		</ul>

		<div id="dk-speakup-tab-01" class="dk-speakup-hidden dk-speakup-tabcontent">
			<h3><?php _e( 'Petition Form', 'dk_speakup' ); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><?php _e( 'Petition Theme', 'dk_speakup' ); ?><br /><span class="description">(shortcode)</span></th>
					<td>
						<label for="theme-default"><input type="radio" name="petition_theme" id="theme-default" value="default" <?php if ( $the_settings->petition_theme == 'default' ) echo 'checked="checked"'; ?> /> <?php _e( 'Default', 'dk_speakup' ); ?></label>
						<label for="petition-theme-basic"><input type="radio" name="petition_theme" id="petition-theme-basic" value="basic" <?php if ( $the_settings->petition_theme == 'basic' ) echo 'checked="checked"'; ?> /> <?php _e( 'Basic', 'dk_speakup' ); ?></label>
						<label for="petition-theme-none"><input type="radio" name="petition_theme" id="petition-theme-none" value="none" <?php if ( $the_settings->petition_theme == 'none' ) echo 'checked="checked"'; ?> /> <?php _e( 'None', 'dk_speakup' ); ?> <span class="description">(<?php _e( 'use', 'dk_speakup' ); ?> petition.css)</span></label>
					</td>
				</tr>
				<th scope="row"><?php _e( 'Widget Theme', 'dk_speakup' ); ?></th>
					<td>
						<label for="widget-theme-default"><input type="radio" name="widget_theme" id="widget-theme-default" value="default" <?php if ( $the_settings->widget_theme == 'default' ) echo 'checked="checked"'; ?> /> <?php _e( 'Default', 'dk_speakup' ); ?></label>
						<label for="widget-theme-none"><input type="radio" name="widget_theme" id="widget-theme-none" value="none" <?php if ( $the_settings->widget_theme == 'none' ) echo 'checked="checked"'; ?> /> <?php _e( 'None', 'dk_speakup' ); ?> <span class="description">(<?php _e( 'use', 'dk_speakup' ); ?> petition-widget.css)</span></label>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="button_text"><?php _e( 'Submit Button Text', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->button_text ); ?>" name="button_text" id="button_text" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="success_message"><?php _e( 'Success Message', 'dk_speakup' ); ?></label></th>
					<td>
						<textarea name="success_message" id="success_message" cols="80" rows="2"><?php echo $the_settings->success_message; ?></textarea>
						<br /><strong><?php _e( 'Accepted variables:', 'dk_speakup' ); ?></strong> %first_name% &nbsp; %last_name%
						<br /><strong><?php _e( 'Accepted tags:', 'dk_speakup' ); ?></strong> &lt;a&gt; &lt;em&gt; &lt;strong> &lt;p&gt;
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="share_message"><?php _e( 'Share Message', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->share_message ); ?>" name="share_message" id="share_message" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="expiration_message"><?php _e( 'Expiration Message', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->expiration_message ); ?>" name="expiration_message" id="expiration_message" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="already_signed_message"><?php _e( 'Already Signed Message', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->already_signed_message ); ?>" name="already_signed_message" id="already_signed_message" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><?php _e( 'Opt-in Default', 'dk_speakup' ); ?></th>
					<td>
						<label for="optin-checked" /><input type="radio" name="optin_default" id="optin-checked" value="checked" <?php if ( $the_settings->optin_default == 'checked' ) echo 'checked="checked"'; ?> /> <?php _e( 'Checked', 'dk_speakup' ); ?></label>
						<label for="optin-unchecked" /><input type="radio" name="optin_default" id="optin-unchecked" value="unchecked" <?php if ( $the_settings->optin_default == 'unchecked' ) echo 'checked="checked"'; ?> /> <?php _e( 'Unchecked', 'dk_speakup' ); ?></label>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><?php _e( 'Display signature count', 'dk_speakup' ); ?></th>
					<td>
						<label for="display-count-yes" /><input type="radio" name="display_count" id="display-count-yes" value="1" <?php if ( $the_settings->display_count == '1' ) echo 'checked="checked"'; ?> /> <?php _e( 'Yes', 'dk_speakup' ); ?></label>
						<label for="display-count-no" /><input type="radio" name="display_count" id="display-count-no" value="0" <?php if ( $the_settings->display_count == '0' ) echo 'checked="checked"'; ?> /> <?php _e( 'No', 'dk_speakup' ); ?></label>
					</td>
				</tr>
			</table>
		</div>

		<div id="dk-speakup-tab-02" class="dk-speakup-hidden dk-speakup-tabcontent">
			<h3><?php _e( 'Signature List', 'dk_speakup' ); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="signaturelist_header"><?php _e( 'Title', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->signaturelist_header ); ?>" name="signaturelist_header" id="signaturelist_header" type="text" class="regular-text" /></td>
				</tr>
				<th scope="row"><?php _e( 'Theme', 'dk_speakup' ); ?></th>
					<td>
						<label for="signaturelist_theme-default"><input type="radio" name="signaturelist_theme" id="signaturelist_theme-default" value="default" <?php if ( $the_settings->signaturelist_theme == 'default' ) echo 'checked="checked"'; ?> /> <?php _e( 'Default', 'dk_speakup' ); ?></label>
						<label for="signaturelist_theme-none"><input type="radio" name="signaturelist_theme" id="signaturelist_theme-none" value="none" <?php if ( $the_settings->signaturelist_theme == 'none' ) echo 'checked="checked"'; ?> /> <?php _e( 'None', 'dk_speakup' ); ?> <span class="description">(<?php _e( 'use', 'dk_speakup' ); ?> petition-signaturelist.css)</span></label>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="signaturelist_rows"><?php _e( 'Rows', 'dk_speakup' ); ?></span></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->signaturelist_rows ); ?>" name="signaturelist_rows" id="signaturelist_rows" type="text" class="small-text" />  <span class="description"><?php _e( 'leave blank to display all', 'dk_speakup' ); ?></span></td>
				</tr>
				<tr valign="top">
					<th scope="row"><?php _e( 'Columns', 'dk_speakup' ); ?></th>
					<td>
						<input type="checkbox" id="sig_city" name="sig_city" <?php if ( $the_settings->sig_city == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_city" class="dk-speakup-inline"><?php _e( 'City', 'dk_speakup'); ?></label><br />

						<input type="checkbox" id="sig_state" name="sig_state" <?php if ( $the_settings->sig_state == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_state" class="dk-speakup-inline"><?php _e( 'State / Province', 'dk_speakup'); ?></label><br />

						<input type="checkbox" id="sig_postcode" name="sig_postcode" <?php if ( $the_settings->sig_postcode == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_postcode" class="dk-speakup-inline"><?php _e( 'Post Code', 'dk_speakup'); ?></label><br />

						<input type="checkbox" id="sig_country" name="sig_country" <?php if ( $the_settings->sig_country == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_country"class="dk-speakup-inline"><?php _e( 'Country', 'dk_speakup'); ?></label><br />
						
						<input type="checkbox" id="sig_custom" name="sig_custom" <?php if ( $the_settings->sig_custom == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_custom" class="dk-speakup-inline"><?php _e( 'Custom Field', 'dk_speakup'); ?></label><br />

						<input type="checkbox" id="sig_date" name="sig_date" <?php if ( $the_settings->sig_date == 1 ) echo 'checked="checked"'; ?> /> 
						<label for="sig_date" class="dk-speakup-inline"><?php _e( 'Date', 'dk_speakup'); ?></label>
					</td>
				</tr>
			</table>
		</div>

		<div id="dk-speakup-tab-03" class="dk-speakup-hidden dk-speakup-tabcontent">
			<h3><?php _e( 'Confirmation Emails', 'dk_speakup' ); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="confirm_email"><?php _e( 'Email From', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->confirm_email ); ?>" name="confirm_email" id="confirm_email" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="confirm_subject"><?php _e( 'Email Subject', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->confirm_subject ); ?>" name="confirm_subject" id="confirm_subject" type="text" class="regular-text" /></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="confirm_message"><?php _e( 'Email Message', 'dk_speakup' ); ?></label></th>
					<td>
						<textarea name="confirm_message" id="confirm_message" cols="80" rows="6"><?php echo $the_settings->confirm_message; ?></textarea>
						<br /><strong><?php _e( 'Accepted variables:', 'dk_speakup' ); ?></strong> %first_name% &nbsp; %last_name% &nbsp; %petition_title% &nbsp; %confirmation_link%
					</td>
				</tr>
			</table>
		</div>

		<div id="dk-speakup-tab-04" class="dk-speakup-hidden dk-speakup-tabcontent">
			<h3><?php _e( 'Admin Display', 'dk_speakup' ); ?></h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row"><label for="petitions_rows"><?php _e( 'Petitions table shows', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->petitions_rows ); ?>" name="petitions_rows" id="petitions_rows" type="text" class="small-text" /> <?php _e( 'rows', 'dk_speakup' ); ?></td>
				</tr>
				<tr valign="top">
					<th scope="row"><label for="signatures_rows"><?php _e( 'Signatures table shows', 'dk_speakup' ); ?></label></th>
					<td><input value="<?php echo esc_attr( $the_settings->signatures_rows ); ?>" name="signatures_rows" id="signatures_rows" type="text" class="small-text" /> <?php _e( 'rows', 'dk_speakup' ); ?></td>
				</tr>
				<tr valign="top">
					<th scope="row"><?php _e( 'CSV file includes', 'dk_speakup' ); ?><br /><shortcode></th>
					<td>
						<label for="csv-signatures-all"><input type="radio" name="csv_signatures" id="csv-signatures-all" value="all" <?php if ( $the_settings->csv_signatures == 'all' ) echo 'checked="checked"'; ?> /> <?php _e( 'All signatures', 'dk_speakup' ); ?></label>
						<label for="csv-signatures-single-optin"><input type="radio" name="csv_signatures" id="csv-signatures-single-optin" value="single_optin" <?php if ( $the_settings->csv_signatures == 'single_optin' ) echo 'checked="checked"'; ?> /> <?php _e( 'Only opt-in signatures', 'dk_speakup' ); ?></label>
						<label for="csv-signatures-double-optin"><input type="radio" name="csv_signatures" id="csv-signatures-double-optin" value="double_optin" <?php if ( $the_settings->csv_signatures == 'double_optin' ) echo 'checked="checked"'; ?> /> <?php _e( 'Only double opt-in signatures', 'dk_speakup' ); ?> <span class="description">(<?php _e( 'opt-in + confirmed', 'dk_speakup' ); ?>)</span></label>
					</td>
				</tr>
			</table>
		</div>

		<p><input type="submit" name="submit" value="<?php _e( 'Save Changes' ); ?>" class="button-primary" /></p>

	</form>

</div>