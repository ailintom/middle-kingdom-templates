<!DOCTYPE html>

<?php require 'inc/config.php' ?>
<?php require 'inc/functions.php' ?>

<!--[if lte IE 9]><html lang="en" class="old-ie"><![endif]-->
<!--[if !IE]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="<?php // TODO: A short description of the website for search engines ?>">

<title><?=!empty($title) ? "$title | " : ""?>Persons and Names of the Middle Kingdom</title>

<base href="<?=BASE?>">

<link rel="stylesheet" href="assets/style/style.css">

<?php // TODO: Add OpenGraph tags ?>

<link rel="shortcut icon" href="assets/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/site.webmanifest">
<link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#a88338">
<link rel="shortcut icon" href="assets/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<!--[if lte IE 9]>
    <script src="assets/script/classlist-polyfill.js"></script>
    <script src="assets/script/html5shiv.min.js"></script>
<![endif]-->
</head>

<body>
