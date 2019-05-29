<?php
	$product = get_the_title();
	$price =  $Alltotal; 
	$shipping = 0;
	$total = $price + $shipping;
	$payer = new Payer();
	$payer->setPaymentMethod('paypal');
	$item = new Item();
	$item->setName($product)
		  ->setCurrency('USD')
		  ->setQuantity(1)
		  ->setPrice($price);
	$itemList = new ItemList();
	$itemList->setItems([$item]);
	$details = new Details();
	$details->setShipping($shipping)
			->setSubtotal($price);

	$amount	= new Amount();
	$amount->setCurrency('USD')
		   ->setTotal($total)
		   ->setDetails($details);
						
	$transaction = new Transaction();
	$transaction->setAmount($amount)
				->setItemList($itemList)
			    ->setDescription('Pay For Something Payment')
				->setInvoiceNumber(md5($lasID));
											
	$redirectUrls = new RedirectUrls();
	$redirectUrls->setReturnUrl('http://teamsolidak.com/wp/wp3/success/?paid=true')
				  ->setCancelUrl('http://teamsolidak.com/wp/wp3/success/?paid=false');
    $payment = new Payment();
	$payment->setIntent('sale')
			 ->setPayer($payer)
			 ->setRedirectUrls($redirectUrls)
			 ->setTransactions([$transaction]);
			  echo $payment;
	try{
		$payment->create($paypal);
	}catch(Exception $e)
	{
		die($e);	
	}
	$approvalUrl = $payment->getApprovalLink();
	header("location: {$approvalUrl}");