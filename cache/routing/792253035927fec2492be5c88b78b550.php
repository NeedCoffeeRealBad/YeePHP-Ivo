<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-24 12:04:17
 */

$app = Yee\Yee::getInstance();

$app->map("/register", "RegisterController::___index")->via("GET")->name("register.index");
$app->map("/register", "RegisterController::___post")->via("POST")->name("register.post");

