<?php

    /*curl -X POST --data-urlencode "payload={\"channel\": \"#amitji\", \"username\": \"webhookbot\", \"text\": \"This is posted to #amitji and comes from a bot named webhookbot.\", \"icon_emoji\": \":ghost:\"}" https://hooks.slack.com/services/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*/

    // Create a constant to store your Slack URL
    define('SLACK_WEBHOOK', 'https://hooks.slack.com/services/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');

    // Make message
    $message = ['payload' => json_encode(['text' => 'Message to Slack'])];

    // Use curl to send your message
    $c = curl_init(SLACK_WEBHOOK);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $message);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_exec($c);
    curl_close($c);
?>