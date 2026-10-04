<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\HealthCheck\Api;

use Company\HealthCheck\Api\Data\HealthStatusInterface;

/**
 * Basic system health check service.
 *
 * @api
 */
interface HealthCheckInterface
{
    /**
     * Get the current system status.
     *
     * @return \Company\HealthCheck\Api\Data\HealthStatusInterface
     */
    public function check(): HealthStatusInterface;
}
