<?php

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";


require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Subscription::create([
  'paymentMethodToken' => 'c3bd7w',
  'planId' => 'plan1'
]);


echo $result->subscription->id;

echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";

?>