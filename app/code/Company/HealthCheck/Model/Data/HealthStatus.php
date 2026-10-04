<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\HealthCheck\Model\Data;

use Company\HealthCheck\Api\Data\HealthStatusInterface;

class HealthStatus implements HealthStatusInterface
{
    /**
     * @param string $status
     * @param string $message
     */
    public function __construct(
        private readonly string $status,
        private readonly string $message
    ) {
    }

    /**
     * @inheritdoc
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
