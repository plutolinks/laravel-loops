<?php

declare(strict_types=1);

namespace PlutoLinks\Loops\Laravel;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use PlutoLinks\Loops\Laravel\Exceptions\ApiKeyIsMissing;
use PlutoLinks\Loops\Loops;

class LoopsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/loops.php',
            'loops'
        );

        $this->app->singleton(Loops::class, function (): Loops {
            $apiKey = config('loops.api_key');

            if (! is_string($apiKey)) {
                throw ApiKeyIsMissing::create();
            }

            return Loops::client($apiKey);
        });

        $this->app->alias(Loops::class, 'loops');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/loops.php' => config_path('loops.php'),
            ], 'loops-config');
        }
    }

    public function provides(): array
    {
        return [
            'loops',
            Loops::class,
        ];
    }
}
