<html>
<?php

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";


require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Transaction::sale([
  'amount' => '10.00',
  //'paymentMethodNonce' => nonceFromTheClient,
  'customer' => [
    'id' => '84175363'
  ]
]);

echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";

?>


<form method="post" action="https://mybt-magarvin.c9.io/btTest/token_charge.php">

    Token:<input type="text" name = "token" value="<?php echo $token; ?>">
  <input type="submit" value="Charge Token">
</form>

</html>
