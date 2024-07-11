<?php

require_once "./entities/Paypal/Paiement.class.php";
require_once "./entities/Stripe/Paiement.class.php";

use \entities\Paypal\Paiement as PaypalPaiement;
use \entities\Stripe\Paiement;

$paiementPaypal = New PaypalPaiement() ;
$paiementStripe = New Paiement();


var_dump($paiementPaypal) . "<br>";
var_dump($paiementStripe) . "<br>";