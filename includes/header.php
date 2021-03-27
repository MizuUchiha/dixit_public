<?php session_start();
require_once "init.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <?php $url = explode('/', $_SERVER['REQUEST_URI']);
    $title = explode('?', $url[count($url) - 1]);
    $title = substr($title[count($title) - 1], 0, (strpos($title[count($title) - 1], "&")) ?: strlen($title[count($title) - 1])); ?>
    <title><?= strtoupper($title); ?> | Food Ordering System</title>
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/eff6832133.js" crossorigin="anonymous"></script>
    <?php Autoloader::load_css(); ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <?php Autoloader::load_css($title); ?>
</head>
<body>
<div class="page_view">
    <div class="sticky-top">
        <?php include "navigation.php"; ?>
    </div>