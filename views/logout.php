<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_access_level']);
unset($_SESSION['user_ward_id']);
unset($_SESSION['user_name']);
session_destroy();
header("Location: login");
exit;
