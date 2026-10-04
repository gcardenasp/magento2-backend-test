<?php
/**
 * Copyright © Company. All rights reserved.
 */
declare(strict_types=1);

namespace Company\HealthCheck\Console\Command;

use Company\HealthCheck\Api\HealthCheckInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HealthCheckCommand extends Command
{
    private const NAME = 'company:health:check';

    /**
     * @param HealthCheckInterface $healthCheck
     */
    public function __construct(
        private readonly HealthCheckInterface $healthCheck
    ) {
        parent::__construct();
    }

    /**
     * @inheritdoc
     */
    protected function configure(): void
    {
        $this->setName(self::NAME)
            ->setDescription('Muestra el estado básico del sistema');
        parent::configure();
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->healthCheck->check()->getMessage());

        return Command::SUCCESS;
    }
}
