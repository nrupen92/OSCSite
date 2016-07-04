<?php

include_once "models/PageData.php";
$pageData = new PageData();
$pageData->title = "Faculty Portal";
$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');

//connect to database
include_once "db/dbcontext.php";
include_once 'db/dbhelper.php';
$db = DBContext::getDB();

$pageData->navigation = include_once "views/navigation_front.php";

$controller = "faculty";
if (isset($_GET['action'])) {
    $pageData->content = include_once "controllers/$controller/index.php";
}
include_once "views/page.php";
