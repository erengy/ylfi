<?php
function load_fallacies() {
    $file = 'assets/js/data/fallacies.json';
    $data = file_get_contents($file);
    return json_decode($data, true);
}

function get_fallacy_link($fallacy, $classes='') {
    global $base_uri;
    return '<a class="' . $classes . '" href="' . $base_uri . '/' . $fallacy['slug'] . '" data-key="' . $fallacy['slug'] . '" title="' . $fallacy['title'] . '"><i class="icon-' . $fallacy['slug'] . '"></i></a>';
}
?>