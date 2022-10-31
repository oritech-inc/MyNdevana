<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $src = $appdata['appdir']['src'];
    $app = $appdata['appdir']['app'];
    $config = $appdata['config'];

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $config['description'] ?>">
    <meta name="author" content="<?= $config['author'] ?>">
    <meta name="generator" content="<?= $config['version'] ?>">
    <!-- <meta name="csrf-token" content=""> -->

    <title><?= $config['title'] ?> | <?= ucfirst($link[0]) ?></title>

    <link rel="shortcut icon" href="<?= $url ?>public/img/logo.svg" type="image/x-icon">


    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="<?= $url ?>public/style/fa/css/all.min.css">
    <link rel="stylesheet" href="<?= $url ?>public/style/animate.min.css">
    <link rel="stylesheet" href="<?= $url ?>public/style/control.css">
    <link rel="stylesheet" href="<?= $url ?>public/style/bootstrap.min.css">

    <!-- Js -->
    <script src="<?= $url ?>public/js/jquery-3.5.0.min.js"></script>
    <script src="<?= $url ?>public/style/bs/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $url ?>public/js/wow.min.js"></script>
    <style type="text/css">
        body {
            overflow-y: scroll;
        overflow-x: hidden;
        }
    </style>
</head>

<body>
    <?php
        require $appdata['appdir']['app'][2] . 'web/layouts/main.php';
        // require $appdata['appdir']['inc'][1].'pre.php';
    ?>
</body>

</html>