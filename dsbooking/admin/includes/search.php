<?php

require_once('../../../../../wp-load.php');

global $wpdb;

$SQL = "SELECT * FROM wp_booking2  WHERE firstname LIKE '%{$_POST['search']}%' ORDER BY ID DESC LIMIT 20";
header('Content-Type: application/json');
echo json_encode($wpdb->get_results($SQL));