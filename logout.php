<?php
session_start();
include_once './includes/header.php';

$_SESSION['username'] = '';
$_SESSION['user_id'] = '';
$_SESSION['loggedin'] = false;

header('Location: ' . $base_url . '/login.php');
?>