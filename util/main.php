<?php
// Get the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path
$uri = $_SERVER['REQUEST_URI'];
$dirs = array_filter(explode('/', $uri));
array_shift($dirs);
$app_path = '/' . reset($dirs) . '/' . next($dirs) . '/';

// Set the include path
set_include_path($doc_root . $app_path);
?>