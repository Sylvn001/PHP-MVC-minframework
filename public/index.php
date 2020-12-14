<?php 
    require_once "../vendor/autoload.php";

    $route = new \App\Route;
    echo '<hr>';
    print_r($route->getUrl());
    echo '<br>';
    echo '<hr> <pre>';
    print_r($route->getRoutes());
    echo '</pre>';