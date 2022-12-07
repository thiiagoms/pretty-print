<p align="center">
  <a href="https://github.com/thiiagoms/pretty-print">
    <img src="assets/printer.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">Pretty CLI Print made with PHP :elephant::shell:</h3>
</p>

- [Dependencies](#dependencies)
- [Install](#install)
- [Install as package :package:](#install-as-package-package)
  

### Dependencies
* PHP 8.1+
* Composer or Docker

### Install

01 - Clone this repository:
```bash
$ git clone https://github.com/thiiagoms/pretty-print
```

02 - Install dependencies with composer:
```bash
$ cd pretty-print
pretty-print $ composer install
```

03 - Execute local example:
```bash
pretty-print $ php example.php
```

### Install as package :package:

01 - Install package:
```bash
your-project $ composer require --dev thiiagoms/pretty-print
```
02 - Example:
```php
<?php

use PrettyPrint\Printer;

require_once __DIR__ . '/vendor/autoload.php';

Printer::info('Test');
Printer::success('Test');
Printer::warning('Test');
Printer::error('Test');
```