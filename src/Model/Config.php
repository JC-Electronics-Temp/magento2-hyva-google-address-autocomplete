<?php

/**
 * Copyright JC-Electronics. All rights reserved.
 * https://www.jc-electronics.com
 */

declare(strict_types=1);

namespace JcElectronics\HyvaGoogleAddressAutocomplete\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    private const XML_PATH_ENABLED = '',
        XML_PATH_GOOGLE_API_KEY = '';

    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    public function isEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLED
        );
    }

    public function getApiKey(): ?string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_GOOGLE_API_KEY
        );
    }

    public function getGoogleMapsUrl(): string
    {
        return sprintf(
            'https://maps.googleapis.com/maps/api/js?key=%s&libraries=places&callback=googleReady',
            $this->getApiKey()
        );
    }
}
