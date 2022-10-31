<?php
    $src = $appdata['appdir']['src'];
    $config = $appdata['config'];
    
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=$config['description']?>">
<meta name="author" content="<?=$config['author']?>">
<meta name="generator" content="<?=$config['version']?>">
<!-- <meta name="csrf-token" content=""> -->

<title><?=$config['title']?> | <?=ucfirst($link[0])?></title>

<link rel="shortcut icon" href="<?=$url?>public/img/logo.svg" type="image/x-icon">

<!-- Style -->
<link rel="stylesheet" href="<?=$url?>public/css/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=$url?>public/css/fa/css/all.min.css">
<link rel="stylesheet" href="<?=$url?>public/css/animate.min.css">'

<!-- Js -->
<script src="<?=$url?>public/js/jquery-3.5.0.min.js"></script>
<script src="<?=$url?>public/css/bs/js/bootstrap.bundle.min.js"></script>
<script src="<?=$url?>public/js/wow.min.js"></script>