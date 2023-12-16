<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Runner;

use Neptunerere\PhpKartRiderRush\Configuration;

abstract class AbstractRunner
{
    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param Configuration $config
     *
     * @return self
     */
    public function setConfig(Configuration $config)
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
} 