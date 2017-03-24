<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-02-27 02:31:21
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___index")->via("GET")->name("signup.index");
$app->map("/signup", "SignupController::___post")->via("POST")->name("signup.post");

