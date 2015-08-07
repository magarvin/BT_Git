<html>
<?php

//print_r($_REQUEST);

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";


require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";
$nonce = $_POST['payment_method_nonce'];
$result = Braintree_Transaction::sale(array(
"amount" => trim($_POST['amount']),
"paymentMethodNonce" => trim($nonce),

));
if ($result->success) {
print_r("Success ID: " . $result->transaction->id);
echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";
} else {
print_r("Error Message: " . $result->message);
echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
echo "</pre>";
}


?>

<form method="post" action="https://mybt-magarvin.c9.io/btTest/submit_for_settlement.php">

    Trans ID:<input type="text" name = "id" value="<?php echo $result->transaction->id; ?>">
  <input type="submit" value="Submit for settlement">
</form>

<form method="post" action="https://mybt-magarvin.c9.io/btTest/void.php">

    Trans ID:<input type="text" name = "id" value="<?php echo $result->transaction->id; ?>">
  <input type="submit" value="Void">
</form>

</html>