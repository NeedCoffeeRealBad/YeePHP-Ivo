<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-24 10:29:07
 */

$app = Yee\Yee::getInstance();

$app->map("/register", "RegisterController::___index")->via("GET")->name("register.index");
$app->map("/register", "RegisterController::___post")->via("POST")->name("register.post");

