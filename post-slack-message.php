<?php

 // slack custom message code added New

    // Create a constant to store your Slack URL
    define('SLACK_WEBHOOK', 'https://hooks.slack.com/services/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');

    // Make message
    $message = ['payload' => json_encode(['text' => 'Message to Slack custom'])];

    // Use curl to send your message
    $c = curl_init(SLACK_WEBHOOK);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_POST, true);
    curl_setopt($c, CURLOPT_POSTFIELDS, $message);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    curl_exec($c);
    curl_close($c);
?>