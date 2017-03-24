<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-24 09:18:49
 */

$app = Yee\Yee::getInstance();

$app->map("/gallery", "GalleryController::___index")->via("GET")->name("gallery.index");

