<?php
$visit = $_COOKIE['lastVisit'];
$timeframe = 90 * 60 * 24 * 60 + time();
setcookie('user', date("G:i - m/d/y"), $timeframe);
if(isset($_COOKIE['lastVisit']))
    $visit = $_COOKIE['lastVisit'];
else
    echo "Welcome to out web page!";
echo "Your have visited last time at- ". $visit;
?>