<?php

$uploadPaths = [
    '/uploads/avatars',
    '/uploads/profile_pictures',
    '/uploads/profile_images',
    '/uploads/user_photos',
    '/uploads/documents'
];

$publicDir = __DIR__ . '/../public';

echo "Testing upload directories...\n\n";

foreach ($uploadPaths as $path) {
    $fullPath = $publicDir . $path;
    echo "Checking $path:\n";
    
    // Check if directory exists
    if (!file_exists($fullPath)) {
        echo "Creating directory... ";
        if (mkdir($fullPath, 0777, true)) {
            echo "SUCCESS\n";
        } else {
            echo "FAILED\n";
            $error = error_get_last();
            echo "Error: " . ($error['message'] ?? 'Unknown error') . "\n";
        }
    } else {
        echo "Directory exists\n";
    }
    
    // Check permissions
    echo "Checking permissions... ";
    if (is_writable($fullPath)) {
        echo "WRITABLE\n";
    } else {
        echo "NOT WRITABLE\n";
        echo "Setting permissions... ";
        if (chmod($fullPath, 0777)) {
            echo "SUCCESS\n";
        } else {
            echo "FAILED\n";
        }
    }
    
    // Try to create a test file
    echo "Testing file creation... ";
    $testFile = $fullPath . '/test.txt';
    if (file_put_contents($testFile, 'test')) {
        echo "SUCCESS\n";
        unlink($testFile);
    } else {
        echo "FAILED\n";
        $error = error_get_last();
        echo "Error: " . ($error['message'] ?? 'Unknown error') . "\n";
    }
    
    echo "\n";
}
