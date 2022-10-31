<?php
// $root = getcwd().'/';
$root = $_SERVER['DOCUMENT_ROOT'];
$appdata = getAppData();

function db_connect($obj){
    if (!mysqli_connect($obj["host"], $obj["user"], $obj["pass"], $obj["db"])) {
        return false;
    } else {
        return true;
    }
}

function getAppData(){
    return array(
        'config'=>AppConfigs(),
        'appdir'=>AppPaths($_SERVER['DOCUMENT_ROOT']),
    );
}

function AppPaths($root){
    return array(
        'app' => [$root.'App/Controller/',$root.'App/Models/',$root.'App/Views/'],
        'src' =>[$root.'public/style/',$root.'public/js/',$root.'public/img/'],$root.'/public/video',
        'inc' =>[$root.'includes/accounts/',$root.'includes/toolkit/',$root.'includes/web/'],
        'cls' =>[$root.'classes/accounts/',$root.'classes/dashboard/',$root.'classes/web/']
    );
}

function AppConfigs(){
    return array(
        'title' => 'Ndevana Location Community United',
        'description' => '',
        'author' => 'Samkelwe Samm Attwel Wakeni, and Original technologies team, Oritech, oritechno, original',
        'version' => '0.0.1',
    );
}

function mkeUserSession($u) {
    switch ($u){
        case 'developer':
            $_SESSION['user']=[
                'id' =>'1F250DAC-216B-450C-3CB0-03CE36D646AF',
                'name' =>'Samm',
                'mail' =>'samkelwe@gmail.com',
                'type' =>'Developer',
                'state' =>'active',
                'pass' =>'Samm@2022',
            ];
            break;
        case 'admin':           
            $_SESSION['user']=[
                'id' =>'1F250DAC-216B-450C-3CB0-03CE36D646AF',
                'name' =>'Mbulelo',
                'mail' =>'Mbulelo@gmail.com',
                'type' =>'Administrator',
                'state' =>'active',
                'pass' =>'Mbu@2022',
            ];
            break;
        default:
            $_SESSION['user']=[
                'id' =>'0',
                'name' =>'user',
                'mail' =>'user@gmail.com',
                'type' =>'client',
                'state' =>'active',
                'pass' =>'User@2022',
            ];
            break;
    }
}
