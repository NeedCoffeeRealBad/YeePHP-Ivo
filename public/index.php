<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();



// Instantiate the app
$config = require __DIR__ . '/../config.php';
$app = new \Yee\Yee($config);
$app->view(new \Yee\Views\Twig());

//set Cookies
$app->add(new \Yee\Middleware\SessionCookie(array(
'expires' => '20 minutes',
'path' => '/',
'domain' => null,
'secure' => false,
'httponly' => true,
'name' => 'yee_session',
'secret' => 'CHANGE_ME',
'cipher' => MCRYPT_RIJNDAEL_256,
'cipher_mode' => MCRYPT_MODE_CBC
)));

new Yee\Managers\RoutingCacheManager(
    array(
        'cache' => __DIR__ . '/../cache/routing',
        'controller' => array( __DIR__ . '/../App/Controllers' )
    )
);
new Yee\Managers\DatabaseManager();
// Run app

$twig = $app->view()->getEnvironment();
$twig->addGlobal( 'session', $_SESSION );

$app->execute();
