<?php 
    session_start();
    require_once'includes/srv.php';
    $link = 'homepage';

    if(empty(isset($_SESSION))){
        $link = 'dashboard';
        mkeUserSession('client');
    }

    $url = $_SERVER['REQUEST_SCHEME'].'://' . $_SERVER['SERVER_NAME'].'/';
    $link = [$link,$_SESSION];



    include_once $appdata['appdir']['app'][2].'layout.php';

?>