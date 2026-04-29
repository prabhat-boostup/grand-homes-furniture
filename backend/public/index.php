<?php

// Autoloader
spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    if ($parts[0] !== 'App') return;

    array_shift($parts); // Remove 'App'
    
    if ($parts[0] === 'Core') {
        $path = __DIR__ . '/../core/' . $parts[1] . '.php';
    } else {
        $path = __DIR__ . '/../app/' . implode('/', $parts) . '.php';
    }

    if (file_exists($path)) {
        require $path;
    }
});

// Error Handling
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode([
        'error' => 'Internal Server Error',
        'message' => $errstr,
        'file' => $errfile,
        'line' => $errline
    ]);
    exit;
});

// Load routes
require_once __DIR__ . '/../routes/api.php';
