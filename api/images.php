<?php

// api/images.php

// Assuming images are stored in the "public/images" directory
$imagePath = __DIR__ . '/../public/images/' . $_GET['file'];

if (file_exists($imagePath)) {
    header('Content-Type: image/jpeg'); // Adjust content type based on your image type
    readfile($imagePath);
} else {
    header('HTTP/1.1 404 Not Found');
}
