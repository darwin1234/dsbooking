<?php 
  /* 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
*/
session_start();
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
class dsPaypal{
	
	private $tourname;
	private $price;
	private $shipping;
	private $total;
	
	public function PaypalExecute($paypal){
		
		echo var_dump($paypal);
		/*$product = $this->tourname;
		//$price =  100; 
		$shipping = 0;
		$total = 100;
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');
		$item = new Item();
		$item->setName($product)
					  ->setCurrency('USD')
					  ->setQuantity(1)
					  ->setPrice((int)$this->price);
		$itemList = new ItemList();
		$itemList->setItems([$item]);
		$details = new Details();
		$details->setShipping($shipping)
				->setSubtotal((int)$this->price);
		
		$amount	= new Amount();
		$amount->setCurrency('USD')
			   ->setTotal((int)$this->price)
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
			echo "<pre>";
			die($e);	
			echo "</pre>";
		}
		$approvalUrl = $payment->getApprovalLink();
		header("location: {$approvalUrl}");	*/
	}
	
	public function paypalparams($tourname,$price,$shipping,$total){
		
		$this->tourname 	= $tourname;
		$this->price		= $price;
		$this->shipping		= $shipping;
		$this->total		= $total;
		
	}	
	
	
}					
