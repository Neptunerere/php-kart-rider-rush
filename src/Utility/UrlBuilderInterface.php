<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Utility;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;

interface UrlBuilderInterface
{
    /**
     * @param string $baseUrl
     * @return self
     */
    public function setBaseUrl($baseUrl);

    /**
     * @return string
     */
    public function getBaseUrl();

    /**
     * @param CommandInterface $commandInterface
     * @return string
     */
    public function build(CommandInterface $commandInterface);
}