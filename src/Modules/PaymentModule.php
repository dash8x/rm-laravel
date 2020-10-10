<?php

namespace Dash8x\RevenueMonster\Modules;

class PaymentModule extends \RevenueMonster\SDK\Modules\PaymentModule
{
    /**
     * Get a web payment by the checkout ID
     *
     * @param string $checkoutId
     * @return \RevenueMonster\SDK\Modules\stdClass|\RevenueMonster\SDK\Modules\Tightenco\Collect\Support\Collection
     * @throws \Httpful\Exception\ConnectionErrorException
     * @throws \RevenueMonster\SDK\Exceptions\ApiException
     */
    public function webPaymentByCheckoutId(string $checkoutId)
    {
        $uri = $this->getOpenApiUrl('v3', "/payment/online?checkoutId=$checkoutId");
        return $this->mapResponse($this->callApi('get', $uri)->send());
    }
}
