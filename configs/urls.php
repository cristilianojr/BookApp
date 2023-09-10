<?php

$BASE_DIR = 'http://' . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

$urls = [
    'index' => 'index.php',
    'add' => 'add.php',
    'remove' => 'remove.php',
    'view' => 'view.php',
    'edit' => 'edit.php',
];

function url_for($suffix, $assoc_array = []) {
    global $BASE_DIR;

    if (empty($assoc_array)) {
        return $BASE_DIR . $suffix;
    }
    else {
        $args = [];

        foreach ($assoc_array as $chave => $valor) {
            $args[] = $chave . '=' . $valor;
        }

        return $BASE_DIR . $suffix . '?' . join('&', $args);
    }

}

function url_for_pages($name) {
    global $urls;
    return url_for($urls[$name]);
}

function url_for_images($suffix) {
    return url_for('static/images/' . $suffix);
}
 
function url_for_js($suffix) {
    return url_for('static/js/' . $suffix);
}
