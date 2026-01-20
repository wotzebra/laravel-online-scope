<?php

namespace Wotz\OnlineScope\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [];
    }

    public function getEnvironmentSetUp($app) {}
}
