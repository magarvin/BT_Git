<?php

session_start();

$submerchid = $_SESSION["submerchid"];

$nonce = $_POST['payment_method_nonce'];

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";


require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Transaction::sale([
'merchantAccountId' => $submerchid,
'amount' => '10.00',
'paymentMethodNonce' => $nonce,
'serviceFeeAmount' => "1.00"
]);

echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";

session_destroy(); 

?>