<?php

echo "Testing file conversion dependencies...\n\n";

// Test ImageMagick
echo "Testing ImageMagick installation...\n";
exec('convert -version', $output, $returnVar);
if ($returnVar === 0) {
    echo "✓ ImageMagick is installed successfully!\n";
    echo implode("\n", array_slice($output, 0, 1)) . "\n";
} else {
    echo "✗ ImageMagick is not installed or not in PATH\n";
}

echo "\nTesting unoconv installation...\n";
exec('unoconv --version', $output2, $returnVar2);
if ($returnVar2 === 0) {
    echo "✓ unoconv is installed successfully!\n";
    echo implode("\n", array_slice($output2, 0, 1)) . "\n";
} else {
    echo "✗ unoconv is not installed or not in PATH\n";
}

// Test temp directory
$tempDir = __DIR__ . '/../var/temp';
echo "\nChecking temp directory ($tempDir)...\n";
if (is_dir($tempDir)) {
    echo "✓ Temp directory exists\n";
    if (is_writable($tempDir)) {
        echo "✓ Temp directory is writable\n";
    } else {
        echo "✗ Temp directory is not writable\n";
    }
} else {
    echo "✗ Temp directory does not exist\n";
}

// Test PDF conversion permissions in ImageMagick policy
$policyFile = '/etc/ImageMagick-6/policy.xml';
if (!file_exists($policyFile)) {
    $policyFile = '/etc/ImageMagick/policy.xml';
}

echo "\nChecking ImageMagick PDF permissions...\n";
if (file_exists($policyFile)) {
    $policy = file_get_contents($policyFile);
    if (strpos($policy, 'rights="read|write" pattern="PDF"') !== false) {
        echo "✓ ImageMagick PDF conversion is enabled\n";
    } else {
        echo "✗ ImageMagick PDF conversion might be restricted\n";
    }
} else {
    echo "? Unable to check ImageMagick policy file\n";
}

// Test unoconv service
echo "\nChecking unoconv service status...\n";
exec('systemctl is-active unoconv-listener', $output3, $returnVar3);
if ($returnVar3 === 0) {
    echo "✓ unoconv listener service is running\n";
} else {
    echo "✗ unoconv listener service is not running\n";
}
