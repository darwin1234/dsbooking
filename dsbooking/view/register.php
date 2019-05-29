<?php


class dsregister{
	function dsregform(){
		global $wpdb;
		if($_POST){
				$message ="";
			$username 		= $wpdb->escape($_POST['dsusername']);
			$email 			= $wpdb->escape($_POST['dsemail']);
			$password 		= $wpdb->escape($_POST['dspassword']); 
			$ConfPassword 	= $wpdb->escape($_POST['psw-repeat']);
			$contact 		= $wpdb->escape($_POST['dscontact']);
			$dssocial 		= $wpdb->escape($_POST['dssocial']);
			$website	 	= $wpdb->escape($_POST['dswebsite']);

			if(strpos($username, ' ') !== FALSE) {
				$error['username_space'] = "Username has Space";
			}
			if(empty($username)) {
				$error['username_empty'] = "Needed Username must";
			}
			if(username_exists($username)) {
				$error['username_exists'] = "Username already exists";
			}
			if(!is_email($email)) {
				$error['email_valid'] = "Email has no valid value";
			}
			if(email_exists($email)) {
				$error['email_existence'] = "Email already exists";
			}
			if(strcmp($password, $ConfPassword) !== 0) {
				$error['password'] = "Password didn't match";
			}
			if(count($error) == 0) {
			  $userid =  wp_create_user($username, $password, $email);
				echo "User Created Successfully";
				echo $userid;
				add_post_meta($userid,'dscontact', $_POST['dscontact']);
				add_post_meta($useid,'dssocial',  $_POST['dssocial']);
				add_post_meta($userid,'dswebsite', $_POST['dswebsite']);
				exit();
			}else{ $message = "there's something wrong during registration. please try again";}
} 
	?>
	
	<form method="POST" >
		<?php echo $message;?>
			<h1>Register</h1>		
			<label for="name"><b>Name</b></label>
			<input type="text" placeholder="Enter your Name" required name="dsname">
      
			<label for="username"><b>User Name</b></label>
			<input type="text" placeholder="Enter your User Name" required name="dsusername">
    
			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Enter your Email" required name="dsemail">
			
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter your Password" required name="dspassword">

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" required name="psw-repeat">
			
			<h3><strong>Additional Information</strong></h3>
			<label for="contact"><b>Contact No</b></label>
			<input type="text" placeholder="Enter your Contact Number" name="dscontact" >
			 
			<label for="social"><b>WhatsApp Contact (<em>Optional</em>)</b></label>
			<input type="text" placeholder="Enter your WhatsApp Id/Username" name="dssocial">

			<label for="website"><b>Website (<em>Optional</em>)</b></label>
			<input type="text" placeholder="Enter Your Website link" name="dswebsite">
			
			<input type="submit" name="submit" class="registerbtn" value="submit">
	</form> 
	<?php
	}
}
?>