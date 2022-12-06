<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    final public function testExample(): void
    {
        $this->assertTrue(true, 'Test Example');
    }
}
