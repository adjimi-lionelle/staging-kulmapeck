<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PublishPermissionConfig 
{
    private $requestedVisibility;
    private $_usedProperties = [];

    /**
     * @default 'public'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function requestedVisibility($value): static
    {
        $this->_usedProperties['requestedVisibility'] = true;
        $this->requestedVisibility = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('requested_visibility', $value)) {
            $this->_usedProperties['requestedVisibility'] = true;
            $this->requestedVisibility = $value['requested_visibility'];
            unset($value['requested_visibility']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['requestedVisibility'])) {
            $output['requested_visibility'] = $this->requestedVisibility;
        }

        return $output;
    }

}
