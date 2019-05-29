<?php

$custom_url = 'jdomingo';

$default_product = '135b34c7';

// DO NOT EDIT BELOW THIS LINE
$string=strtolower(trim(strip_tags($_SERVER["QUERY_STRING"])));
if(preg_match("/register/i",$string)) {
	header("Location: https://payblue.com/m/affiliates/register/" .$custom_url);
	exit;
}
elseif(preg_match("/affiliatesignup/i",$string)) {
	header("Location: https://payblue.com/m/affiliates/register/" .$custom_url);
	exit;
}
elseif(preg_match("/affiliates/i",$string)){
	header("Location: https://payblue.com/m/affiliates/login/" .$custom_url);
	exit;
}
elseif(preg_match("/affiliate/i",$string)){
	header("Location: https://payblue.com/m/affiliates/login/" .$custom_url);
	exit;
}
elseif(preg_match("/affiliatelogin/i",$string)){
	header("Location: https://payblue.com/m/affiliates/login/" .$custom_url);
	exit;
}
elseif(preg_match("/customers/i",$string)) {
	header("Location: https://payblue.com/customer/login/" .$custom_url);
	exit;
}

if(isset($_REQUEST["af"]) && $_REQUEST["af"] != '') {
	$affiliate = $_REQUEST["af"];
}
elseif(isset($_REQUEST["AF"]) && $_REQUEST["AF"] != '') {
	$affiliate = $_REQUEST["AF"];
}
elseif(isset($_REQUEST["Af"]) && $_REQUEST["Af"] != '') {
	$affiliate = $_REQUEST["Af"];
}
elseif(isset($_REQUEST["aF"]) && $_REQUEST["aF"] != '') {
	$affiliate = $_REQUEST["aF"];
}
elseif(isset($_GET['affid']) && $_GET['affid'] != '') {
	$affiliate = $_REQUEST['affid'];
}
elseif(isset($_GET['affiliateid']) && $_GET['affiliateid'] != '') {
	$affiliate = $_REQUEST['affiliateid'];
}
else {
	$affiliate = FALSE;
}

if($affiliate) {
	$affiliate = trim(strip_tags($affiliate));
	header("Location: https://payblue.com/l/" .$default_product .'/' .$affiliate);
	exit;
}