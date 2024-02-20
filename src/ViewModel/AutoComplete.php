<?php

/**
 * Copyright JC-Electronics. All rights reserved.
 * https://www.jc-electronics.com
 */

declare(strict_types=1);

namespace JcElectronics\HyvaGoogleAddressAutocomplete\ViewModel;

use JcElectronics\HyvaGoogleAddressAutocomplete\Model\Config;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class AutoComplete implements ArgumentInterface
{
    public function __construct(
        private readonly Config $config,
        private readonly array $autocompleteInputs = [],
        private readonly array $fieldMapping = []
    ) {
    }

    public function getAutocompleteInputs(): array
    {
        return $this->autocompleteInputs;
    }

    public function getFieldMapping(): array
    {
        return $this->fieldMapping;
    }

    public function getGoogleMapsUrl(): string
    {
        return $this->config->getGoogleMapsUrl();
    }
}
