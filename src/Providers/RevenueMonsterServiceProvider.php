<?php

namespace Dash8x\RevenueMonster\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Dash8x\RevenueMonster\RevenueMonster;

class RevenueMonsterServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(RevenueMonster::class, function () {
            $config = $this->app['config']['services.rm'];
            $client_id = Arr::get($config, 'client_id');
            $client_secret = Arr::get($config, 'client_secret');
            $is_sandbox = Arr::get($config, 'sand_box');
            $private_key = Arr::get($config, 'private_key');

            return new RevenueMonster([
                'clientId' => $client_id,
                'clientSecret' => $client_secret,
                'privateKey' => file_get_contents($private_key),
                'isSandbox' => $is_sandbox ?: false,
            ]);
        });

        // Register the main class to use with the facade
        $this->app->singleton('rm', function () {
            return $this->app->make(RevenueMonster::class);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [RevenueMonster::class];
    }
}
