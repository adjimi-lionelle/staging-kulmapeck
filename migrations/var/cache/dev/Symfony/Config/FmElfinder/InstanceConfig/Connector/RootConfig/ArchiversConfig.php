<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Archivers'.\DIRECTORY_SEPARATOR.'CreateConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Archivers'.\DIRECTORY_SEPARATOR.'ExtractConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ArchiversConfig 
{
    private $enabled;
    private $create;
    private $extract;
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

    public function create(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig
    {
        $this->_usedProperties['create'] = true;

        return $this->create[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig($value);
    }

    public function extract(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig
    {
        $this->_usedProperties['extract'] = true;

        return $this->extract[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig($value);
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('create', $value)) {
            $this->_usedProperties['create'] = true;
            $this->create = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\CreateConfig($v); }, $value['create']);
            unset($value['create']);
        }

        if (array_key_exists('extract', $value)) {
            $this->_usedProperties['extract'] = true;
            $this->extract = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Archivers\ExtractConfig($v); }, $value['extract']);
            unset($value['extract']);
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
        if (isset($this->_usedProperties['create'])) {
            $output['create'] = array_map(function ($v) { return $v->toArray(); }, $this->create);
        }
        if (isset($this->_usedProperties['extract'])) {
            $output['extract'] = array_map(function ($v) { return $v->toArray(); }, $this->extract);
        }

        return $output;
    }

}
