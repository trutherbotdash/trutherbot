# trutherbot
![Alt text](https://github.com/trutherbotdash/trutherbot/blob/master/html/img/trutherbotdash.png?raw=true "Optional Title")
Installation Steps:

Pre requisites, PHP 5.5 or newer. PHP Curl must be installed.
Make sure to change upload_max_filesize = 10M in your php.ini
so that some of the larger photos can be uploaded.

1. Download the files and put the contents of the HTML directory
   somewhere browse-able on your web server.

2. Ensure that the directory /schedule/ and it's child directories
   are owned by your web server and writable by it.
   Use this command:  sudo chown -R apache:apache schedule (or whatever user/group your web server runs under)

3. Go to https://apps.twitter.com/app/ and create a new app.
   You will need four different keys that you will be able to copy
   and past into the files trutherbot.php, memescheduled.php, tweetscheduled.php

   Replace the values of 'XXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXX'
   with your four keys.

    $cb->setConsumerKey('XXXXXXXXXXXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXXX');
    $cb->setToken('XXXXXXXXXXXXX', 'XXXXXXXXXXXXXXXXXX');

will now look something similar to what is seen below depending on your apps keys:

    $cb->setConsumerKey('LKJBljfl737gr73irlg37iG373', 'lhjash7hi3h8dgf88g8f8gg8s48seg');
    $cb->setToken('ljhbsdufhli73YRP89RH3QO78G', 'khjsdjfbldhfas7t7i3lgrir87es0fqg28f60e7fg97qw6e');	

MAKE SURE YOU SET THESE CORRECTLY IN ALL 3 FILES!!!

4. Edit trutherbot.sh, which is in the schedule directory.
   change the path so that it correctly reflects the location of /schedule/trutherbot.sh
   cd /var/www/html/NAMEOFBOTDIRECTOYGOESHERE/schedule/ && php tweetscheduled.php && php memescheduled.php <--

   Make sure that trutherbot.sh is executable by using this command: sudo chmod +x trutherbot.sh

5. Setup a crontab to tweet your scheduled tweets and memes every 2 hours.......

   Type in this command:  sudo crontab -e

   Now it will open vim, press shift + i to type in the cronjob script

   0 */2 * * * /var/www/html/NAMEOFBOTDIRECTOYGOESHERE/trutherbot.sh
   */50 * * * * /var/www/html/NAMEOFBOTDIRECTOYGOESHERE/schedule/trutherbot.sh

   now press the ESC key, then press SHIFT + ":" and type exit
   it should say it has added the new cronjob


That's it.... if you have any problems you can tweet me @trutherbotdash

