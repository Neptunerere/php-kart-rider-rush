<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Runner;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;
use Psr\Http\Message\ResponseInterface;

class GuzzleRunner extends GuzzleAsyncRunner
{
    /**
     * {@inheritdoc}
     *
     * @return ResponseInterface
     */
    public function run(CommandInterface $command, $result = null)
    {
        return parent::run($command, $result)->wait();
    }
}