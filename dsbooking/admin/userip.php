<?php 
// Get IP address
$ip_address = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');


// Get JSON object
$jsondata = file_get_contents("http://timezoneapi.io/api/ip/?" . $ip_address);

// Decode
$data = json_decode($jsondata, true);

// Request OK?
if($data['meta']['code'] == '200'){

    // Example: Get the city parameter
    echo "City: " . $data['data']['city'] . "<br>";

    // Example: Get the users time
    ///echo "Time: " . $data['data']['datetime']['date_time_txt'] . "<br>";
	//echo "<pre>";
	//echo var_dump($data['data']);
	//echo "</pre>";
	//echo  $data['data']['datetime']['date_time'];
	//$YYYYMMDD = str_replace('/', '-', $data['data']['datetime']['date_time']);
	//Convert it into a timestamp.
	//$timestamp = strtotime($YYYYMMDD);
 
		//Convert it to DD-MM-YYYY
	$newDate = date("Y-m-d", strtotime($data['data']['datetime']['date_time']));
	
	$today = $newDate .' '. $data['data']['datetime']['time'];
}	
?>