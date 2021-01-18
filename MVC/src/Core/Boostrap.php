<?php
require_once "Request.php";
require_once "Router.php";
$aRouter = include "configs/router.php";

function loadView($file)
{
    if (strpos($file, ".php") === false) {
        $file .= '.php';
    }
    $file = "src/Views/".$file;
    if (file_exists($file)) {
        include $file;
    }
}
$route = Request::route();
$oRoute = new Router();
$oRoute->setRouter($aRouter)->direct($route);
