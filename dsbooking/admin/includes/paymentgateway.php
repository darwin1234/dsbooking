

<div style="width:100%; height:40px; clear:both;"></div>

<div class="container"  style="width:100%;">

<div class="panel panel-primary">
			<div class="alert alert-success" style="background: #34495E; color: #fff; border-color: #34495E; border-radius: 0;">
				<h5>Payment Setting</h5>
			</div>
          
			<div class="panel-body">
				<div class="wrap">
					
					<form method="post" action="options.php">
						<?php settings_fields( 'dsbooking-paymentsettings-group' ); ?>
						<?php do_settings_sections( 'dsbooking-paymentsettings-group' ); ?>
				
						<div>
							<h4>Paypal Setup</h4>
						<table class="form-table" style="width:100%;">
							<input type="hidden" name="dspaypal" style="width:50%;" value="<?php echo esc_attr( get_option('dspaypal') ); ?>" />
							<input type="hidden" name="dscenpos" style="width:50%;" value="<?php echo esc_attr( get_option('dscenpos') ); ?>" />
							<tr valign="top">
							<th scope="row">Client ID</th>
							<td><input type="text" name="dsclientid" style="width:50%;" value="<?php echo esc_attr( get_option('dsclientid') ); ?>" /></td>
							</tr>
							<tr valign="top">
							<th scope="row">Secret</th>
							<td><input type="text" name="dsclientsecret"  style="width:50%;" value="<?php echo esc_attr( get_option('dsclientsecret') ); ?>" /></td>
							</tr>
						</table>
						<div>
						<div>
						<h4>Cenpos Setup</h4>
						<table class="form-table" style="width:100%;">
							<tr valign="top">
							<th scope="row">Merchant ID</th>
							<td><input type="text" name="cenposmerchantid" style="width:50%;" value="<?php echo esc_attr( get_option('cenposmerchantid') ); ?>" /></td>
							</tr>
						</table>
						</div>
						<?php submit_button(); ?>

					</form>
				</div>
			</div>
</div>
</div>