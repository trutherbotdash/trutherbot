<?php

    require_once ('../lib/codebird.php');

    $cb = \Codebird\Codebird::getInstance();
// Go to https://apps.twitter.com/app/ and create a new app, then copy the keys in below
    $cb->setConsumerKey('XXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXXXXXX');
    $cb->setToken('XXXXXXXXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXXXXXX');

$cb = \Codebird\Codebird::getInstance();

$dir = 'tweets/';
if (count(glob($dir."*")) === 0 )
 { die; // empty
 } else  
$files = glob($dir . '*.{txt}', GLOB_BRACE);

$file = $files[array_rand($files)];
//echo $file;
//echo "<br>";
$tweet = file_get_contents($file);
//echo $tweet;
$reply = $cb->statuses_update('status=' . urlencode($tweet));
rename($file, 'tweeted/'.$file);
?>