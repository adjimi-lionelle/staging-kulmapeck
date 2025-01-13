<?php

namespace Symfony\Config\FmElfinder\InstanceConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'BindsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Connector'.\DIRECTORY_SEPARATOR.'RootConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConnectorConfig 
{
    private $debug;
    private $binds;
    private $plugins;
    private $roots;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): static
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;

        return $this;
    }

    public function binds(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig
    {
        if (!isset($this->binds[$name])) {
            $this->_usedProperties['binds'] = true;
            $this->binds[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "binds()" has already been initialized. You cannot pass values the second time you call binds().');
        }

        return $this->binds[$name];
    }

    public function plugins(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
        }

        return $this->plugins[$name];
    }

    public function root(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig
    {
        if (!isset($this->roots[$name])) {
            $this->_usedProperties['roots'] = true;
            $this->roots[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "root()" has already been initialized. You cannot pass values the second time you call root().');
        }

        return $this->roots[$name];
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }

        if (array_key_exists('binds', $value)) {
            $this->_usedProperties['binds'] = true;
            $this->binds = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\BindsConfig($v); }, $value['binds']);
            unset($value['binds']);
        }

        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }

        if (array_key_exists('roots', $value)) {
            $this->_usedProperties['roots'] = true;
            $this->roots = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig($v); }, $value['roots']);
            unset($value['roots']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['binds'])) {
            $output['binds'] = array_map(function ($v) { return $v->toArray(); }, $this->binds);
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (isset($this->_usedProperties['roots'])) {
            $output['roots'] = array_map(function ($v) { return $v->toArray(); }, $this->roots);
        }

        return $output;
    }

}
