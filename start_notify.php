<?php
session_start();
$verify=$_POST["verify"];
if($verify==1)
{
$_SESSION["url"]=$_POST["url"];
$_SESSION["keyword"]=$_POST["keyword"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["refrate"]=$_POST["refrate"];
echo "Redirecting you now.... Keep the next webpage open to get your result. Your notification script will be automatically terminated if you close the page.";
echo "<script type='text/javascript'>setTimeout(\"window.location.href = 'notify.php';\", 5)</script>";
}
else
{
    echo '<html>
    <head>
        <title>Notify now!</title>
    </head>
    <body>
        <form name="start_notify" method="POST" action="start_notify.php">
            <input type="textarea" name="url" placeholder="URL">
            <br>
            <input type="textarea" name="keyword" placeholder="keyword">
            <br>
            <input type="email" name="email" placeholder="email">
            <br>
            <input type="number" name="refrate" placeholder="Refresh rate in seconds">
            <br>
            <input type="hidden" name="verify" value="1">
            <input type="submit" value="submit">
        </form>
    </body>
</html>';
}
?>
