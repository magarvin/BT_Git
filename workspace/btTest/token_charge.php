<?php

//print_r($_POST);

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Transaction::sale([
  'amount' => '25.00',
  'paymentMethodToken' => $_POST["token"],
  'options' => [
    'submitForSettlement' => True
  ]
]);

echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";

?>