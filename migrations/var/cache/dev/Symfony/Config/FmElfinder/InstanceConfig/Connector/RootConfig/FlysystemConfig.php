<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Flysystem'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FlysystemConfig 
{
    private $enabled;
    private $filesystem;
    private $type;
    private $adapterService;
    private $options;
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
    public function filesystem($value): static
    {
        $this->_usedProperties['filesystem'] = true;
        $this->filesystem = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function adapterService($value): static
    {
        $this->_usedProperties['adapterService'] = true;
        $this->adapterService = $value;

        return $this;
    }

    public function options(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('filesystem', $value)) {
            $this->_usedProperties['filesystem'] = true;
            $this->filesystem = $value['filesystem'];
            unset($value['filesystem']);
        }

        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('adapter_service', $value)) {
            $this->_usedProperties['adapterService'] = true;
            $this->adapterService = $value['adapter_service'];
            unset($value['adapter_service']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\OptionsConfig($value['options']);
            unset($value['options']);
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
        if (isset($this->_usedProperties['filesystem'])) {
            $output['filesystem'] = $this->filesystem;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['adapterService'])) {
            $output['adapter_service'] = $this->adapterService;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }

        return $output;
    }

}
