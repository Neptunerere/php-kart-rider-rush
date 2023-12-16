<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;

class KartRiderRush
{
    /**
     * @var array
     */
    protected $runners = array();

    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function addRunners(array $runners)
    {
        foreach($runners as $runner) {
            $this->addRunner($runner);
        }

        return $this;
    }

    public function addRunner(RunnerInterface $runner)
    {
        $this->runners[] = $runner->setConfig($this->configuration);
        return $this;
    }

    public function run(CommandInterface $commandInterface)
    {
        $result = null;

        foreach($this->runners as $runner) {
            $result = $runner->run($commandInterface, $result);
        }

        return $result;
    }
}