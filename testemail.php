<?php

  $message = $_POST["message"];
  $subject = $_POST["subject"];
  $to = $_POST["to"];
  $from = $_POST["from"];

  echo $message;
  echo $subject;
  echo $to;
  echo $from;


  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('4e7436f841db41c0555e6d97723e821d','276617d094db5aea31d1ef95dc2983f9',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "cc12954@georgiasouthern.edu",
          'Name' => "Eagler"
        ],
        'To' => [
          [
            'Email' => $to,
            'Name' => "User"
          ]
        ],
        'Subject' => $subject,
        'TextPart' => "please click the following link to finish registration",
        'HTMLPart' => "http://localhost/eagler/php/quiz.php?email=" . $to,
        'CustomID' => ""
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>
