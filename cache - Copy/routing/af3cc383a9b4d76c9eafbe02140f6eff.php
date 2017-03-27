<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-10 12:31:57
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___index")->via("GET")->name("signup.index");
$app->map("/signup", "SignupController::___post")->via("POST")->name("signup.post");

