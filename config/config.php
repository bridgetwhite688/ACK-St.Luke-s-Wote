<?php

/* Database Connection */
// $dbuser = "ackstlu2_ndundastevn"; /* Database Username */
// $dbpass = "2R5k!t1:4CtrJQ"; /* Database Username Password */
// $host = "localhost"; /* Database Host */
// $db = "ackstlu2_ack";  /* Database Name */
// $mysqli = new mysqli($host, $dbuser, $dbpass, $db); /* Connection Function */

$dbuser = "root"; /* Database Username */
$dbpass = ""; /* Database Username Password */
$host = "localhost"; /* Database Host */
$db = "ack_school";  /* Database Name */
$mysqli = new mysqli($host, $dbuser, $dbpass, $db); /* Connection Function */

date_default_timezone_set("Africa/Nairobi");/* Default Time Zone */
$currentYear = (new DateTime())->format('Y');
$years = range(1970, (int)$currentYear);

/* Greetings */
$dat = new DateTime('now', new DateTimeZone('Africa/Nairobi'));
$date = $dat->format('H');
if ($date < 12)
    $greeting  =   "Good Morning";
else if ($date < 17)
    $greeting =  "Good Afternoon";
else if ($date < 20)
    $greeting =  "Good Evening";
else
    $greeting =  "Good Evening";

