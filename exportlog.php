<?php
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/vendor/autoload.php'; // Loads the library. This may vary depending on how you installed the library.
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = $_ENV['ACCOUNT_SID'];
$token = $_ENV['AUTH_TOKEN'];
$client = new Client($sid, $token);

/* Download data from Twilio API */
$messages = $client->messages->stream(array
    (   
      'dateSentAfter' => '2017-02-23', 
      'dateSentBefore' => '2017-02-27',
    )
);

// /* Browser magic */
$filename = $sid."_sms.csv"; 
header("Content-Type: application/csv");
header("Content-Disposition: attachment; filename={$filename}");

/* Write headers */
$fields = array( 'SMS Message SID', 'From', 'To', 'Date Sent', 'Status', 'Direction', 'Message Segments', 'Price', 'Body' );
echo '"'.implode('","', $fields).'"'."\n";

/* Write rows */
foreach ($messages as $sms) { 
    $dateSent = $sms->dateSent;
    $row = array(
        $sms->sid,
        $sms->from,
        $sms->to,
        $dateSent->format('Y-m-d H:i:s'),
        $sms->status,
        $sms->direction,
        $sms->numSegments,
        $sms->price,
        $sms->body
    );

  echo '"'.implode('","', $row).'"'."\n"; 
}