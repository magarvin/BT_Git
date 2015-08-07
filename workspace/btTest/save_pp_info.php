<?php
require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";
$clientToken = Braintree_ClientToken::generate();
?>

<form id="checkout" method="post" action="https://mybt-magarvin.c9.io/btTest/create_paymentmethod.php">
  <div id="payment-form"></div>
    <input type="submit" value="Continue">
</form>

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>

<script>
  braintree.setup("<?php echo $clientToken?>",
    "dropin", {container: "payment-form",
    });
</script>