<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-14 07:42:49
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___index")->via("GET")->name("login.index");
$app->map("/login", "LoginController::___postAction")->via("POST")->name("login.post");

