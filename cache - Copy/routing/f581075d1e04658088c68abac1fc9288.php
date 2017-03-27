<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-24 09:18:49
 */

$app = Yee\Yee::getInstance();

$app->map("/destination", "AddDestinationController::___index")->via("GET")->name("destination.index");
$app->map("/destination", "AddDestinationController::___post")->via("POST")->name("destination.post");

