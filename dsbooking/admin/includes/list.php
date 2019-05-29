<?php 

require_once('../../../../../wp-load.php');

global $wpdb;
$SQL='SELECT * FROM wp_booking2 ORDER BY ID ASC'; 
header('Content-Type: application/json');
echo json_encode($wpdb->get_results($SQL));