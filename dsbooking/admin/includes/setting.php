<div style="width:100%; height:40px; clear:both;"></div>
<div class="container"  style="width:100%;">
<div class="panel panel-primary">
			 <div class="alert alert-success" style="background: #34495E; color: #fff; border-color: #34495E; border-radius: 0;">
				<h5>Auto Email Response</h5>
			</div>
            <div class="panel-body">
				<div class="wrap">
					
					<form method="post" action="options.php">
						<?php settings_fields( 'dsbooking-settings-group' ); ?>
						<?php do_settings_sections( 'dsbooking-settings-group' ); ?>
						<table class="form-table" style="width:100%;">
							<tr valign="top">
							<th scope="row">From</th>
							<td><input type="text" name="dsfromemail" style="width:50%;" value="<?php echo esc_attr( get_option('dsfromemail') ); ?>" /></td>
							</tr>
							<tr valign="top">
							<th scope="row">Subject</th>
							<td><input type="text" name="dsbookingemailsubject"  style="width:50%;" value="<?php echo esc_attr( get_option('dsbookingemailsubject') ); ?>" /></td>
							</tr>
							<tr valign="top">
							<th scope="row">Message to clients</th>
							<td><textarea name="Messagetoclients" style="width:100%; height:200px;"><?php echo esc_attr( get_option('Messagetoclients') ); ?></textarea></td>
							</tr>
						</table>
						
						<?php submit_button(); ?>

					</form>
				</div>
			</div>
</div>
</div>