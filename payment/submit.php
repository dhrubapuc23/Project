<?php

require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>50000,
		"currency"=>"BDT",
		"description"=>"Payment with stripe",
        "source"=>$token,
	));

	echo "<pre>";
	print_r($data);

	$tx_id = $data['id'];
}

?>