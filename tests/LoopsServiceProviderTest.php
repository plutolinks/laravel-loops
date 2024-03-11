<?php

declare(strict_types=1);

use PlutoLinks\Loops\Laravel\Exceptions\ApiKeyIsMissing;
use PlutoLinks\Loops\Laravel\Facades\Loops;

it('requires an api key', function (): void {
    config()->set('loops.api_key', null);

    Loops::contacts();
})->throws(
    ApiKeyIsMissing::class,
    'Loops API key is missing. Please set the LOOPS_API_KEY environment variable.',
);

it('binds the client as singleton', function (): void {
    $client = resolve('loops');

    expect(resolve('loops'))->toBe($client);
});
