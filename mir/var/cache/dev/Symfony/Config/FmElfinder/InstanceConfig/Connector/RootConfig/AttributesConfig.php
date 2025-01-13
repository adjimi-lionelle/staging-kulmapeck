<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AttributesConfig 
{
    private $pattern;
    private $read;
    private $write;
    private $locked;
    private $hidden;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pattern($value): static
    {
        $this->_usedProperties['pattern'] = true;
        $this->pattern = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function read($value): static
    {
        $this->_usedProperties['read'] = true;
        $this->read = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function write($value): static
    {
        $this->_usedProperties['write'] = true;
        $this->write = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locked($value): static
    {
        $this->_usedProperties['locked'] = true;
        $this->locked = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hidden($value): static
    {
        $this->_usedProperties['hidden'] = true;
        $this->hidden = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('pattern', $value)) {
            $this->_usedProperties['pattern'] = true;
            $this->pattern = $value['pattern'];
            unset($value['pattern']);
        }

        if (array_key_exists('read', $value)) {
            $this->_usedProperties['read'] = true;
            $this->read = $value['read'];
            unset($value['read']);
        }

        if (array_key_exists('write', $value)) {
            $this->_usedProperties['write'] = true;
            $this->write = $value['write'];
            unset($value['write']);
        }

        if (array_key_exists('locked', $value)) {
            $this->_usedProperties['locked'] = true;
            $this->locked = $value['locked'];
            unset($value['locked']);
        }

        if (array_key_exists('hidden', $value)) {
            $this->_usedProperties['hidden'] = true;
            $this->hidden = $value['hidden'];
            unset($value['hidden']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['pattern'])) {
            $output['pattern'] = $this->pattern;
        }
        if (isset($this->_usedProperties['read'])) {
            $output['read'] = $this->read;
        }
        if (isset($this->_usedProperties['write'])) {
            $output['write'] = $this->write;
        }
        if (isset($this->_usedProperties['locked'])) {
            $output['locked'] = $this->locked;
        }
        if (isset($this->_usedProperties['hidden'])) {
            $output['hidden'] = $this->hidden;
        }

        return $output;
    }

}
