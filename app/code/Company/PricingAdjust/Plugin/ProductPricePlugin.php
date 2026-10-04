<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\PricingAdjust\Plugin;

use Company\PricingAdjust\Model\Config;
use Magento\Catalog\Model\Product;

class ProductPricePlugin
{
    /**
     * @param Config $config
     */
    public function __construct(
        private readonly Config $config
    ) {
    }

    /**
     * Apply the configured markup percentage to the product price.
     *
     * @param Product $subject
     * @param mixed $result
     * @return mixed
     */
    public function afterGetPrice(Product $subject, mixed $result): mixed
    {
        if (!is_numeric($result)) {
            return $result;
        }

        $markup = $this->config->getMarkupPercentage((int)$subject->getStoreId());
        if ($markup <= 0) {
            return $result;
        }

        return (float)$result * (1 + $markup / 100);
    }
}
