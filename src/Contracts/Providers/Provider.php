<?php

namespace OAuth1\Contracts\Providers;

use OAuth1\Contracts\OAuth1ClientInterface;

interface Provider extends OAuth1ClientInterface
{
    /**
     * Get default provider's configuration.
     *
     * @return array
     */
    public function defaultConfig();
}
