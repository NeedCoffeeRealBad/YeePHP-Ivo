<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2017-03-08 09:50:08
 */

$app = Yee\Yee::getInstance();

$app->map("/gallery", "GalleryController::___index")->via("GET")->name("gallery.index");

