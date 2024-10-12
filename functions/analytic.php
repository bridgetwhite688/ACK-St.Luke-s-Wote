<?php
/** number of users */
$query = "SELECT COUNT(user_id) FROM users 
";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($user_no);
$stmt->fetch();
$stmt->close();

/** number of enquirys */
$query = "SELECT COUNT(inquiry_id) FROM inquirys 
";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($inquiry_no);
$stmt->fetch();
$stmt->close();


?>