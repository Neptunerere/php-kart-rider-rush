<?php

declare(strict_types=1);

namespace Neptunerere\PhpKartRiderRush;

use Neptunerere\PhpKartRiderRush\Exceptions\InvalidConfigOptionException;

class Configuration
{
    const API_KEY = 'api_key';
    const BASE_API_URL = 'base_api_url';

    /**
     * @var array
     */
    protected $_options = array(
        self::API_KEY => '',
        self::BASE_API_URL => 'https://open.api.nexon.com',
    );

    /**
     * @param array $options
     */
    public function __construct(array $options = array())
    {
        $this->setOptions($options);
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        foreach($options as $key => $value)
        {
            if(!array_key_exists($key, $this->_options))
            {
                throw new InvalidConfigOptionException(sprintf('"%s" is an invalid configuration option', $key));
            }

            $this->_options[$key] = $value;
        }
    }

    /**
     * @param string $apiKey
     * @return Configuration
     */
    public function setApiKey($apiKey)
    {
        $this->_options[self::API_KEY] = $apiKey;
        return $this;
    }
}