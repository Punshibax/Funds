<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $screenshot = $_FILES['screenshot'];

    // Validate the file and name
    if (empty($name) || empty($screenshot)) {
        echo "Name and screenshot are required!";
        exit;
    }

    // Validate the image file
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($screenshot['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Only image files (JPG, JPEG, PNG, GIF) are allowed.";
        exit;
    }

    // Read the image file and encode it in base64
    $imageData = file_get_contents($screenshot['tmp_name']);
    $base64Image = base64_encode($imageData);

    // Store user data including the base64-encoded image and their IP address
    $userData = [
        'name' => $name,
        'screenshot' => $base64Image,
        'ip' => $_SERVER['REMOTE_ADDR'],
    ];

    // File to store all uploaded data
    $dataFile = 'uploads/data.json';
    
    // Read existing data
    $existingData = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    // Append new user data
    $existingData[] = $userData;
    
    // Save the data into the JSON file
    file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT));

    echo "Your payment and screenshot have been uploaded successfully!";
}
?>