<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-27 11:29:22
 */

$app = Yee\Yee::getInstance();

$app->map("/dashboard", "CommentsController::___index")->via("GET")->name("dashboard.index");

