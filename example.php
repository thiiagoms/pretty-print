<?php

if (php_sapi_name() != 'cli') {
    echo "<h1> Only in CLI mode</h1>";
    exit;
}

use PrettyPrint\Printer;

require_once __DIR__ . '/vendor/autoload.php';

Printer::info("Info message");
Printer::warning("Warning message");
Printer::success("success message");
Printer::error("Error message");
