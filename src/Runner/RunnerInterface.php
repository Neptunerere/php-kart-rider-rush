<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Runner;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;
use Neptunerere\PhpKartRiderRush\Configuration;

interface RunnerInterface
{
    /**
     * @param Configuration $config
     *
     * @return self
     */
    public function setConfig(Configuration $config);

    /**
     * @return Configuration
     */
    public function getConfig();

    /**
     * Run the command with the result of the previous runner.
     *
     * Obviously if this is the first runner then the result would be null. Maybe the result
     * should be some sort of interface as well?
     *
     * @param CommandInterface $command
     * @param $result
     *
     * @return mixed
     */
    public function run(CommandInterface $command, $result = null);
} 