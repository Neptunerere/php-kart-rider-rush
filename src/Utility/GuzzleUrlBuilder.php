<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Utility;

use GuzzleHttp\Psr7\Uri;
use Neptunerere\PhpKartRiderRush\Command\CommandInterface;
use Neptunerere\PhpKartRiderRush\Utility\UrlBuilderInterface;

class GuzzleUrlBuilder implements UrlBuilderInterface
{
    /**
     * @var string
     */
    protected string $baseUrl = "";

    /**
     * {@inheritdoc}
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function build(CommandInterface $commandInterface)
    {
        $uri = sprintf('%s/%s/%s/%s',
            $commandInterface->getGameName(),
            rtrim($this->getBaseUrl()),
            $commandInterface->getVersion(),
            $commandInterface->getMethod(),
        );

        return new Uri($uri);
    }
}