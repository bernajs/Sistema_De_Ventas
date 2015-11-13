<?php
    $visit = $_COOKIE['user'];
$timeframe = 90 * 60 * 24 * 60 + time();
setcookie('user', date("G:i - m/d/y")$visit, $timeframe);
if(isset($_COOKIE['user']))
    $visit = $_COOKIE['user'];
else
    echo "Welcome to out web page!";
echo "Your have visited last time at- ". $visit;
?>
