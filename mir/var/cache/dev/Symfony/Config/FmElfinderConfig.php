<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FmElfinder'.\DIRECTORY_SEPARATOR.'InstanceConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FmElfinderConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $configurationProvider;
    private $assetsPath;
    private $loader;
    private $instances;
    private $_usedProperties = [];

    /**
     * @default 'fm_elfinder.configurator.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configurationProvider($value): static
    {
        $this->_usedProperties['configurationProvider'] = true;
        $this->configurationProvider = $value;

        return $this;
    }

    /**
     * @default 'assets'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetsPath($value): static
    {
        $this->_usedProperties['assetsPath'] = true;
        $this->assetsPath = $value;

        return $this;
    }

    /**
     * @default 'fm_elfinder.loader.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function loader($value): static
    {
        $this->_usedProperties['loader'] = true;
        $this->loader = $value;

        return $this;
    }

    public function instance(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig
    {
        if (!isset($this->instances[$name])) {
            $this->_usedProperties['instances'] = true;
            $this->instances[$name] = new \Symfony\Config\FmElfinder\InstanceConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "instance()" has already been initialized. You cannot pass values the second time you call instance().');
        }

        return $this->instances[$name];
    }

    public function getExtensionAlias(): string
    {
        return 'fm_elfinder';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('configuration_provider', $value)) {
            $this->_usedProperties['configurationProvider'] = true;
            $this->configurationProvider = $value['configuration_provider'];
            unset($value['configuration_provider']);
        }

        if (array_key_exists('assets_path', $value)) {
            $this->_usedProperties['assetsPath'] = true;
            $this->assetsPath = $value['assets_path'];
            unset($value['assets_path']);
        }

        if (array_key_exists('loader', $value)) {
            $this->_usedProperties['loader'] = true;
            $this->loader = $value['loader'];
            unset($value['loader']);
        }

        if (array_key_exists('instances', $value)) {
            $this->_usedProperties['instances'] = true;
            $this->instances = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig($v); }, $value['instances']);
            unset($value['instances']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['configurationProvider'])) {
            $output['configuration_provider'] = $this->configurationProvider;
        }
        if (isset($this->_usedProperties['assetsPath'])) {
            $output['assets_path'] = $this->assetsPath;
        }
        if (isset($this->_usedProperties['loader'])) {
            $output['loader'] = $this->loader;
        }
        if (isset($this->_usedProperties['instances'])) {
            $output['instances'] = array_map(function ($v) { return $v->toArray(); }, $this->instances);
        }

        return $output;
    }

}
