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
    private const XML_PATH_ENABLED = 'google_address_autocomplete/general/enabled',
        XML_PATH_GOOGLE_API_KEY = 'google_address_autocomplete/general/api_key';

    private const GOOGLE_API_URL =
        'https://maps.googleapis.com/maps/api/js?key=%s&loading=async&libraries=places&callback=googleReady';

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
        return sprintf(self::GOOGLE_API_URL, $this->getApiKey());
    }
}
