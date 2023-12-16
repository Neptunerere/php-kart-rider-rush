<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Runner;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;
use Neptunerere\PhpKartRiderRush\Runner\AbstractRunner;
use Psr\Http\Message\ResponseInterface;

class DecodeJsonStringRunner extends AbstractRunner implements RunnerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \Psr\Http\Message\ResponseInterface $result
     */
    public function run(CommandInterface $command, $result = null)
    {
        if(!$result instanceof ResponseInterface) {
            throw new \InvalidArgumentException(
                'The result needs to be an instance of GuzzleHttp\Message\ResponseInterface');
        }

        return json_decode($result->getBody()->getContents(), true);
    }
}