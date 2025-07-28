<?php

/**
 * Load a file or URL with support for multiple directory levels
 * 
 * @param string $path The relative path to load (e.g., "css/style.css")
 * @param int $max_levels Maximum directory levels to check (default: 10)
 * @return string|false The full path if found, or false if not found
 */
function loadUrl($path, $max_levels = 10)
{
    // Define the document root if not already defined
    $doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR);

    // Get the current script's directory (for CLI or non-standard setups)
    $current_dir = defined('__DIR__') ? __DIR__ : dirname(__FILE__);

    // Try to find the file starting from the current directory
    for ($i = 0; $i <= $max_levels; $i++) {
        // Build the potential path
        $prefix = str_repeat('../', $i);
        $full_path = $current_dir . DIRECTORY_SEPARATOR . $prefix . ltrim($path, '/');

        // Check if file exists
        if (file_exists($full_path)) {
            // Convert to URL if needed
            if (strpos($full_path, $doc_root) === 0) {
                return str_replace($doc_root, '', str_replace(DIRECTORY_SEPARATOR, '/', $full_path));
            }
            return $full_path;
        }
    }

    // Try from document root if different from current directory
    if ($doc_root !== $current_dir) {
        $full_path = $doc_root . DIRECTORY_SEPARATOR . ltrim($path, '/');
        if (file_exists($full_path)) {
            return str_replace($doc_root, '', str_replace(DIRECTORY_SEPARATOR, '/', $full_path));
        }
    }

    // File not found
    return false;
}