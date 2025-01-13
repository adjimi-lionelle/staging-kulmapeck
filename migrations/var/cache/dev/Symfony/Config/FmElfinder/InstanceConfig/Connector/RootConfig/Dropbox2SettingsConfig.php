<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Dropbox2Settings'.\DIRECTORY_SEPARATOR.'PublishPermissionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class Dropbox2SettingsConfig 
{
    private $enabled;
    private $appKey;
    private $appSecret;
    private $accessToken;
    private $aliasFormat;
    private $path;
    private $separator;
    private $acceptedName;
    private $rootCssClass;
    private $publishPermission;
    private $getThumbSize;
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
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appKey($value): static
    {
        $this->_usedProperties['appKey'] = true;
        $this->appKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function appSecret($value): static
    {
        $this->_usedProperties['appSecret'] = true;
        $this->appSecret = $value;

        return $this;
    }

    /**
     * @default null
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
     * @default '%s@Dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function aliasFormat($value): static
    {
        $this->_usedProperties['aliasFormat'] = true;
        $this->aliasFormat = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function separator($value): static
    {
        $this->_usedProperties['separator'] = true;
        $this->separator = $value;

        return $this;
    }

    /**
     * @default '%s@Dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acceptedName($value): static
    {
        $this->_usedProperties['acceptedName'] = true;
        $this->acceptedName = $value;

        return $this;
    }

    /**
     * @default 'elfinder-navbar-root-dropbox'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootCssClass($value): static
    {
        $this->_usedProperties['rootCssClass'] = true;
        $this->rootCssClass = $value;

        return $this;
    }

    public function publishPermission(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig
    {
        if (null === $this->publishPermission) {
            $this->_usedProperties['publishPermission'] = true;
            $this->publishPermission = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "publishPermission()" has already been initialized. You cannot pass values the second time you call publishPermission().');
        }

        return $this->publishPermission;
    }

    /**
     * @default 'medium'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function getThumbSize($value): static
    {
        $this->_usedProperties['getThumbSize'] = true;
        $this->getThumbSize = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('app_key', $value)) {
            $this->_usedProperties['appKey'] = true;
            $this->appKey = $value['app_key'];
            unset($value['app_key']);
        }

        if (array_key_exists('app_secret', $value)) {
            $this->_usedProperties['appSecret'] = true;
            $this->appSecret = $value['app_secret'];
            unset($value['app_secret']);
        }

        if (array_key_exists('access_token', $value)) {
            $this->_usedProperties['accessToken'] = true;
            $this->accessToken = $value['access_token'];
            unset($value['access_token']);
        }

        if (array_key_exists('aliasFormat', $value)) {
            $this->_usedProperties['aliasFormat'] = true;
            $this->aliasFormat = $value['aliasFormat'];
            unset($value['aliasFormat']);
        }

        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('separator', $value)) {
            $this->_usedProperties['separator'] = true;
            $this->separator = $value['separator'];
            unset($value['separator']);
        }

        if (array_key_exists('acceptedName', $value)) {
            $this->_usedProperties['acceptedName'] = true;
            $this->acceptedName = $value['acceptedName'];
            unset($value['acceptedName']);
        }

        if (array_key_exists('rootCssClass', $value)) {
            $this->_usedProperties['rootCssClass'] = true;
            $this->rootCssClass = $value['rootCssClass'];
            unset($value['rootCssClass']);
        }

        if (array_key_exists('publishPermission', $value)) {
            $this->_usedProperties['publishPermission'] = true;
            $this->publishPermission = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2Settings\PublishPermissionConfig($value['publishPermission']);
            unset($value['publishPermission']);
        }

        if (array_key_exists('getThumbSize', $value)) {
            $this->_usedProperties['getThumbSize'] = true;
            $this->getThumbSize = $value['getThumbSize'];
            unset($value['getThumbSize']);
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
        if (isset($this->_usedProperties['appKey'])) {
            $output['app_key'] = $this->appKey;
        }
        if (isset($this->_usedProperties['appSecret'])) {
            $output['app_secret'] = $this->appSecret;
        }
        if (isset($this->_usedProperties['accessToken'])) {
            $output['access_token'] = $this->accessToken;
        }
        if (isset($this->_usedProperties['aliasFormat'])) {
            $output['aliasFormat'] = $this->aliasFormat;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['separator'])) {
            $output['separator'] = $this->separator;
        }
        if (isset($this->_usedProperties['acceptedName'])) {
            $output['acceptedName'] = $this->acceptedName;
        }
        if (isset($this->_usedProperties['rootCssClass'])) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (isset($this->_usedProperties['publishPermission'])) {
            $output['publishPermission'] = $this->publishPermission->toArray();
        }
        if (isset($this->_usedProperties['getThumbSize'])) {
            $output['getThumbSize'] = $this->getThumbSize;
        }

        return $output;
    }

}
