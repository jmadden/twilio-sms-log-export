<?php
// Get the PHP helper library from twilio.com/docs/php/install
require __DIR__ . '/vendor/autoload.php'; // Loads the library. This may vary depending on how you installed the library.
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = $_POST['sid'];
$token = $_POST['authToken'];
$from = $_POST['from'];
$to = $_POST['to'];
$date = '';


echo $to;
echo '<br>';
echo $from;
echo '<br>';

$client = new Client($sid, $token);

/* Download data from Twilio API */
if (!empty($from) || !empty($to)){

    if ($from == $to){
        $date = array
            (
                'dateSent' => $from
            );
    }
    
    if (!empty($from) && empty($to)){
        $date = array
            (   
                'dateSentAfter' => $from,
            );
    }

    if (empty($from) && !empty($to)){
        $date = array
            (   
                'dateSentBefore' => $to,
            );
    }

    if (!empty($from) && !empty($to) && $from != $to){
     $date = array
            (   
                'dateSentAfter' => $from, 
                'dateSentBefore' => $to,
            );
    }
}

$messages = $client->messages->stream($date);


// /* Browser magic */
$filename = $sid."_sms.csv"; 
header("Content-Type: application/csv");
header("Content-Disposition: attachment; filename={$filename}");

/* Write headers */
$fields = array( 'SMS Message SID', 'From', 'To', 'Date Created', 'Date Sent', 'Date Updated', 'Status', 'Direction', 'Message Segments', 'Price', 'Body' );
echo '"'.implode('","', $fields).'"'."\n";

/* Write rows */
foreach ($messages as $sms) { 
    $row = array(
        $sms->sid,
        $sms->from,
        $sms->to,
        $sms->dateCreated->format('Y-m-d H:i:s'),
        $sms->dateSent->format('Y-m-d H:i:s'),
        $sms->dateCreated->format('Y-m-d H:i:s'),
        $sms->status,
        $sms->direction,
        $sms->numSegments,
        $sms->price,
        $sms->body
    );

  echo '"'.implode('","', $row).'"'."\n"; 
}