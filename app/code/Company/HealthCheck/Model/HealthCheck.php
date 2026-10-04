<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\HealthCheck\Model;

use Company\HealthCheck\Api\Data\HealthStatusInterface;
use Company\HealthCheck\Api\Data\HealthStatusInterfaceFactory;
use Company\HealthCheck\Api\HealthCheckInterface;

class HealthCheck implements HealthCheckInterface
{
    private const STATUS_OK = 'ok';
    private const MESSAGE_OK = 'El sistema está funcionando correctamente';

    /**
     * @param HealthStatusInterfaceFactory $healthStatusFactory
     */
    public function __construct(
        private readonly HealthStatusInterfaceFactory $healthStatusFactory
    ) {
    }

    /**
     * @inheritdoc
     */
    public function check(): HealthStatusInterface
    {
        return $this->healthStatusFactory->create([
            'status' => self::STATUS_OK,
            'message' => self::MESSAGE_OK,
        ]);
    }
}
