<?php
session_start();
$url=$_SESSION["url"];
$email=$_SESSION["email"];
$keyword=$_SESSION["keyword"];
$refrate=$_SESSION["refrate"];//refresh rate
echo "URL being searched:".$url;
echo "<br>";
echo "Looking for keyword:".$keyword;
echo "<br>";
echo "Contact email:".$email;
echo "<br>";
echo "Page is updated every ".$refrate." seconds";
echo "<br>";
echo "Please note that this page has to remain open on the browser to keep the script running. ";
$html = file_get_contents($url);
$soundfile="siren.mp3";
if (strpos($html, $keyword) !== false) {
    echo 'Your keyword has been found on the given website. Get going!';
     mail("pradyoth.shandilya@gmail.com","Notification-Keyword found!","Keyword found! You have been notified!");
                     echo "<embed src =\"$soundfile\" hidden=\"true\" autostart=\"true\"></embed>";
}
else
{
                 echo "Given keyword has not been found yet...";
                 echo "<script type='text/javascript'>setTimeout(\"window.location.href = 'notify.php';\", $refrate*1000)</script>";
}
echo "<br>";
echo "Last update at ".date("h:i");
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <title>NotifyMe!</title>
    </head>
    <body>
    </body>
</html>