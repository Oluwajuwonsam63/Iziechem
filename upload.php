<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$targetDir = "uploads/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (isset($_FILES['file'])) {
    $fileName = basename($_FILES["file"]["name"]);
    $targetFile = $targetDir . time() . "_" . $fileName;

    // Get image info
    $imageInfo = getimagesize($_FILES["file"]["tmp_name"]);
    if ($imageInfo === false) {
        http_response_code(400);
        echo json_encode(["error" => "File is not an image"]);
        exit;
    }

    $mime = $imageInfo['mime'];
    $allowedTypes = ["image/jpeg", "image/png", "image/gif"];
    if (!in_array($mime, $allowedTypes)) {
        http_response_code(400);
        echo json_encode(["error" => "Only JPG, PNG, GIF allowed"]);
        exit;
    }

    // Create image resource
    switch ($mime) {
        case "image/jpeg":
            $src = imagecreatefromjpeg($_FILES["file"]["tmp_name"]);
            break;
        case "image/png":
            $src = imagecreatefrompng($_FILES["file"]["tmp_name"]);
            break;
        case "image/gif":
            $src = imagecreatefromgif($_FILES["file"]["tmp_name"]);
            break;
    }

    // Resize to 500x500
    $dst = imagecreatetruecolor(500, 500);
    $width = imagesx($src);
    $height = imagesy($src);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, 500, 500, $width, $height);

    // Save resized image
    switch ($mime) {
        case "image/jpeg":
            imagejpeg($dst, $targetFile);
            break;
        case "image/png":
            imagepng($dst, $targetFile);
            break;
        case "image/gif":
            imagegif($dst, $targetFile);
            break;
    }

    imagedestroy($src);
    imagedestroy($dst);

    echo json_encode([
        "url" => "http://localhost/iziechem/" . $targetFile
    ]);
} else {
    http_response_code(400);
    echo json_encode(["error" => "No file uploaded"]);
}
?>