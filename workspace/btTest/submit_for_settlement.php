<html>
<?php

$id = $_POST["id"];

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Transaction::submitForSettlement($id);

    echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
 echo "</pre>";
 
 $result->transaction->id;
 
 

?>

<form method="post" action="https://mybt-magarvin.c9.io/btTest/refund.php">

    Trans ID:<input type="text" name = "id" value="<?php echo $result->transaction->id; ?>">
  <input type="submit" value="Refund"> //you need to wait for the transcation to settle
</form>

</html>