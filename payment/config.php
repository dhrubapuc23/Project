<?php
require('stripe-php-master/init.php');

$publishablekey="Primary key";
$secretkey="Secret Key";

\Stripe\Stripe::setApiKey($secretkey);
?>