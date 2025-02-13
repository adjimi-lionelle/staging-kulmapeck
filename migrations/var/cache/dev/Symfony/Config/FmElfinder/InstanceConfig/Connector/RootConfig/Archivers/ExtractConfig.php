<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ExtractConfig 
{
    private $cmd;
    private $argc;
    private $ext;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cmd($value): static
    {
        $this->_usedProperties['cmd'] = true;
        $this->cmd = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function argc($value): static
    {
        $this->_usedProperties['argc'] = true;
        $this->argc = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ext($value): static
    {
        $this->_usedProperties['ext'] = true;
        $this->ext = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cmd', $value)) {
            $this->_usedProperties['cmd'] = true;
            $this->cmd = $value['cmd'];
            unset($value['cmd']);
        }

        if (array_key_exists('argc', $value)) {
            $this->_usedProperties['argc'] = true;
            $this->argc = $value['argc'];
            unset($value['argc']);
        }

        if (array_key_exists('ext', $value)) {
            $this->_usedProperties['ext'] = true;
            $this->ext = $value['ext'];
            unset($value['ext']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['cmd'])) {
            $output['cmd'] = $this->cmd;
        }
        if (isset($this->_usedProperties['argc'])) {
            $output['argc'] = $this->argc;
        }
        if (isset($this->_usedProperties['ext'])) {
            $output['ext'] = $this->ext;
        }

        return $output;
    }

}
