<?php
// $html = file_get_contents('https://enlj5twqvrzo.x.pipedream.net/jkhuughuh');
// $doc = new DOMDocument();
// $doc->loadHTML($html);

// $xpath = new DOMXPath($doc);
// $nodeList = $xpath->query("//*[Content-Disposition')]");

// foreach ($nodeList as $node) {
//     echo "<p>" . $node->nodeValue . "</p>";
// }


/******************************************************
 
Instant Email Notification Sample Script for Webhook
Using Basic PHP mail() function
Created by Elton - JotForm Tech Support

 **Note: The following code will use your default web host SMTP to send emails
 **Make sure your web host supports this, otherwise this won't work.
 ******************************************************/
//convert json data to php

$handle = curl_init('https://enlj5twqvrzo.x.pipedream.net/');

$data = [
    'key' => 'value'
];

$encodedData = json_encode($data);

curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $encodedData);
curl_setopt($handle, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($handle);


// //Change with your emails 
// $emailfrom = "ardaaersoy@hotmail.com"; //Sender or From Email
// $emailto = "ardaaersoy@gmail.com"; //Recipient, you can predefine or use a field value e.g. $obj['q4_email']
// $subject = "You've got a new submission"; //Email Subject Title

// //Do not edit
// $id = $_POST['91633521962963']; //Get submission ID
// $submissionURL = 'https://www.jotform.com/submission/'.$id; //Construct submission URL

// $headers = "From: " . $emailfrom . "\r\n";
// $headers .= "Reply-To: ". $emailfrom . "\r\n"; //Optional
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=utf-8\r\n";

// //New method, get data from the submissions page
// $html = new DOMDocument;
// $html->loadHTML(file_get_contents($submissionURL));
// $body = $html->getElementsByTagName('body')->item(0);

// //get html code after the body tag
// foreach ($body->childNodes as $child){
//     $html->appendChild($html->importNode($child, true));
// }
// //make the table responsive so it appears nicely on email
// $body = $html->getElementsByTagName('table');
// foreach ($body as $width) {
//         $width->setAttribute('width', '100%');
// }
// $body = $html->saveHTML();

// //Send email
// @mail($emailto, $subject, $body, $headers);
