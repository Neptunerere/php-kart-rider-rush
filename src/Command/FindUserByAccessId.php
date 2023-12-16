<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Command;

class FindUserByAccessId implements CommandInterface
{
    /**
     * @var string
     */
    protected string $racerName;

    /**
     * @param string $racerName
     */
    public function __construct(string $racerName)
    {
        $this->racerName = $racerName;
    }

    public function getGameName()
    {
        return 'kartrush';
    }

    public function getMethod()
    {
        return 'id';
    }

    public function getVersion()
    {
        return 'v1';
    }

    public function getRequestMethod()
    {
        return 'GET';
    }

    public function getParams()
    {
        return array(
            'racer_name' => $this->racerName,
        );
    }
}