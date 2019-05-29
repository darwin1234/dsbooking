<?php
/*
   Plugin Name: Booking System By Darwin
   Plugin URI: #
   Description: Simple Booking System
   Version: 1.0
   Author: Darwin Sese
   Author URI: #
   License: GPL2
*/
   
/*   
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/

define("DSPATH", plugin_dir_path(__FILE__));
define("pluginsurl", plugins_url() . '/dsbooking');

require_once(DSPATH . 'define.php');   
require_once(DSPATH . 'admin/admin.php');   
require_once(DSPATH . 'admin/view.php');   
require_once(DSPATH . 'admin/dsscripts.php');  
require_once(DSPATH . 'pgateway/init.php');
require_once(DSPATH . 'utilities/utilities.php');
require_once(DSPATH . 'view/register.php');
require_once(DSPATH . 'view/search.php');
require_once(DSPATH . 'view/lists.php');

session_start();
$_SESSION['post_type'];   
$_SESSION['infoReceipt'];
$_SESSION['qr_code'];
$_SESSION['total'];


class DSPLUGIN{
	
	public function __construct(){
	
		add_action('init', array(new dsVariable,'dsVar'));
		add_action('wp_ajax_bookingformsend', array(new dsPaymentGateway,'bookingformsend'));
		/*add_action('admin_menu', array(new DBAdminMenu,'wpautop_control_menu'));*/
		add_action( 'admin_enqueue_scripts', array(new DBAdminMenu,'admin_head' ));
		add_action( 'init', array(new DBAdminMenu,'DsTour'));
		add_action( 'init', array(new DBAdminMenu,'dstourtaxonomies'));
		add_action( 'admin_enqueue_scripts', array(new DBAdminMenu,'dsbookinghead'));
		add_action('wp_head', array($this,'dscustomcss'));
		add_shortcode('tourList', array(new Booking,'tourList'));
		add_shortcode('receipt', array(new Booking,'receipt'));
		add_shortcode('thankyou', array(new DBAdminMenu,'thankyou'));
		add_shortcode('dsregform', array(new dsregister,'dsregform'));
		add_shortcode('dssearch', array(new dssearchdirectory,'dssearch'));
		add_shortcode('dslists', array(new dslists, 'lists'));
	
		add_action( 'admin_enqueue_scripts', array( new DSCRIPTS, 'dscript'));
		add_filter('single_template', array(new DBAdminMenu ,'get_custom_post_type_template' ));
		add_action( 'add_meta_boxes', array(new DBAdminMenu, 'dstourmetabox' ));
		add_action( 'save_post',  array(new DBAdminMenu,'savedsform'), 10, 3 );
		
		//call register settings function
		add_action( 'admin_init', array(new DBAdminMenu, 'dsemailsetting'));
		add_action( 'admin_init', array(new DBAdminMenu, 'dspaymentsetting'));
		
		add_shortcode('dsdirectoryloop', array(new DBAdminMenu,'dsdirectoryloop'));
		//add_shortcode('dsregform', array(new dsregister,'dsregform'));
		//add_action( 'wp_ajax_bookingformsend',array($this, 'bookingformsend' ));
		add_action( 'wp_ajax_nopriv_bookingformsend_ajax_request',array($this, 'bookingformsend' ));
		add_action( 'wp_enqueue_scripts', array($this,'my_enqueue' ));
		add_action( 'wp_head', array($this,'myplugin_add_registration_fields'),10,1);
		
		
	}	
	
	function my_enqueue() {
	
		wp_enqueue_script( 'ajax-script', plugins_url() . '/dsbooking/resources/js/bookingformsend.js', array('jquery') );
		
		wp_localize_script( 'ajax-script', 'bookingformsend', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
		
	}
	
	
	
	
	function dscustomcss(){
		
		?>
		
		  <link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/dsbooking/resources/custom.css">
		<?php 
		
	}
	

	function myplugin_add_registration_fields() {
	

	}
 	
}

new DSPLUGIN;