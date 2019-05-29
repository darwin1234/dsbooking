<?php 
/*
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
*/
session_start();
require 'PayPal/vendor/autoload.php';
require __DIR__.'/pmethod/paypal.php';
require __DIR__.'/pmethod/cenpos.php';

class dsPaymentGateway{
	
	private $pmethods;
	private $dsClientID1;
	private $FIRSTNAMEERR;
	private $LASTNAMEERR; 
	private $EMAILERR;
	private $NOOFADULTSERR;
	private $NOOFCHILDRENERR;
	private $CONTACTNUMBERERR;
	private $FIELD4ERR;
	private $PGATEWAYMETHODERR;

	
	function pmt($pgateway){

		if($pgateway == 1 && esc_attr( get_option('dspaypal')) == 1){
			
			$dsclientid = esc_attr( get_option('dsclientid'));
			$dsclientsecret	= esc_attr( get_option('dsclientsecret'));
		
			$this->pmethods = new \PayPal\Rest\ApiContext(
				new \PayPal\Auth\OAuthTokenCredential(
				$dsclientid,
				$dsclientsecret
				)
			);
			
		}
		if($pgateway == 2 && esc_attr( get_option('dscenpos')) == 2){
			
			$this->pmethods = esc_attr( get_option('cenposmerchantid') );
		}
		
		return $this->pmethods;

	}
	
	function bookingformsend(){
		global $wpdb;
	
		/*if (isset($_POST['bookbow'])) {
				//add_action('wp_footer', array($this,'dsError'));
				// firstname
				$firstname = test_input($_POST["firstname"]);
				if(empty($firstname)) {$this->FIRSTNAMEERR = "firstname is required";}
				if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){$this->FIRSTNAMEERR = "Only letters and white space allowed";}
				
				// lastname
				$lastname = test_input($_POST["lastname"]);
				if(empty($lastname)) {$this->LASTNAMEERR = "lastname is required";}
				if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){$this->LASTNAMEERR = "Only letters and white space allowed"; }
				
				// email
				$email = $_POST["email"];
				if(empty($email)) {$this->EMAILERR = "Email is required";} 
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {$this->EMAILERR = "Invalid email format";}
				
				// noofadults  
				$noofadults = test_input($_POST["noofadults"]);
				if(empty($noofadults)){$this->NOOFADULTSERR = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$noofadults)) {$this->NOOFADULTSERR= "Invalid Number format"; }
				
				// noofchildren  
				
				$noofchildren = test_input($_POST["noofchildren"]);
				if(empty($noofchildren)){$this->NOOFCHILDRENERR = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$noofchildren)) {$this->NOOFCHILDRENERR = "Invalid Number format"; }
				
				//contactnumber
				$contactnumber = test_input($_POST["contactnumber"]);
				if(empty($contactnumber)){$this->CONTACTNUMBERERR = "Number of person is required";}
				if(!preg_match("/^[0-9]+$/",$contactnumber)) {$this->CONTACTNUMBERERR = "Invalid Number format"; }
				// Date
				$field4 = $_POST["field4"];
				$field4 = date("Y-m-d", strtotime($field4));
				if(empty($field4)){$this->FIELD4ERR = "Date is required";}
				else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$field4)) {$field4Err = "Invalid Date format";}
				else if(strtotime($field4) < strtotime(date('Y-m-d'))){$this->FIELD4ERR="Date must not be previous day";}
				
				
				$pgatewaymethod = test_input($_POST["pmethod"]);
				if(empty($pgatewaymethod)){$this->PGATEWAYMETHODERR = "Please Select Payment Gateway";}
				if(!preg_match("/^[0-9]+$/",$pgatewaymethod)) {$this->PGATEWAYMETHODERR = "Invalid Number format"; }
				
				
				if($this->FIRSTNAMEERR==""  && $this->LASTNAMEERR == "" &&  $this->EMAILERR =="" &&  $this->NOOFADULTSERR  =="" && $this->FIELD4ERR =="" && $this->NOOFCHILDRENERR == ""){
						$adultTotal 		= (int) $_SESSION['Adult'] * $noofadults;
						$childTotal 		= (int) $_SESSION['Child'] * $noofchildren;
						$Alltotal 			= (int)($adultTotal + $childTotal);
						$noofpersonAll		= (int)$noofadults + $noofchildren;
						$data = array('firstname' => $firstname, 'lastname'	=> $lastname,'email' => $email, 'adultprice'=>$_SESSION['Adult'], 'childprice'=> $_SESSION['Child'] ,'noofadults' =>	$noofadults,'noofchildren' =>	$noofchildren, 'bookingdate' => $field4, 'tourname' => $_SESSION['tourtitle'], 'total' => $Alltotal, 'message' => strip_tags($_POST['message']));
						$_SESSION['infoReceipt'] = $data;
						
						$wpdb->insert('wp_booking2',array('firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'noofadults' => $noofadults,'noofchildren' =>	$noofchildren, 'contactno' => $contactnumber , 'tourname' => $_SESSION['tourtitle'], 'bookingdate' => $field4, 'date' => dsDate(), 'total' => $Alltotal, 'message' =>  $_POST['message']));
						$lasID = $wpdb->insert_id;
						$_SESSION['qr_code'] = $lasID;
						
						
					
						if($pgatewaymethod == 1){
							
								$dsclientid = esc_attr( get_option('dsclientid'));
								$dsclientsecret	= esc_attr( get_option('dsclientsecret'));
								
								$test = new \PayPal\Rest\ApiContext(
										new \PayPal\Auth\OAuthTokenCredential(
										$dsclientid,
										$dsclientsecret
										)
								);
								
								$t->paypalparams("Test 2",50,2,200);
								$t->PaypalExecute($test);
								
								
							//$dsclientid = esc_attr( get_option('dsclientid'));
							//$dsclientsecret	= esc_attr( get_option('dsclientsecret'));
							
							//echo var_dump($this->pmt($pgatewaymethod));
							
							
							//echo $dsclientid . "    " . $dsclientsecret;
							//echo "asdasdasd";
							//echo var_dump($this->pmt($pgatewaymethod));
							//$t = new dsPaypal();
							//$t->paypalparams("Test 2",50,2,200);
							//$t->PaypalExecute($this->pmt($pgatewaymethod));
						
						}
						if($pgatewaymethod == 2){
							$t = new dsCenpos();
							$t->cenposparams($firstname ." ".$lastname, $email,$noofpersonAll,  $field4,$Alltotal,md5($lasID), "asdasdasd");
							$t->CenposExecute($this->pmt($pgatewaymethod));
							
						
						}
						
				}else{
					
					
				}	
			
		
		}*/
		echo "asdasdasd";	
		die();
	} 
	
	function dsError(){
		
		?>
			<script type="text/javascript">
				document.getElementById("FIRSTNAMEERR").innerHTML ="<?php echo $this->FIRSTNAMEERR . $this->tsss; ?>";
				document.getElementById("LASTNAMEERR").innerHTML ="<?php echo $this->LASTNAMEERR . $this->tsss2; ?>";
				document.getElementById("EMAILERR").innerHTML ="<?php echo $this->EMAILERR; ?>";
				document.getElementById("NOOFADULTSERR").innerHTML ="<?php echo $this->NOOFADULTSERR; ?>";
				document.getElementById("NOOFCHILDRENERR").innerHTML ="<?php echo $this->NOOFCHILDRENERR; ?>";
				document.getElementById("CONTACTNUMBERERR").innerHTML ="<?php echo $this->CONTACTNUMBERERR; ?>";
				document.getElementById("FIELD4ERR").innerHTML ="<?php echo $this->FIELD4ERR; ?>";
				document.getElementById("PGATEWAYMETHODERR").innerHTML ="<?php echo $this->PGATEWAYMETHODERR; ?>";
			</script>
			
		<?php 
		
	
		
	}

}

