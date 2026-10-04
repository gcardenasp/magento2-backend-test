<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\HealthCheck\Api\Data;

/**
 * System health status data.
 *
 * @api
 */
interface HealthStatusInterface
{
    /**
     * Get status code.
     *
     * @return string
     */
    public function getStatus(): string;

    /**
     * Get status message.
     *
     * @return string
     */
    public function getMessage(): string;
}
