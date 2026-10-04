<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\PricingAdjust\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private const XML_PATH_MARKUP_PERCENTAGE = 'company_pricing/general/markup_percentage';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    /**
     * Get configured markup percentage for the given store.
     *
     * @param int|null $storeId
     * @return float
     */
    public function getMarkupPercentage(?int $storeId = null): float
    {
        return (float)$this->scopeConfig->getValue(
            self::XML_PATH_MARKUP_PERCENTAGE,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }
}
