<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush\Command\User;

use Neptunerere\PhpKartRiderRush\Command\CommandInterface;

class FindUserByName implements CommandInterface
{
    /**
     * @var string
     */
    protected string $ouid;

    /**
     * @param string $ouid
     */
    public function __construct(string $ouid)
    {
        $this->ouid = $ouid;
    }

    public function getGameName()
    {
        return 'kartrush';
    }

    public function getMethod()
    {
        return 'user/basic';
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
            'ouid' => $this->ouid,
        );
    }
}