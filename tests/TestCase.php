<?php

declare(strict_types=1);

namespace PlutoLinks\Loops\Laravel\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use PlutoLinks\Loops\Laravel\LoopsServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getEnvironmentSetUp($app)
    {
        config()->set('loops.api_key', 'asdf');
    }

    protected function getPackageProviders($app): array
    {
        return [
            LoopsServiceProvider::class,
        ];
    }
}
