<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-27 11:10:31
 */

$app = Yee\Yee::getInstance();

$app->map("/(dashboard)", "DashboardController::___index")->via("GET")->name("dashboard.index");
$app->map("/dashboard", "DashboardController::___post")->via("POST")->name("dashboard.post");

