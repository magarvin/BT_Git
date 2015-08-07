<?php

require_once "/home/ubuntu/workspace/braintree-php-3.2.0/lib/Braintree.php";

if(isset($_GET["bt_challenge"])) {
    echo(Braintree_WebhookNotification::verify($_GET["bt_challenge"]));
}


$postdata = @file_get_contents('php://input');

//mail("masiamah@paypal.com","BT-Webhooks",$postdata);




if(
    isset($_POST["bt_signature"]) &&
    isset($_POST["bt_payload"])
) {
    $webhookNotification = Braintree_WebhookNotification::parse($_POST["bt_signature"], $_POST["bt_payload"]);

/**************
$file = fopen("webhook_file1.txt","a");
echo fwrite($file, $webhookNotification."\n\n\n");
fclose($file);
************/

$message =
        "[Webhook Received " . $webhookNotification->timestamp->format('Y-m-d H:i:s') . "] "
        . "Message: " . $webhookNotification->message . " | "
        . "Errors: " . $webhookNotification->errors . " | "
        . "Kind: " . $webhookNotification->kind . " | "
        . "MerchantAcctStatus: " . $webhookNotification->merchantAccount->status . " | "
        . "MerchantAcctID: " . $webhookNotification->merchantAccount->id . " | "
        . "SubscriptionID: " . $webhookNotification->subscription->id . "\n";

    file_put_contents("webhook_file1.txt", $message, FILE_APPEND);
    
}


?>
