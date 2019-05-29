<?php
require_once('../pgateway/CenposConnector/CenposConnector.php');
CenposConnector::Init();
	$Cenpos = new CenposConnector();
	$Request = new AddCryptoTokenRequest();
	$Request->UserId = "ewilliams";
	$Request->Password = "Pl@ntation869";
	$Request->MerchantId = "400000467";
    $Response = $Cenpos->AddCryptoToken($Request); 
	echo var_dump($Response);
?>