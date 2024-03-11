<?php

declare(strict_types=1);

use PlutoLinks\Loops\Laravel\Facades\Loops;
use PlutoLinks\Loops\Resources\ContactResource;

it('resolves resources', function (): void {
    $contacts = Loops::contacts();

    expect($contacts)->toBeInstanceOf(ContactResource::class);
});
