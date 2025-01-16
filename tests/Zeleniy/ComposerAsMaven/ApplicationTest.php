<?php

namespace Zeleniy\ComposerAsMaven;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Application::class)]
class ApplicationTest extends TestCase
{
    public function testRun(): void
    {
        $app = new Application();
        $this->assertEquals(0, $app->run());
    }
}
