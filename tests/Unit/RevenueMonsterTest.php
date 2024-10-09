<?php

namespace Dash8x\RevenueMonster\Tests\Unit;

use Dash8x\RevenueMonster\Facades\RevenueMonsterFacade;
use Dash8x\RevenueMonster\Tests\TestCase;
use Illuminate\Support\Facades\App;
use RevenueMonster\SDK\Exceptions\ApiException;

class RevenueMonsterTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('services.rm', [
            'client_id' => 'xxxxxxx', // Client ID
            'client_secret' => 'xxxxxxxx', // Client Secret
            'sandbox' => 'xxxxxx', // Whether to use the sandbox mode
            'private_key' => __DIR__ . '/../sample-private-key.pem', // Path to the private key file
        ]);

    }

    /** @test */
    public function it_can_load_the_revenue_monster_sdk_using_app_make()
    {
        $this->expectException(ApiException::class);

        $rm = App::make('rm');
    }

    /** @test */
    public function it_can_load_the_revenue_monster_sdk_using_facade()
    {
        $this->expectException(ApiException::class);

        $rm = RevenueMonsterFacade::merchant();
    }
}
