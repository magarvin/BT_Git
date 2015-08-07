<html>
<?php

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

$result = Braintree_Customer::create([
    'firstName' => $_POST["firstName"],
    'lastName' => $_POST["lastName"],
    'company' => $_POST["company"],
    'email' => $_POST["email"],
    'phone' => $_POST["phone"],
    'fax' => $_POST["fax"],
    'website' => $_POST["website"],
]);
/***
echo $result->success;
echo "</p>";
echo $result->customer->id;
echo "</p>";
***/

echo "CustomerID: ";
$customerID = $result->customer->id;
echo $customerID;
echo "</p>";
echo "<pre>";
var_dump($result);
echo "</pre>";



?>
