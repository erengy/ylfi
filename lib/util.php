<?php
function load_json_file($file) {
    $data = file_get_contents($file);
    return json_decode($data, true);
}

function get_fallacy_link($fallacy, $slug, $classes='') {
    global $base_uri;
    return '<a class="' . $classes . '" href="' . $base_uri . '/' . $slug . '" data-key="' . $slug . '" title="' . htmlspecialchars($fallacy['title']) . '"><i class="icon-' . $slug . '"></i></a>';
}
