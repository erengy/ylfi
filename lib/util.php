<?php
function load_json_file($file) {
    $data = file_get_contents($file);
    return json_decode($data, true);
}

function get_fallacy_link($fallacy, $slug, $classes='') {
    global $baseURI;
    return '<a class="' . $classes . '" href="' . $baseURI . '/' . $slug . '" data-key="' . $slug . '" title="' . htmlspecialchars($fallacy['title']) . '"><i class="icon-' . $slug . '"></i></a>';
}
