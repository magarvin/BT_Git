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
	  </p>
      <input type="submit" value="Pay" /> // If form does not submit, verify that your input data is formatted correctly and expdate is in the future.
      
            <style>
#card-number {
    height:20px;
    background-color:black;
    width:300px;
}
#cvv {
        height:20px;
    background-color:black;
    width:300px;
}
#expiration-date {
        height:20px;
    background-color:black;
    width:300px;
}
#postalCode {
        height:20px;
    background-color:black;
    width:300px;
}
</style>

    </form>

   <!-- <script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.js"></script>--->
    
    <script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.18.js"></script>
    <script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.18.min.js"></script>

  

  
    <script>
      
  //  #card-number { border: 1px solid #333; }
    
      braintree.setup("<?php echo $clientToken?>", "custom", {
        id: "my-sample-form",
        hostedFields: {
          
  styles: {
    // Style all elements
    "input": {
        "font-size": "15pt",
        "color": "#eeeedb"
       //  "border":"1px"
      }},
    
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
