<?php

namespace Zeleniy\ComposerAsMaven;

use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase {

    public function testRun() {

        $app = new Application;
        $this->assertEquals(0, $app->run());
    }
}