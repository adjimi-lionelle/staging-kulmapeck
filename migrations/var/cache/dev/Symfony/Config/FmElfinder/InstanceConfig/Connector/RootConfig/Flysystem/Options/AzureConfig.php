<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AzureConfig 
{
    private $enabled;
    private $accountName;
    private $accountKey;
    private $containerName;
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
    public function accountName($value): static
    {
        $this->_usedProperties['accountName'] = true;
        $this->accountName = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function accountKey($value): static
    {
        $this->_usedProperties['accountKey'] = true;
        $this->accountKey = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function containerName($value): static
    {
        $this->_usedProperties['containerName'] = true;
        $this->containerName = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('account_name', $value)) {
            $this->_usedProperties['accountName'] = true;
            $this->accountName = $value['account_name'];
            unset($value['account_name']);
        }

        if (array_key_exists('account_key', $value)) {
            $this->_usedProperties['accountKey'] = true;
            $this->accountKey = $value['account_key'];
            unset($value['account_key']);
        }

        if (array_key_exists('container_name', $value)) {
            $this->_usedProperties['containerName'] = true;
            $this->containerName = $value['container_name'];
            unset($value['container_name']);
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
        if (isset($this->_usedProperties['accountName'])) {
            $output['account_name'] = $this->accountName;
        }
        if (isset($this->_usedProperties['accountKey'])) {
            $output['account_key'] = $this->accountKey;
        }
        if (isset($this->_usedProperties['containerName'])) {
            $output['container_name'] = $this->containerName;
        }

        return $output;
    }

}
