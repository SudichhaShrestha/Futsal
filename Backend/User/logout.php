<?php
include_once './assets/includes/header.php';
session_destroy();
header('Location: homepage.php');
exit;
?>