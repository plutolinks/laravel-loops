<?php

declare(strict_types=1);

namespace PlutoLinks\Loops\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \PlutoLinks\Loops\Resources\ContactResource contacts()
 * @method static \PlutoLinks\Loops\Resources\EventResource events()
 * @method static \PlutoLinks\Loops\Resources\TransactionalResource transactional()
 */
class Loops extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'loops';
    }
}
