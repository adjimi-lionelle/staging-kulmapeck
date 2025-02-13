<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options;

require_once __DIR__.\DIRECTORY_SEPARATOR.'AwsS3V3'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AwsS3V3Config 
{
    private $enabled;
    private $key;
    private $secret;
    private $region;
    private $version;
    private $bucketName;
    private $optionalPrefix;
    private $endpoint;
    private $usePathStyleEndpoint;
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
    public function key($value): static
    {
        $this->_usedProperties['key'] = true;
        $this->key = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secret($value): static
    {
        $this->_usedProperties['secret'] = true;
        $this->secret = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function region($value): static
    {
        $this->_usedProperties['region'] = true;
        $this->region = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bucketName($value): static
    {
        $this->_usedProperties['bucketName'] = true;
        $this->bucketName = $value;

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

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function endpoint($value): static
    {
        $this->_usedProperties['endpoint'] = true;
        $this->endpoint = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function usePathStyleEndpoint($value): static
    {
        $this->_usedProperties['usePathStyleEndpoint'] = true;
        $this->usePathStyleEndpoint = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"ACL":""}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig : static)
     */
    public function options(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value;

            return $this;
        }

        if (!$this->options instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig($value);
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

        if (array_key_exists('key', $value)) {
            $this->_usedProperties['key'] = true;
            $this->key = $value['key'];
            unset($value['key']);
        }

        if (array_key_exists('secret', $value)) {
            $this->_usedProperties['secret'] = true;
            $this->secret = $value['secret'];
            unset($value['secret']);
        }

        if (array_key_exists('region', $value)) {
            $this->_usedProperties['region'] = true;
            $this->region = $value['region'];
            unset($value['region']);
        }

        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }

        if (array_key_exists('bucket_name', $value)) {
            $this->_usedProperties['bucketName'] = true;
            $this->bucketName = $value['bucket_name'];
            unset($value['bucket_name']);
        }

        if (array_key_exists('optional_prefix', $value)) {
            $this->_usedProperties['optionalPrefix'] = true;
            $this->optionalPrefix = $value['optional_prefix'];
            unset($value['optional_prefix']);
        }

        if (array_key_exists('endpoint', $value)) {
            $this->_usedProperties['endpoint'] = true;
            $this->endpoint = $value['endpoint'];
            unset($value['endpoint']);
        }

        if (array_key_exists('use_path_style_endpoint', $value)) {
            $this->_usedProperties['usePathStyleEndpoint'] = true;
            $this->usePathStyleEndpoint = $value['use_path_style_endpoint'];
            unset($value['use_path_style_endpoint']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = \is_array($value['options']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig($value['options']) : $value['options'];
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
        if (isset($this->_usedProperties['key'])) {
            $output['key'] = $this->key;
        }
        if (isset($this->_usedProperties['secret'])) {
            $output['secret'] = $this->secret;
        }
        if (isset($this->_usedProperties['region'])) {
            $output['region'] = $this->region;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['bucketName'])) {
            $output['bucket_name'] = $this->bucketName;
        }
        if (isset($this->_usedProperties['optionalPrefix'])) {
            $output['optional_prefix'] = $this->optionalPrefix;
        }
        if (isset($this->_usedProperties['endpoint'])) {
            $output['endpoint'] = $this->endpoint;
        }
        if (isset($this->_usedProperties['usePathStyleEndpoint'])) {
            $output['use_path_style_endpoint'] = $this->usePathStyleEndpoint;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3\OptionsConfig ? $this->options->toArray() : $this->options;
        }

        return $output;
    }

}
