<?php

$id = $_POST["id"];

echo "<a href=\"https://mybt-magarvin.c9.io/btTest/index.php\">Return To Menu</a>";
echo "</p>";

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

$result = Braintree_Transaction::void($id);

    echo "<h2>Result:</h2><br> <pre>";
var_dump($result);
 echo "</pre>";
 

?>