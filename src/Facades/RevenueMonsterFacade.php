<?php

namespace Dash8x\RevenueMonster\Facades;

use Illuminate\Support\Facades\Facade;

class RevenueMonsterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rm';
    }
}
