<?php 
require_once(realpath(dirname(__FILE__)). '/main.php');
class DBAdminMenu{
	function wpautop_control_menu() {
		 add_menu_page('Booking System', 'Booking System', 'manage_options', 'ds-booked',  array($this, 'dsadminbooking'), plugins_url() .'/dsbooking/resources/booking-icon.png');
		 add_submenu_page( null, 'Add Booking', 'Add booking', 'manage_options', 'viewbooking', array($this, 'dsadminbooking'));
		 add_submenu_page( 'ds-booked', 'Setting', 'Auto Response Email', 'manage_options', 'book_setting', array($this, 'dsadminbooking'));
		 add_submenu_page( 'ds-booked', 'Payment Gateway', 'Payment Gateway', 'manage_options', 'book_payment', array($this, 'dsadminbooking'));
		 add_submenu_page( 'ds-booked', 'Insight', 'Insight', 'manage_options', 'bookinginsight', array($this, 'dsadminbooking'));

	}	
	function dsadminbooking(){
		
		
		switch($_GET['page']){
			case "book_setting":
				require_once(realpath(dirname(__FILE__)) . '/includes/setting.php');	 
				break;
			case "ds-booked":
				if(isset($_GET['view'])){
					 echo "<div style='background:#fff; position: relative; width: 94%; margin: 0 auto; margin-left: 0; padding-top: 20px; padding: 10px; margin-top: 37px; overflow:auto;'>";
					require_once(realpath(dirname(__FILE__)) . '/includes/body2.php');
					echo "</div>";
				}else{
					echo "<div style='background:#fff; position: relative; width: 94%; margin: 0 auto; margin-left: 0; padding-top: 20px; padding: 10px; margin-top: 37px; overflow:auto;'>";
					require_once(realpath(dirname(__FILE__)) . '/includes/body1.php');
					echo "</div>";
				}
				break;
			case "book_payment":
				require_once(realpath(dirname(__FILE__)) . '/includes/paymentgateway.php');
				break;
			case "bookinginsight":
				require_once(realpath(dirname(__FILE__)). '/includes/insights.php');
				break;
			default:
				break;
			
		}	
	} 
	
	function dsbookinghead(){
		switch($_GET['page']){
			case "ds-booked":	
				wp_register_style('dsbootstrap', plugins_url() . '/dsbooking/admin/css/bootstrap.min.css', false, '1.0.0' );
				wp_enqueue_style('dsbootstrap');
				wp_register_script('dsjquery', plugins_url() . '/dsbooking/admin/js/jquery.js');
				wp_enqueue_script('dsjquery');
				wp_register_script('dsjquery', plugins_url() . '/dsbooking/admin/js/bootstrap.min.js');
				wp_enqueue_script('dsjquery');
				wp_register_script('dsangular', plugins_url() . '/dsbooking/admin/js/angular.min.js');
				wp_enqueue_script('dsangular');
				wp_register_script('dsdrpagination', plugins_url() . '/dsbooking/admin/js/dirPagination.js');
				wp_enqueue_script('dsdrpagination');
				wp_register_script('dsapps', plugins_url() . '/dsbooking/admin/js/app.js');
				wp_enqueue_script('dsapps');
			break;
			case "book_setting":
				wp_register_style('dsbootstrap', plugins_url() . '/dsbooking/admin/css/bootstrap.min.css', false, '1.0.0' );
				wp_enqueue_style('dsbootstrap');
			break;	
			case "book_payment":
				wp_register_style('dsbootstrap', plugins_url() . '/dsbooking/admin/css/bootstrap.min.css', false, '1.0.0' );
				wp_enqueue_style('dsbootstrap');
			break;	
			case "bookinginsight":
				wp_register_style('dsbootstrap', plugins_url() . '/dsbooking/admin/css/bootstrap.min.css', false, '1.0.0' );
				wp_enqueue_style('dsbootstrap');
			default: 
				break;
		}	
	}
	

	
	function dstourmetabox() {

		  add_meta_box('smashing-post-class',esc_html__( 'Information', 'example' ), array($this, 'smashing_post_class_meta_box'), 'dsdirectory', 'side',  'default');
	}
	
	function smashing_post_class_meta_box(){
			global $wpdb;
			
			autocompleteaddress();
			$custom = get_post_custom($post->ID);
		
			$Adult								= $custom['Adult'][0];
			$Child								= $custom['Child'][0];
			$HourDuration						= $custom['HourDuration'][0];
			$MinuteDuration						= $custom['MinuteDuration'][0];
			$dsdatestart						= $custom['dsdatestart'][0];
			$street_number						= $custom['street_number'][0];
			$route								= $custom['route'][0];
			$locality							= $custom['locality'][0];
			$administrative_area_level_1		= $custom['administrative_area_level_1'][0];
			$postal_code						= $custom['postal_code'][0];
			$country							= $custom['country'][0];
			$dsplace 							= $custom['dsplace'][0];
			$dsAuthor 							= $custom['dsAuthor'][0];
			$dslat								= $custom['dslat'][0];	
			$dslong								= $custom['dslong'][0];				
			$email								=$custom['email'][0];
			$contact							=$custom['contact'][0];
			$socialcontact						=$custom['socialcontact'][0];
			$website							=$custom['website'][0];
			$about								=$custom['about'][0];
			$statement							=$custom['statement'][0];
			$experience							=$custom['experience'][0];
			$education							=$custom['education'][0];
			$honoursandawards					=$custom['honoursandawards'][0];
			?>
			<style>
			
			.information input[type=text], input[type=email]{
				width:200px;  
			}
			.more-info textarea{
				width:500px;
				height: 100px;
			}
				</style>	
		<div class="container">
				<div class="address-information">
				<h3>Address Information</h3>
				<div class="row">
      <div class="col-25">
        <label for="street_number"><em>Street Number(optional)</em></label>
      </div>
      <div class="col-75">
        <input type="text" id="street_number" name="street_number" value="<?php echo $street_number; ?>">
      </div>
		</div>
		<div class="row">
		<div class="col-25">
		<label for="administrative_area_level_1"><em>Locality</em></label></div>
		<div class="col-75">
		<input type="text" id="administrative_area_level_1" name="administrative_area_level_1" value="<?php echo $administrative_area_level_1; ?>">
		</div>
		<div class="row">
		<div class="col-25">
		<label for="country"><em>Country</em></label>
		<div class="col-75">
		<input type="text" id="country" name="country" value="<?php echo $country; ?>">
		</div>
		</div>
		</div>
</div>
	</div>
			<div class="information">
			<h3>Contact Information</h3>
    <div class="row">
      <div class="col-25">
        <label for="email"><em>Email</em></label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
      </div>
    </div>
		<div class="row">
      <div class="col-25">
        <label for="contact"><em>Contact Number</em></label>
      </div>
      <div class="col-75">
        <input type="text" id="contact" name="contact" value="<?php echo $contact; ?>">
      </div>
    </div>
		<div class="row">
      <div class="col-25">
        <label for="socialcontact"></em>Social Contact</em></label>
      </div>
      <div class="col-75">
        <input type="text" id="socialcontact" name="socialcontact" value="<?php echo socialcontact; ?>">
      </div>
    </div>
		<div class="row">
      <div class="col-25">
        <label for="website"><em>Website</em></label>
      </div></div>
      <div class="col-75">
        <input type="text" id="website" name="website" value="<?php echo $website; ?>">
      </div>
			</div>
		<div class="more-info">
		<h3>Additional Information</h3>
	  	<div class="row">
      <div class="col-25">
        <label for="about"><em>About</em></label>
      </div>
      <div class="col-75">
        <textarea name="about"><?php echo $about; ?></textarea>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="statement"><em>Statements</em></label>
      </div>
      <div class="col-75">
        <textarea name="statement"><?php echo $statement; ?></textarea>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="experience"><em>Experience</em></label>
      </div>
      <div class="col-75">
        <textarea name="experience"><?php echo $experience; ?></textarea>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="education"><em>Education</em></label>
      </div>
      <div class="col-75">
        <textarea name="education"><?php echo $education; ?></textarea>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="honorsandrewards">Honors And Rewards</label>
      </div>
      <div class="col-75">
        <textarea name="honoursandawards"><?php echo $honoursandawards; ?></textarea>
      </div>
    </div>
	  </div>
	</div>
						
			<?php 
		
	}
	function savedsform($post_id, $post, $update ){
														
			if(isset($_POST['street_number'])){
				$street_number = sanitize_text_field($_POST['street_number']);
				update_post_meta($post_id, 'street_number',$street_number);
			}
			
			if(isset($_POST['route'])){
				$route = sanitize_text_field($_POST['route']);
				update_post_meta($post_id, 'route',$route);
			}
			
			if(isset($_POST['locality'])){
				$locality = sanitize_text_field($_POST['locality']);
				update_post_meta($post_id, 'locality',$locality);
			}
		
			if(isset($_POST['administrative_area_level_1'])){
				$administrative_area_level_1 = sanitize_text_field($_POST['administrative_area_level_1']);
				update_post_meta($post_id, 'administrative_area_level_1',$administrative_area_level_1);
			}
			
			if(isset($_POST['postal_code'])){
				$postal_code = sanitize_text_field($_POST['postal_code']);
				update_post_meta($post_id, 'postal_code',$postal_code);
			}
			
			if(isset($_POST['country'])){
				$country = sanitize_text_field($_POST['country']);
				update_post_meta($post_id, 'country',$country);
			}
			
			if(isset($_POST['dslat'])){
				$dslat = sanitize_text_field($_POST['dslat']);
				update_post_meta($post_id,'dslat', $dslat);	
			}

			if(isset($_POST['dslong'])){
				$dslong = sanitize_text_field($_POST['dslong']);
				update_post_meta($post_id,'dslong', $dslong);	
			}	
		
			if(isset($_POST['email'])){
				$email = sanitize_text_field($_POST['email']);
				update_post_meta($post_id,'email', $email);	
			}	
		
			if(isset($_POST['contact'])){
				$contact = sanitize_text_field($_POST['contact']);
				update_post_meta($post_id,'contact', $contact);	
			}	
		
			if(isset($_POST['socialcontact'])){
				$socialcontact = sanitize_text_field($_POST['socialcontact']);
				update_post_meta($post_id,'socialcontact', $socialcontact);	
			}	
		
			if(isset($_POST['website'])){
				$website = sanitize_text_field($_POST['website']);
				update_post_meta($post_id,'website', $website);	
			}	
		
			if(isset($_POST['about'])){
				$about = sanitize_text_field($_POST['about']);
				update_post_meta($post_id,'about', $about);	
			}	
		
			if(isset($_POST['statement'])){
				$statement = sanitize_text_field($_POST['statement']);
				update_post_meta($post_id,'statement', $statement);	
			}	
		
			if(isset($_POST['experience'])){
				$experience = sanitize_text_field($_POST['experience']);
				update_post_meta($post_id,'experience', $experience);	
			}	
		
			if(isset($_POST['honoursandawards'])){
				$honoursandawards = sanitize_text_field($_POST['honoursandawards']);
				update_post_meta($post_id,'honoursandawards', $honoursandawards);	
			}	
		
			
	;				
	}
	
	function dsemailsetting(){
		register_setting( 'dsbooking-settings-group', 'dsfromemail' );
		register_setting( 'dsbooking-settings-group', 'dsbookingemailsubject' );
		register_setting( 'dsbooking-settings-group', 'Messagetoclients' );		
	}
	
	function dspaymentsetting(){
		register_setting( 'dsbooking-paymentsettings-group', 'dsclientid' );
		register_setting( 'dsbooking-paymentsettings-group', 'dsclientsecret' );	
		register_setting( 'dsbooking-paymentsettings-group',  'cenposmerchantid');
		register_setting( 'dsbooking-paymentsettings-group',  'dspaypal');
		register_setting( 'dsbooking-paymentsettings-group',  'dscenpos');
	
	}
	function DsTour() {
		  register_post_type( 'dsdirectory',
			array(
			  'labels' => array(
				'name' => __( 'DSDIRECTORY' ),
				'singular_name' => __( 'DSDIRECTORY' )
			  ),
			  'public' => true,
			  'has_archive' => true,
			  'supports' => array('thumbnail','title','editor'),
		
			)
		  );
	
	}
	
	function dstourtaxonomies() {
		 $labels = array(
			'name' => _x( 'Language', 'taxonomy general name' ),
			'singular_name' => _x( 'Language', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Topics' ),
			'all_items' => __( 'All Topics' ),
			'parent_item' => __( 'Parent Language' ),
			'parent_item_colon' => __( 'Parent Language:' ),
			'edit_item' => __( 'Edit Language' ), 
			'update_item' => __( 'Update Language' ),
			'add_new_item' => __( 'Add New Language' ),
			'new_item_name' => __( 'New Topic Language' ),
			'menu_name' => __( 'Language' ),
			'hide_empty' => false,
		  );    
		
		 register_taxonomy('dslanguages',array('dsdirectory'), array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'topic' ),
		));
 
	}
	
	public function get_custom_post_type_template($single_template) {
     global $post;

      if($post->post_type == 'dsdirectory') {
			$single_template = DSPATH . '/view/payform.php';
	  }
	   if($post->post_type == 'dsdirectory' && $_GET['edit']==1) {
			$single_template = DSPATH . '/view/editprofile.php';
	  }
	  
	  
		return $single_template;
	}
	
	
	
	function thankyou(){
		if(isset($_SESSION['infoReceipt']) && !empty($_SESSION['infoReceipt'])){
		?>
		
			
				<script>
				window.onload = function() {
						var myCanvas = document.getElementById('myCanvas');
						var ctx = myCanvas.getContext('2d');
						ctx.fillStyle = "#FFFFFF";
						ctx.fillRect(0, 0, myCanvas.width, myCanvas.height);
						var logo = new Image;
						var img = new Image;

						img.onload = function(){
						 
						  ctx.drawImage(img, myCanvas.width - 100,30,100,100); // Or at whatever offset you like
						};
						img.src = "http://gibraltartoursandtaxiservice.com/wp-content/plugins/dsbooking/view/qrcode.php";
						ctx.font = "bold 12px Arial";
						ctx.fillStyle="#000000";
						ctx.beginPath();
						ctx.beginPath();
						ctx.moveTo(0, 150);
						ctx.lineTo(myCanvas.width, 150);
						ctx.stroke();
						var newLine = 150;

					
						var dot2 ="";
						for(var i = 0; i<myCanvas.width; i++){
							 dot2 += ".";
						}
						ctx.fillText(dot2,0,320);
						ctx.fillText("Total Amount: <?php echo $_SESSION['total']; ?> ",10,340);
				};
				</script>
				
		<?php 
			$to = $emailto; 
			$subject = "Email Receipt";
			$count2 = 0;
			$htmlContent = '
				<html>
				<head>
					<title>Thank you</title>
				</head>
				<body>
					<h1>Thanks you for request!</h1>
					
					<table cellspacing="0" style="border: 2px dashed #FB4314; width: 300px; height: 200px;">';
					
				
							foreach($_SESSION['infoReceipt'] as $key => $value){ 
							 $count2++; 
						
								if($count2 <=4){
									if($key == 'field1'){
											$htmlContent .= '<tr><th>FullName:</th><td>' .$value. '</td> </tr>';
									}
									if($key == 'field2'){
											$htmlContent .= '<tr><th>Tour Type:</th><td>' .$value. '</td> </tr>';
									}
									if($key == 'field3'){
											$htmlContent .= '<tr><th>Price:</th><td>' .$value. '</td> </tr>';
									}
									if($key == 'field4'){
											$htmlContent .= '<tr><th>Date:</th><td>' .$value. '</td> </tr>';
									}
										$htmlContent .= '<tr><th>' . $key . ':</th><td>' .$value. '</td> </tr>';
									
								}	
							}
							
						
						
				$htmlContent .= '</table></body></html>';

				// Set content-type header for sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// Additional headers
				$headers .= 'From: gibraltartoursandtaxiservice<admin@gibraltartoursandtaxiservice.com>' . "\r\n";
				// Send email
				if(wp_mail( $to, $subject, $htmlContent, $headers)):
					$successMsg = '<p style="text-align:center">Thank you for your order, we will be in touch with you shortly.</p>';
					$_SESSION['infoReceipt'] = "";
					session_destroy();
				else:
					$errorMsg = '<p style="text-align:center">Email sending fail.</p>';
				endif;
			
			
			?>
				<div style="float:left; background:#fff; border-top:4px solid #5b9b3c; padding:0; padding-bottom:20px; margin-bottom:40px; width:700px;">
				<h3 style="text-align:center; background:#6AB446; padding:10px; margin:0; color:#fff;">Your Receipt</h3>
				<?php echo $successMsg;?>
				<canvas id="myCanvas" style="margin-top:-20px;  margin-left:20px; display:block; border-top: #6AB446 solid 2px; margin-bottom:20px; " width="650" height="357">
				Your browser does not support the HTML5 canvas tag.
				</canvas>
				
				<!--<button style="margin:0 auto; display:block;">Save your receipt</button>-->
				</div>
			<?php 
		}else{
			header ("Location:" . get_home_url());
			
		}
	}
	
	
	function dsdirectoryloop(){
		 ob_start();
			echo "<div style='width:90%; margin:0 auto;'>";
			$loop = new WP_Query( array( 'post_type' => 'dsdirectory','posts_per_page' => 3) );
			if ( $loop->have_posts() ) :
		
				while ( $loop->have_posts() ) : $loop->the_post();
					$custom 			= get_post_custom($post->ID);
					$email								= $custom['email'][0];
					$contact							= $custom['contact'][0];
					$socialcontact 						= $custom['socialcontact'][0];
					$website							= $custom['website'][0];
					$about								= $custom['about'][0];
					$statement 							= $custom['statement'][0];
					$language 							= $custom['language'][0];
					$experience 						= $custom['experience'][0];
					$education 							= $custom['education'][0];
					$honoursandawards 					= $custom['honoursandawards'][0];
					$locality							= $custom['locality'][0];
					$administrative_area_level_1		= $custom['administrative_area_level_1'][0];
					$postal_code						= $custom['postal_code'][0];
					$country							= $custom['country'][0];
					$street_number						= $custom['street_number'][0];
					?>
					
				
					<div style="float:left; width:250px; margin:10px;" class="doc-featurelist item">
						<figure class="doc-featureimg">
							<a class="doc-featuredicon" href="javascript:;">
								<i class="fa fa-bolt"></i>featured</a> 
								<a class="doc-featuredicon doc-verfiedicon" href="javascript:;">
								<i class="fa fa-shield"></i>Verified</a> 
								<a class="list-avatar" href="<?php echo get_the_permalink(); ?>">
									<?php  the_post_thumbnail( 'medium_large' );  ?>
								</a> 

						</figure>
						<div class="doc-featurecontent">
							<div class="doc-featurehead">
								<a class="doc-favoriteicon doc-notfavorite add-to-fav" data-view_type="v2" data-wl_id="333" href="javascript:;"><i class="fa fa-heart"></i></a>
								<h2><a class="list-avatar" href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
								<ul class="doc-matadata">
									<li>
										<a class="do-like-me" data-like_id="333" href="javascript:;"><i class="fa fa-thumbs-up"></i>9</a>
									</li>
									<li><span class="doc-stars"><span style="width:70%"></span></span></li>
								</ul>
							</div>
							<ul class="doc-addressinfo">
								<li>
									<i class="fa fa-map-marker"></i> 
									<address>
										<?php echo $street_number ." " .  $locality ." " . $administrative_area_level_1 ." ". $postal_code . " " . $country ;?>
									</address>
								</li>
								<li><i class="fa fa-phone"></i><span><?php echo $contact;?></span></li>
								<li>
									<i class="fa fa-envelope-o"></i><a href="mailto:<?php echo $email;?>?subject:Hello"><?php echo $email;?></a>
								</li>
								
							</ul>
						</div>
					</div>
						
					 
					<?php 
				endwhile;
			
			endif;
			wp_reset_postdata();
			echo "</div>";
		
			

		 return ob_get_clean();
	}
	
	
	
}