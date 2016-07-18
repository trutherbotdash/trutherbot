<?php
// trutherbotdash by @trutherbotearth
    require_once ('lib/codebird.php');

    $cb = \Codebird\Codebird::getInstance();
    $cb->setConsumerKey('dPLep4ifHoXq5OSTBTYAldhQD', 'cWx6vV8NdvkWxIrhbq16hrf83mOhk7b9ZKBzRMpVMgBxzpDaIF');
    $cb->setToken('754759215630069761-6NeUtcsvYcvMcWmEPHmZAPcTGe0XVmS', 'jHX68T5wqNizNvDUaS2mmyrZMdsZzpfVPp4amktciKN8F');

$cb = \Codebird\Codebird::getInstance();

// Interact with Dashboard

echo "<br />";
echo $_POST['tweet'] ."<br />";
echo "<br />";

if ($_POST['tweet']=="") {
	echo "What the fuck are you trying to do? You have to type somthing!!!!";
	exit;
}


if ($_POST['save']=="save") {
 // code to schedule tweet

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