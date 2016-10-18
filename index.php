<?php
require 'lib/AltoRouter.php';
require 'lib/config.php';
require 'lib/util.php';

$base_uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_path;

$router = new AltoRouter();
$router->setBasePath($base_path);

$fallacies = load_fallacies();

$fallacy_slugs = array();
if (!empty($fallacies) && empty($fallacy_slugs)) {
    foreach ($fallacies as $fallacy) {
        $fallacy_slugs[$fallacy['slug']] = true;
    }
}

////////////////////////////////////////////////////////////////////////////////

function display_page($page) {
    global $base_uri;
    global $fallacies;

    require __DIR__ . '/pages/header.php'; 
    require __DIR__ . '/pages/' . $page . '.php';
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
$router->map('GET', '/faq', function() {
    display_page('faq');
});

// Fallacies
$router->map('GET', '/[*:slug]', function($slug) {
    global $fallacy_slugs;

    if (array_key_exists($slug, $fallacy_slugs)) {
        display_page('fallacy');
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
