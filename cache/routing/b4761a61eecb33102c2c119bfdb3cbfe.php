<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-14 07:42:49
 */

$app = Yee\Yee::getInstance();

$app->map("/gallery", "GalleryController::___index")->via("GET")->name("gallery.index");

