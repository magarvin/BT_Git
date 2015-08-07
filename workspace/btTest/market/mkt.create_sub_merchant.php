<?php

session_start();

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

$num = rand(1,99999999999);
$merchantsubname ="subMerch_$num";
//echo $merchantsubname;

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_MerchantAccount::create(
  [
    'individual' => [
      'firstName' => 'Jane',
      'lastName' => 'Doe',
      'email' => 'jane@14ladders.com',
      'phone' => '5553334444',
      'dateOfBirth' => '1981-11-19',
      'ssn' => '456-45-4567',
      'address' => [
        'streetAddress' => '111 Main St',
        'locality' => 'Chicago',
        'region' => 'IL',
        'postalCode' => '60622'
      ]
    ],
    'business' => [
      'legalName' => 'Jane\'s Ladders',
      'dbaName' => 'Jane\'s Ladders',
      'taxId' => '98-7654321',
      'address' => [
        'streetAddress' => '111 Main St',
        'locality' => 'Chicago',
        'region' => 'IL',
        'postalCode' => '60622'
      ]
    ],
    'funding' => [
      'descriptor' => 'Blue Ladders',
      'destination' => Braintree_MerchantAccount::FUNDING_DESTINATION_BANK,
      'email' => 'funding@blueladders.com',
      'mobilePhone' => '5555555555',
      'accountNumber' => '1123581321',
      'routingNumber' => '071101307'
    ],
    'tosAccepted' => true,
    'masterMerchantAccountId' => "grky6c5zzg98g8dp",
    'id' => $merchantsubname
  ]
);



    echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
 echo "</pre>";
 
echo $result->merchantAccount->status;
echo "</p>";
echo $result->merchantAccount->id;
$submerchid = $result->merchantAccount->id;

$_SESSION["submerchid"] = $submerchid;

echo "</p>";

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/webhook_file1.txt\" target=\"_blank\">Check Webhook</a>";

echo "</p>";

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/market/mkt.checkout.php\" target=\"_blank\">Charge sub acct.</a>";

?>