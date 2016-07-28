<?php

    require_once ('../lib/codebird.php');

    $cb = \Codebird\Codebird::getInstance();
// Go to https://apps.twitter.com/app/ and create a new app, then copy the keys in below
    $cb->setConsumerKey('XXXXXXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXXX');
    $cb->setToken('XXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXX');

$cb = \Codebird\Codebird::getInstance();

$dir = 'memes/';
if (count(glob($dir."*")) === 0 )
 { die; // empty
 } else  
$files = glob($dir . '*.{jpg,jpeg,gif,png}', GLOB_BRACE);

$file = $files[array_rand($files)];
//echo $file;
//tweet image and status
$params = array(
  'status' => "#trutherbot",
  'media[]' => $file
);

$reply = $cb->statuses_updateWithMedia($params);
//print_r ($reply);
rename($file, 'tweeted/'.$file);
?>