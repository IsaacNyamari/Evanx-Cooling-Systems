<?php

function loadUrl($url)
{
    // Remove query string if present
    $path = parse_url($url, PHP_URL_PATH);

    // Trim slashes and split into segments
    $segments = explode('/', trim($path, '/'));

    // If last segment looks like a .php file, remove it
    if (substr(end($segments), -4) === '.php') {
        array_pop($segments);
    }

    // Limit to 3 levels
    $depth = min(count($segments), 3);

    // Build relative path
    return $depth === 0 ? '' : str_repeat('../', $depth);
}

// Define constants
define('BASE_DIR', rtrim($_SERVER['DOCUMENT_ROOT'], '/'));
define('BASE_URL', loadUrl($_SERVER['REQUEST_URI']));
