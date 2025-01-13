<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OnedriveSettingsConfig 
{
    private $enabled;
    private $clientId;
    private $clientSecret;
    private $accessToken;
    private $root;
    private $oneDriveApiClient;
    private $path;
    private $separator;
    private $tmbPath;
    private $tmbURL;
    private $tmpPath;
    private $acceptedName;
    private $rootCssClass;
    private $useApiThumbnail;
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
    public function clientId($value): static
    {
        $this->_usedProperties['clientId'] = true;
        $this->clientId = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clientSecret($value): static
    {
        $this->_usedProperties['clientSecret'] = true;
        $this->clientSecret = $value;

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
     * @default 'OneDrive.com'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function root($value): static
    {
        $this->_usedProperties['root'] = true;
        $this->root = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function oneDriveApiClient($value): static
    {
        $this->_usedProperties['oneDriveApiClient'] = true;
        $this->oneDriveApiClient = $value;

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
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbPath($value): static
    {
        $this->_usedProperties['tmbPath'] = true;
        $this->tmbPath = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbURL($value): static
    {
        $this->_usedProperties['tmbURL'] = true;
        $this->tmbURL = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmpPath($value): static
    {
        $this->_usedProperties['tmpPath'] = true;
        $this->tmpPath = $value;

        return $this;
    }

    /**
     * @default '#^[^/\\?*:|"<>]*[^./\\?*:|"<>]$#'
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
     * @default 'elfinder-navbar-root-onedrive'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootCssClass($value): static
    {
        $this->_usedProperties['rootCssClass'] = true;
        $this->rootCssClass = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useApiThumbnail($value): static
    {
        $this->_usedProperties['useApiThumbnail'] = true;
        $this->useApiThumbnail = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('client_id', $value)) {
            $this->_usedProperties['clientId'] = true;
            $this->clientId = $value['client_id'];
            unset($value['client_id']);
        }

        if (array_key_exists('client_secret', $value)) {
            $this->_usedProperties['clientSecret'] = true;
            $this->clientSecret = $value['client_secret'];
            unset($value['client_secret']);
        }

        if (array_key_exists('accessToken', $value)) {
            $this->_usedProperties['accessToken'] = true;
            $this->accessToken = $value['accessToken'];
            unset($value['accessToken']);
        }

        if (array_key_exists('root', $value)) {
            $this->_usedProperties['root'] = true;
            $this->root = $value['root'];
            unset($value['root']);
        }

        if (array_key_exists('OneDriveApiClient', $value)) {
            $this->_usedProperties['oneDriveApiClient'] = true;
            $this->oneDriveApiClient = $value['OneDriveApiClient'];
            unset($value['OneDriveApiClient']);
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

        if (array_key_exists('tmbPath', $value)) {
            $this->_usedProperties['tmbPath'] = true;
            $this->tmbPath = $value['tmbPath'];
            unset($value['tmbPath']);
        }

        if (array_key_exists('tmbURL', $value)) {
            $this->_usedProperties['tmbURL'] = true;
            $this->tmbURL = $value['tmbURL'];
            unset($value['tmbURL']);
        }

        if (array_key_exists('tmpPath', $value)) {
            $this->_usedProperties['tmpPath'] = true;
            $this->tmpPath = $value['tmpPath'];
            unset($value['tmpPath']);
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

        if (array_key_exists('useApiThumbnail', $value)) {
            $this->_usedProperties['useApiThumbnail'] = true;
            $this->useApiThumbnail = $value['useApiThumbnail'];
            unset($value['useApiThumbnail']);
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
        if (isset($this->_usedProperties['clientId'])) {
            $output['client_id'] = $this->clientId;
        }
        if (isset($this->_usedProperties['clientSecret'])) {
            $output['client_secret'] = $this->clientSecret;
        }
        if (isset($this->_usedProperties['accessToken'])) {
            $output['accessToken'] = $this->accessToken;
        }
        if (isset($this->_usedProperties['root'])) {
            $output['root'] = $this->root;
        }
        if (isset($this->_usedProperties['oneDriveApiClient'])) {
            $output['OneDriveApiClient'] = $this->oneDriveApiClient;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['separator'])) {
            $output['separator'] = $this->separator;
        }
        if (isset($this->_usedProperties['tmbPath'])) {
            $output['tmbPath'] = $this->tmbPath;
        }
        if (isset($this->_usedProperties['tmbURL'])) {
            $output['tmbURL'] = $this->tmbURL;
        }
        if (isset($this->_usedProperties['tmpPath'])) {
            $output['tmpPath'] = $this->tmpPath;
        }
        if (isset($this->_usedProperties['acceptedName'])) {
            $output['acceptedName'] = $this->acceptedName;
        }
        if (isset($this->_usedProperties['rootCssClass'])) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (isset($this->_usedProperties['useApiThumbnail'])) {
            $output['useApiThumbnail'] = $this->useApiThumbnail;
        }

        return $output;
    }

}
