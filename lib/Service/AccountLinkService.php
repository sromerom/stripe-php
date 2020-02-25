<?php

namespace Stripe\Service;

class AccountLinkService extends \Stripe\Service\AbstractService
{
    /**
     * Creates an AccountLink object that returns a single-use Stripe URL that the user
     * can redirect their user to in order to take them through the Connect Onboarding
     * flow.
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @return AccountLink
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/account_links', $params, $opts);
    }
}
