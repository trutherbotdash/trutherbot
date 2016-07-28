<?php
// trutherbotdash by @trutherbotearth

    require_once ('lib/codebird.php');

// Go to https://apps.twitter.com/app/ and create a new app, then copy the keys in below
    $cb = \Codebird\Codebird::getInstance();
    $cb->setConsumerKey('XXXXXXXXXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXX');
    $cb->setToken('XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXX');

$cb = \Codebird\Codebird::getInstance();

// Interact with Dashboard
if (isset($_POST["save"])) {  
}else{  
echo "no, you may not access this page directly!";
    exit;
}

echo "<br />";
echo $_POST['tweet'] ."<br />";
echo "<br />";

if ($_POST['tweet']=="") {
	echo "you have to type somthing!!!!";
	exit;
}


if ($_POST['save']=="save") {
 // code to schedule tweet
 if(isset($_POST['tweet'])) {
    $data = $_POST['tweet'];

newfile:
$file = uniqid().'.txt';
//$file = "5796963ae86e6.txt";
if (file_exists('schedule/tweets/'. $file)) {

//echo "file exsists";
exit;
goto newfile;
} else {
// echo "The file $filename does not exist";
}

    $ret = file_put_contents('schedule/tweets/'. $file , $data, LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file.');
    }
    else {

        echo "$ret bytes written to file<br />" . $file ."<br />";
    }
}
else {
   die('no post data to process');

}


echo "Tweet Scheduled!";
} elseif ($_POST['save']=="tweet") {

  // code to send tweet
$reply = $cb->statuses_update('status=' . urlencode($_POST['tweet']));
echo "Tweet Sent!";
} else {

// code to upload memes
echo "Uploading Memes";
}

?>