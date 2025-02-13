<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CopyComConfig 
{
    private $enabled;
    private $consumerKey;
    private $consumerSecret;
    private $accessToken;
    private $tokenSecret;
    private $optionalPrefix;
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
    public function consumerKey($value): static
    {
        $this->_usedProperties['consumerKey'] = true;
        $this->consumerKey = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function consumerSecret($value): static
    {
        $this->_usedProperties['consumerSecret'] = true;
        $this->consumerSecret = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accessToken($value): static
    {
        $this->_usedProperties['accessToken'] = true;
        $this->accessToken = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tokenSecret($value): static
    {
        $this->_usedProperties['tokenSecret'] = true;
        $this->tokenSecret = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function optionalPrefix($value): static
    {
        $this->_usedProperties['optionalPrefix'] = true;
        $this->optionalPrefix = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('consumer_key', $value)) {
            $this->_usedProperties['consumerKey'] = true;
            $this->consumerKey = $value['consumer_key'];
            unset($value['consumer_key']);
        }

        if (array_key_exists('consumer_secret', $value)) {
            $this->_usedProperties['consumerSecret'] = true;
            $this->consumerSecret = $value['consumer_secret'];
            unset($value['consumer_secret']);
        }

        if (array_key_exists('access_token', $value)) {
            $this->_usedProperties['accessToken'] = true;
            $this->accessToken = $value['access_token'];
            unset($value['access_token']);
        }

        if (array_key_exists('token_secret', $value)) {
            $this->_usedProperties['tokenSecret'] = true;
            $this->tokenSecret = $value['token_secret'];
            unset($value['token_secret']);
        }

        if (array_key_exists('optional_prefix', $value)) {
            $this->_usedProperties['optionalPrefix'] = true;
            $this->optionalPrefix = $value['optional_prefix'];
            unset($value['optional_prefix']);
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
        if (isset($this->_usedProperties['consumerKey'])) {
            $output['consumer_key'] = $this->consumerKey;
        }
        if (isset($this->_usedProperties['consumerSecret'])) {
            $output['consumer_secret'] = $this->consumerSecret;
        }
        if (isset($this->_usedProperties['accessToken'])) {
            $output['access_token'] = $this->accessToken;
        }
        if (isset($this->_usedProperties['tokenSecret'])) {
            $output['token_secret'] = $this->tokenSecret;
        }
        if (isset($this->_usedProperties['optionalPrefix'])) {
            $output['optional_prefix'] = $this->optionalPrefix;
        }

        return $output;
    }

}
