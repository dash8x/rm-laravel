<?php

namespace Dash8x\RevenueMonster;

class RevenueMonster extends \RevenueMonster\SDK\RevenueMonster
{
    /**
     * @var \RevenueMonster\SDK\RevenueMonster
     */
    protected $client;

    /**
     * Constructor
     *
     * @param array $arguments
     */
    public function __construct(array $arguments = [])
    {
        parent::__construct($arguments);
    }


    /**
     * Get the merchant module
     *
     * @return \RevenueMonster\SDK\Modules\MerchantModule
     */
    public function merchant()
    {
        return $this->merchant;
    }

    /**
     * Get the store module
     *
     * @return \RevenueMonster\SDK\Modules\StoreModule
     */
    public function store()
    {
        return $this->store;
    }

    /**
     * Get the user module
     *
     * @return \RevenueMonster\SDK\Modules\UserModule
     */
    public function user()
    {
        return $this->user;
    }

    /**
     * Get the payment module
     *
     * @return \RevenueMonster\SDK\Modules\PaymentModule
     */
    public function payment()
    {
        return $this->payment;
    }
}
