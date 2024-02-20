<?php

/**
 * Copyright JC-Electronics. All rights reserved.
 * https://www.jc-electronics.com
 */

declare(strict_types=1);

namespace JcElectronics\HyvaGoogleAddressAutocomplete\Test\Model;

use JcElectronics\HyvaGoogleAddressAutocomplete\Model\Config;
use Magento\Framework\App\Config\ScopeConfigInterface;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \JcElectronics\HyvaGoogleAddressAutocomplete\Model\Config
 */
class ConfigTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getGoogleMapsUrl
     */
    public function testGetGoogleMapsUrl(): void
    {
        $subject = new Config(
            $this->createMock(ScopeConfigInterface::class)
        );

        $this->assertIsString($subject->getGoogleMapsUrl());
    }
}
