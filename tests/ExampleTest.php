<?php

namespace Dash8x\RevenueMonster\Tests;

use Orchestra\Testbench\TestCase;
use Dash8x\RevenueMonster\RevenueMonsterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RevenueMonsterServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
