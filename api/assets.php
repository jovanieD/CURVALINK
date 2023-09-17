<?php
// File: api/assets.php

$file = $_GET['file'];
$fileType = $_GET['type'];

if ($fileType === 'css') {
    $cssPath = __DIR__ . '/../public/css/' . $file;

    if (file_exists($cssPath)) {
        header('Content-Type: text/css');
        readfile($cssPath);
    } else {
        header('HTTP/1.1 404 Not Found');
    }
} elseif ($fileType === 'js') {
    $jsPath = __DIR__ . '/../public/js/' . $file;

    if (file_exists($jsPath)) {
        header('Content-Type: application/javascript');
        readfile($jsPath);
    } else {
        header('HTTP/1.1 404 Not Found');
    }
} else {
    header('HTTP/1.1 400 Bad Request');
    echo 'Invalid file type';
}
?>
