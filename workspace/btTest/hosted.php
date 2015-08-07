<?php

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$clientToken = Braintree_ClientToken::generate();

//echo $clientToken;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Checkout</title>
  </head>
  <body>
    <form action="https://mybt-magarvin.c9.io/btTest/hosted_submit.php" id="my-sample-form">
	 
      <label for="card-number">Card Number</label>
      <div id="card-number"></div>
	    
      <label for="cvv">CVV</label>
      <div id="cvv"></div>

      <label for="expiration-date">Expiration Date</label>
      <div id="expiration-date"></div>

	  <label for="postalCode">postalCode</label>
      <div id="postalCode"></div>
	  
      <input type="submit" value="Pay" />
    </form>

   <!-- <script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.js"></script>--->
    
    <script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.18.js"></script>
    
    <script>
      braintree.setup("<?php echo $clientToken?>", "custom", {
        id: "my-sample-form",
        hostedFields: {
          number: {
            selector: "#card-number"
		  },
          cvv: {
            selector: "#cvv"
          },
          expirationDate: {
            selector: "#expiration-date"
          },
		  postalCode: {
		  selector: "#postalCode"
		  }
        }
      });
    </script>
  </body>
</html>