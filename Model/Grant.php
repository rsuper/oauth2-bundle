<?php

namespace Trikoder\Bundle\OAuth2Bundle\Model;

use RuntimeException;
use Trikoder\Bundle\OAuth2Bundle\OAuth2Grants;

class Grant
{
    /**
     * @var string
     */
    private $grant;

    public function __construct(string $grant)
    {
        $this->grant = $grant;
    }

    public function __toString(): string
    {
        return $this->grant;
    }
}
