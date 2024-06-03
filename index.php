<?php
    session_start();
    ob_start();
    $requesturi = strstr(str_replace(strstr($_SERVER['REQUEST_URI'],'?'), '',$_SERVER['REQUEST_URI']),'/');
    $urlinitial = explode("/",$requesturi);
    $a = array();
    $url = array();
    $today = gmdate('Y-m-d');
    $dot = "http://localhost/capitalmultimedia/";
    $title = "Capital Multimedia";
    $description = "";
    require_once 'components/head.php';
    require_once 'components/menu.php';
    require_once 'pages/home.php';
    require_once 'components/footer.php';
    require_once 'components/base.php';
?>
