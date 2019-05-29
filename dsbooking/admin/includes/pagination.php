<?php 
require_once('../../../../../wp-load.php');
global $wpdb;
$SQL = "SELECT * FROM wp_booking2";
$number_of_pages =  count($wpdb->get_results($SQL));
$limit = 5;
$total_pages = ceil($number_of_pages / $limit);  
echo $total_pages;
?>