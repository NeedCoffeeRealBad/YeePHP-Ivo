<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-02-27 01:25:19
 */

$app = Yee\Yee::getInstance();

$app->map("/(home)", "HomeController::___index")->via("GET")->name("home.index");
$app->map("/login", "HomeController::___login")->via("POST")->name("home.index");

