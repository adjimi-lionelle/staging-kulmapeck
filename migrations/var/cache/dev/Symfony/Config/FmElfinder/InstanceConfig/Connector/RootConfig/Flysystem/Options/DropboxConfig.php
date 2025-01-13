<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DropboxConfig 
{
    private $enabled;
    private $app;
    private $token;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function app($value): static
    {
        $this->_usedProperties['app'] = true;
        $this->app = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function token($value): static
    {
        $this->_usedProperties['token'] = true;
        $this->token = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('app', $value)) {
            $this->_usedProperties['app'] = true;
            $this->app = $value['app'];
            unset($value['app']);
        }

        if (array_key_exists('token', $value)) {
            $this->_usedProperties['token'] = true;
            $this->token = $value['token'];
            unset($value['token']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['app'])) {
            $output['app'] = $this->app;
        }
        if (isset($this->_usedProperties['token'])) {
            $output['token'] = $this->token;
        }

        return $output;
    }

}
