<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-07 02:46:19
 */

$app = Yee\Yee::getInstance();

$app->map("/login", "LoginController::___index")->via("GET")->name("login.index");
$app->map("/login", "LoginController::___postAction")->via("POST")->name("login.post");

