<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Command;

interface CommandInterface
{
    /**
     * @return string
     */
    public function getGameName();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getRequestMethod();
    
    /**
     * @return array
     */
    public function getParams();
}