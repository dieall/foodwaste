<?php

// Set the base path for the Laravel application.
$basePath = realpath(__DIR__ . '/..');

// Load the Laravel application
require $basePath . '/vendor/autoload.php';

$app = require_once $basePath . '/bootstrap/app.php';

// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response); 