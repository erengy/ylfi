<?php
require 'lib/AltoRouter.php';
require 'lib/config.php';
require 'lib/data.php';
require 'lib/util.php';

$base_uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_path;

$router = new AltoRouter();
$router->setBasePath($base_path);

$data = new Data();

////////////////////////////////////////////////////////////////////////////////

function display_page($slug, $fallacy=false) {
    global $base_uri;
    global $data;

    $data->setSlug($slug);
    $slug = $fallacy ? 'fallacy' : $slug;

    require __DIR__ . '/pages/header.php';
    require __DIR__ . '/pages/' . $slug . '.php';
    require __DIR__ . '/pages/footer.php';
}

function not_found() {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    display_page('404');
}

// Home page
$router->map('GET', '/', function() {
    display_page('home');
});

// Remove trailing slash
$router->map('GET', '/[*:slug]/', function($slug) {
    global $base_uri;
    header('Location: ' . $base_uri . '/' . $slug, true, 301);
});

// FAQ
$router->map('GET', '/sss', function() {
    display_page('faq');
});

// Fallacies
$router->map('GET', '/[*:slug]', function($slug) {
    global $data;

    if ($data->isFallacy($slug)) {
        display_page($slug, true);
    } else {
        not_found();
    }
});

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    not_found();
}
