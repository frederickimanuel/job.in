<?php
session_start();
$_SESSION['user_email'] = $row[''];
$_SESSION['user_fname'] = $row[''];
$_SESSION['user_lname'] = $row[''];
$_SESSION['user_dob'] = $row[''];
$_SESSION['user_gender'] = $row[''];
$_SESSION['user_nation'] = $row[''];
$_SESSION['user_idcard'] = $row[''];
unset($_SESSION['user_email']);
unset($_SESSION['user_fname']);
unset($_SESSION['user_lname']);
unset($_SESSION['user_dob']);
unset($_SESSION['user_gender']);
unset($_SESSION['user_nation']);
unset($_SESSION['user_idcard']);
session_unset();
session_destroy();
header("Location: index.html");
