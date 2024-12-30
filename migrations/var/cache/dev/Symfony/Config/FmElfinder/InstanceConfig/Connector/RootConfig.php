<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'AttributesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'ArchiversConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'FlysystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'PluginsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'DriverOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'Dropbox2SettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'BoxSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'OnedriveSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'FtpSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'RootConfig'.\DIRECTORY_SEPARATOR.'MysqlSettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RootConfig 
{
    private $driver;
    private $volumeId;
    private $path;
    private $autoload;
    private $phash;
    private $trashHash;
    private $locale;
    private $i18nFolderName;
    private $mimeDetect;
    private $mimefile;
    private $securityVoter;
    private $startPath;
    private $encoding;
    private $url;
    private $alias;
    private $imgLib;
    private $tmbPath;
    private $tmbPathMode;
    private $tmbUrl;
    private $tmbSize;
    private $tmbCrop;
    private $tmbBgColor;
    private $quarantine;
    private $copyOverwrite;
    private $copyJoin;
    private $copyFrom;
    private $copyTo;
    private $uploadOverwrite;
    private $fileMode;
    private $uploadAllow;
    private $uploadDeny;
    private $uploadOrder;
    private $uploadMaxSize;
    private $uploadMaxConn;
    private $defaults;
    private $attributes;
    private $acceptedName;
    private $showHidden;
    private $disabledCommands;
    private $treeDeep;
    private $checkSubfolders;
    private $separator;
    private $dateFormat;
    private $timeFormat;
    private $archiveMimes;
    private $archivers;
    private $flysystem;
    private $glideUrl;
    private $glideKey;
    private $plugins;
    private $driverOptions;
    private $dropbox2Settings;
    private $boxSettings;
    private $onedriveSettings;
    private $ftpSettings;
    private $mysqlSettings;
    private $_usedProperties = [];

    /**
     * @default 'LocalFileSystem'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): static
    {
        $this->_usedProperties['driver'] = true;
        $this->driver = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function volumeId($value): static
    {
        $this->_usedProperties['volumeId'] = true;
        $this->volumeId = $value;

        return $this;
    }

    /**
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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function autoload($value): static
    {
        $this->_usedProperties['autoload'] = true;
        $this->autoload = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phash($value): static
    {
        $this->_usedProperties['phash'] = true;
        $this->phash = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function trashHash($value): static
    {
        $this->_usedProperties['trashHash'] = true;
        $this->trashHash = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function locale($value): static
    {
        $this->_usedProperties['locale'] = true;
        $this->locale = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function i18nFolderName($value): static
    {
        $this->_usedProperties['i18nFolderName'] = true;
        $this->i18nFolderName = $value;

        return $this;
    }

    /**
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeDetect($value): static
    {
        $this->_usedProperties['mimeDetect'] = true;
        $this->mimeDetect = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimefile($value): static
    {
        $this->_usedProperties['mimefile'] = true;
        $this->mimefile = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityVoter($value): static
    {
        $this->_usedProperties['securityVoter'] = true;
        $this->securityVoter = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function startPath($value): static
    {
        $this->_usedProperties['startPath'] = true;
        $this->startPath = $value;

        return $this;
    }

    /**
     * @default 'UTF-8'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function encoding($value): static
    {
        $this->_usedProperties['encoding'] = true;
        $this->encoding = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function url($value): static
    {
        $this->_usedProperties['url'] = true;
        $this->url = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function alias($value): static
    {
        $this->_usedProperties['alias'] = true;
        $this->alias = $value;

        return $this;
    }

    /**
     * @default 'auto'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function imgLib($value): static
    {
        $this->_usedProperties['imgLib'] = true;
        $this->imgLib = $value;

        return $this;
    }

    /**
     * @default '.tmb'
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
     * @default 511
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbPathMode($value): static
    {
        $this->_usedProperties['tmbPathMode'] = true;
        $this->tmbPathMode = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbUrl($value): static
    {
        $this->_usedProperties['tmbUrl'] = true;
        $this->tmbUrl = $value;

        return $this;
    }

    /**
     * @default 48
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function tmbSize($value): static
    {
        $this->_usedProperties['tmbSize'] = true;
        $this->tmbSize = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tmbCrop($value): static
    {
        $this->_usedProperties['tmbCrop'] = true;
        $this->tmbCrop = $value;

        return $this;
    }

    /**
     * @default '#ffffff'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tmbBgColor($value): static
    {
        $this->_usedProperties['tmbBgColor'] = true;
        $this->tmbBgColor = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function quarantine($value): static
    {
        $this->_usedProperties['quarantine'] = true;
        $this->quarantine = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyOverwrite($value): static
    {
        $this->_usedProperties['copyOverwrite'] = true;
        $this->copyOverwrite = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyJoin($value): static
    {
        $this->_usedProperties['copyJoin'] = true;
        $this->copyJoin = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyFrom($value): static
    {
        $this->_usedProperties['copyFrom'] = true;
        $this->copyFrom = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function copyTo($value): static
    {
        $this->_usedProperties['copyTo'] = true;
        $this->copyTo = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function uploadOverwrite($value): static
    {
        $this->_usedProperties['uploadOverwrite'] = true;
        $this->uploadOverwrite = $value;

        return $this;
    }

    /**
     * @default 420
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fileMode($value): static
    {
        $this->_usedProperties['fileMode'] = true;
        $this->fileMode = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function uploadAllow(mixed $value): static
    {
        $this->_usedProperties['uploadAllow'] = true;
        $this->uploadAllow = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function uploadDeny(mixed $value): static
    {
        $this->_usedProperties['uploadDeny'] = true;
        $this->uploadDeny = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function uploadOrder(mixed $value): static
    {
        $this->_usedProperties['uploadOrder'] = true;
        $this->uploadOrder = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function uploadMaxSize($value): static
    {
        $this->_usedProperties['uploadMaxSize'] = true;
        $this->uploadMaxSize = $value;

        return $this;
    }

    /**
     * @default 3
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function uploadMaxConn($value): static
    {
        $this->_usedProperties['uploadMaxConn'] = true;
        $this->uploadMaxConn = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function defaults(string $defaults, ParamConfigurator|bool $value): static
    {
        $this->_usedProperties['defaults'] = true;
        $this->defaults[$defaults] = $value;

        return $this;
    }

    public function attributes(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig
    {
        $this->_usedProperties['attributes'] = true;

        return $this->attributes[] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig($value);
    }

    /**
     * @default '/^\\w[\\w\\s\\.\\%\\-]*$/u'
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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showHidden($value): static
    {
        $this->_usedProperties['showHidden'] = true;
        $this->showHidden = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function disabledCommands(mixed $value): static
    {
        $this->_usedProperties['disabledCommands'] = true;
        $this->disabledCommands = $value;

        return $this;
    }

    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function treeDeep($value): static
    {
        $this->_usedProperties['treeDeep'] = true;
        $this->treeDeep = $value;

        return $this;
    }

    /**
     * @default 1
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function checkSubfolders($value): static
    {
        $this->_usedProperties['checkSubfolders'] = true;
        $this->checkSubfolders = $value;

        return $this;
    }

    /**
     * @default '\\'
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
     * @default 'j M Y H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dateFormat($value): static
    {
        $this->_usedProperties['dateFormat'] = true;
        $this->dateFormat = $value;

        return $this;
    }

    /**
     * @default 'H:i'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function timeFormat($value): static
    {
        $this->_usedProperties['timeFormat'] = true;
        $this->timeFormat = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function archiveMimes(mixed $value): static
    {
        $this->_usedProperties['archiveMimes'] = true;
        $this->archiveMimes = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"create":[],"extract":[]}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig : static)
     */
    public function archivers(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['archivers'] = true;
            $this->archivers = $value;

            return $this;
        }

        if (!$this->archivers instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig) {
            $this->_usedProperties['archivers'] = true;
            $this->archivers = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "archivers()" has already been initialized. You cannot pass values the second time you call archivers().');
        }

        return $this->archivers;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"filesystem":"","type":"","adapter_service":""}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig : static)
     */
    public function flysystem(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['flysystem'] = true;
            $this->flysystem = $value;

            return $this;
        }

        if (!$this->flysystem instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig) {
            $this->_usedProperties['flysystem'] = true;
            $this->flysystem = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "flysystem()" has already been initialized. You cannot pass values the second time you call flysystem().');
        }

        return $this->flysystem;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function glideUrl($value): static
    {
        $this->_usedProperties['glideUrl'] = true;
        $this->glideUrl = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function glideKey($value): static
    {
        $this->_usedProperties['glideKey'] = true;
        $this->glideKey = $value;

        return $this;
    }

    public function plugins(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig
    {
        if (!isset($this->plugins[$name])) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "plugins()" has already been initialized. You cannot pass values the second time you call plugins().');
        }

        return $this->plugins[$name];
    }

    public function driverOptions(string $name, array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig
    {
        if (!isset($this->driverOptions[$name])) {
            $this->_usedProperties['driverOptions'] = true;
            $this->driverOptions[$name] = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "driverOptions()" has already been initialized. You cannot pass values the second time you call driverOptions().');
        }

        return $this->driverOptions[$name];
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"aliasFormat":"%s@Dropbox","path":"\/","separator":"\/","acceptedName":"%s@Dropbox","rootCssClass":"elfinder-navbar-root-dropbox","getThumbSize":"medium"}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig : static)
     */
    public function dropbox2Settings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['dropbox2Settings'] = true;
            $this->dropbox2Settings = $value;

            return $this;
        }

        if (!$this->dropbox2Settings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig) {
            $this->_usedProperties['dropbox2Settings'] = true;
            $this->dropbox2Settings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dropbox2Settings()" has already been initialized. You cannot pass values the second time you call dropbox2Settings().');
        }

        return $this->dropbox2Settings;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"root":"Box.com","path":"\/","separator":"\/","tmbPath":"","tmbURL":"","tmpPath":"","acceptedName":"#^[^\/\\?*:|\"<>]*[^.\/\\?*:|\"<>]$#","rootCssClass":"elfinder-navbar-root-box"}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig : static)
     */
    public function boxSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['boxSettings'] = true;
            $this->boxSettings = $value;

            return $this;
        }

        if (!$this->boxSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig) {
            $this->_usedProperties['boxSettings'] = true;
            $this->boxSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "boxSettings()" has already been initialized. You cannot pass values the second time you call boxSettings().');
        }

        return $this->boxSettings;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"root":"OneDrive.com","OneDriveApiClient":"","path":"\/","separator":"\/","tmbPath":"","tmbURL":"","tmpPath":"","acceptedName":"#^[^\/\\?*:|\"<>]*[^.\/\\?*:|\"<>]$#","rootCssClass":"elfinder-navbar-root-onedrive","useApiThumbnail":true}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig : static)
     */
    public function onedriveSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['onedriveSettings'] = true;
            $this->onedriveSettings = $value;

            return $this;
        }

        if (!$this->onedriveSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig) {
            $this->_usedProperties['onedriveSettings'] = true;
            $this->onedriveSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "onedriveSettings()" has already been initialized. You cannot pass values the second time you call onedriveSettings().');
        }

        return $this->onedriveSettings;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig : static)
     */
    public function ftpSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['ftpSettings'] = true;
            $this->ftpSettings = $value;

            return $this;
        }

        if (!$this->ftpSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig) {
            $this->_usedProperties['ftpSettings'] = true;
            $this->ftpSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ftpSettings()" has already been initialized. You cannot pass values the second time you call ftpSettings().');
        }

        return $this->ftpSettings;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @default {"enabled":false,"port":null,"socket":null,"files_table":"elfinder_file","tmbPath":"","tmpPath":"","rootCssClass":"elfinder-navbar-root-sql","noSessionCache":"hasdirs"}
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig : static)
     */
    public function mysqlSettings(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['mysqlSettings'] = true;
            $this->mysqlSettings = $value;

            return $this;
        }

        if (!$this->mysqlSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig) {
            $this->_usedProperties['mysqlSettings'] = true;
            $this->mysqlSettings = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mysqlSettings()" has already been initialized. You cannot pass values the second time you call mysqlSettings().');
        }

        return $this->mysqlSettings;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('driver', $value)) {
            $this->_usedProperties['driver'] = true;
            $this->driver = $value['driver'];
            unset($value['driver']);
        }

        if (array_key_exists('volume_id', $value)) {
            $this->_usedProperties['volumeId'] = true;
            $this->volumeId = $value['volume_id'];
            unset($value['volume_id']);
        }

        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('autoload', $value)) {
            $this->_usedProperties['autoload'] = true;
            $this->autoload = $value['autoload'];
            unset($value['autoload']);
        }

        if (array_key_exists('phash', $value)) {
            $this->_usedProperties['phash'] = true;
            $this->phash = $value['phash'];
            unset($value['phash']);
        }

        if (array_key_exists('trash_hash', $value)) {
            $this->_usedProperties['trashHash'] = true;
            $this->trashHash = $value['trash_hash'];
            unset($value['trash_hash']);
        }

        if (array_key_exists('locale', $value)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $value['locale'];
            unset($value['locale']);
        }

        if (array_key_exists('i18n_folder_name', $value)) {
            $this->_usedProperties['i18nFolderName'] = true;
            $this->i18nFolderName = $value['i18n_folder_name'];
            unset($value['i18n_folder_name']);
        }

        if (array_key_exists('mime_detect', $value)) {
            $this->_usedProperties['mimeDetect'] = true;
            $this->mimeDetect = $value['mime_detect'];
            unset($value['mime_detect']);
        }

        if (array_key_exists('mimefile', $value)) {
            $this->_usedProperties['mimefile'] = true;
            $this->mimefile = $value['mimefile'];
            unset($value['mimefile']);
        }

        if (array_key_exists('security_voter', $value)) {
            $this->_usedProperties['securityVoter'] = true;
            $this->securityVoter = $value['security_voter'];
            unset($value['security_voter']);
        }

        if (array_key_exists('start_path', $value)) {
            $this->_usedProperties['startPath'] = true;
            $this->startPath = $value['start_path'];
            unset($value['start_path']);
        }

        if (array_key_exists('encoding', $value)) {
            $this->_usedProperties['encoding'] = true;
            $this->encoding = $value['encoding'];
            unset($value['encoding']);
        }

        if (array_key_exists('url', $value)) {
            $this->_usedProperties['url'] = true;
            $this->url = $value['url'];
            unset($value['url']);
        }

        if (array_key_exists('alias', $value)) {
            $this->_usedProperties['alias'] = true;
            $this->alias = $value['alias'];
            unset($value['alias']);
        }

        if (array_key_exists('img_lib', $value)) {
            $this->_usedProperties['imgLib'] = true;
            $this->imgLib = $value['img_lib'];
            unset($value['img_lib']);
        }

        if (array_key_exists('tmb_path', $value)) {
            $this->_usedProperties['tmbPath'] = true;
            $this->tmbPath = $value['tmb_path'];
            unset($value['tmb_path']);
        }

        if (array_key_exists('tmb_path_mode', $value)) {
            $this->_usedProperties['tmbPathMode'] = true;
            $this->tmbPathMode = $value['tmb_path_mode'];
            unset($value['tmb_path_mode']);
        }

        if (array_key_exists('tmb_url', $value)) {
            $this->_usedProperties['tmbUrl'] = true;
            $this->tmbUrl = $value['tmb_url'];
            unset($value['tmb_url']);
        }

        if (array_key_exists('tmb_size', $value)) {
            $this->_usedProperties['tmbSize'] = true;
            $this->tmbSize = $value['tmb_size'];
            unset($value['tmb_size']);
        }

        if (array_key_exists('tmb_crop', $value)) {
            $this->_usedProperties['tmbCrop'] = true;
            $this->tmbCrop = $value['tmb_crop'];
            unset($value['tmb_crop']);
        }

        if (array_key_exists('tmb_bg_color', $value)) {
            $this->_usedProperties['tmbBgColor'] = true;
            $this->tmbBgColor = $value['tmb_bg_color'];
            unset($value['tmb_bg_color']);
        }

        if (array_key_exists('quarantine', $value)) {
            $this->_usedProperties['quarantine'] = true;
            $this->quarantine = $value['quarantine'];
            unset($value['quarantine']);
        }

        if (array_key_exists('copy_overwrite', $value)) {
            $this->_usedProperties['copyOverwrite'] = true;
            $this->copyOverwrite = $value['copy_overwrite'];
            unset($value['copy_overwrite']);
        }

        if (array_key_exists('copy_join', $value)) {
            $this->_usedProperties['copyJoin'] = true;
            $this->copyJoin = $value['copy_join'];
            unset($value['copy_join']);
        }

        if (array_key_exists('copy_from', $value)) {
            $this->_usedProperties['copyFrom'] = true;
            $this->copyFrom = $value['copy_from'];
            unset($value['copy_from']);
        }

        if (array_key_exists('copy_to', $value)) {
            $this->_usedProperties['copyTo'] = true;
            $this->copyTo = $value['copy_to'];
            unset($value['copy_to']);
        }

        if (array_key_exists('upload_overwrite', $value)) {
            $this->_usedProperties['uploadOverwrite'] = true;
            $this->uploadOverwrite = $value['upload_overwrite'];
            unset($value['upload_overwrite']);
        }

        if (array_key_exists('fileMode', $value)) {
            $this->_usedProperties['fileMode'] = true;
            $this->fileMode = $value['fileMode'];
            unset($value['fileMode']);
        }

        if (array_key_exists('upload_allow', $value)) {
            $this->_usedProperties['uploadAllow'] = true;
            $this->uploadAllow = $value['upload_allow'];
            unset($value['upload_allow']);
        }

        if (array_key_exists('upload_deny', $value)) {
            $this->_usedProperties['uploadDeny'] = true;
            $this->uploadDeny = $value['upload_deny'];
            unset($value['upload_deny']);
        }

        if (array_key_exists('upload_order', $value)) {
            $this->_usedProperties['uploadOrder'] = true;
            $this->uploadOrder = $value['upload_order'];
            unset($value['upload_order']);
        }

        if (array_key_exists('upload_max_size', $value)) {
            $this->_usedProperties['uploadMaxSize'] = true;
            $this->uploadMaxSize = $value['upload_max_size'];
            unset($value['upload_max_size']);
        }

        if (array_key_exists('upload_max_conn', $value)) {
            $this->_usedProperties['uploadMaxConn'] = true;
            $this->uploadMaxConn = $value['upload_max_conn'];
            unset($value['upload_max_conn']);
        }

        if (array_key_exists('defaults', $value)) {
            $this->_usedProperties['defaults'] = true;
            $this->defaults = $value['defaults'];
            unset($value['defaults']);
        }

        if (array_key_exists('attributes', $value)) {
            $this->_usedProperties['attributes'] = true;
            $this->attributes = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\AttributesConfig($v); }, $value['attributes']);
            unset($value['attributes']);
        }

        if (array_key_exists('accepted_name', $value)) {
            $this->_usedProperties['acceptedName'] = true;
            $this->acceptedName = $value['accepted_name'];
            unset($value['accepted_name']);
        }

        if (array_key_exists('show_hidden', $value)) {
            $this->_usedProperties['showHidden'] = true;
            $this->showHidden = $value['show_hidden'];
            unset($value['show_hidden']);
        }

        if (array_key_exists('disabled_commands', $value)) {
            $this->_usedProperties['disabledCommands'] = true;
            $this->disabledCommands = $value['disabled_commands'];
            unset($value['disabled_commands']);
        }

        if (array_key_exists('tree_deep', $value)) {
            $this->_usedProperties['treeDeep'] = true;
            $this->treeDeep = $value['tree_deep'];
            unset($value['tree_deep']);
        }

        if (array_key_exists('check_subfolders', $value)) {
            $this->_usedProperties['checkSubfolders'] = true;
            $this->checkSubfolders = $value['check_subfolders'];
            unset($value['check_subfolders']);
        }

        if (array_key_exists('separator', $value)) {
            $this->_usedProperties['separator'] = true;
            $this->separator = $value['separator'];
            unset($value['separator']);
        }

        if (array_key_exists('date_format', $value)) {
            $this->_usedProperties['dateFormat'] = true;
            $this->dateFormat = $value['date_format'];
            unset($value['date_format']);
        }

        if (array_key_exists('time_format', $value)) {
            $this->_usedProperties['timeFormat'] = true;
            $this->timeFormat = $value['time_format'];
            unset($value['time_format']);
        }

        if (array_key_exists('archive_mimes', $value)) {
            $this->_usedProperties['archiveMimes'] = true;
            $this->archiveMimes = $value['archive_mimes'];
            unset($value['archive_mimes']);
        }

        if (array_key_exists('archivers', $value)) {
            $this->_usedProperties['archivers'] = true;
            $this->archivers = \is_array($value['archivers']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig($value['archivers']) : $value['archivers'];
            unset($value['archivers']);
        }

        if (array_key_exists('flysystem', $value)) {
            $this->_usedProperties['flysystem'] = true;
            $this->flysystem = \is_array($value['flysystem']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig($value['flysystem']) : $value['flysystem'];
            unset($value['flysystem']);
        }

        if (array_key_exists('glide_url', $value)) {
            $this->_usedProperties['glideUrl'] = true;
            $this->glideUrl = $value['glide_url'];
            unset($value['glide_url']);
        }

        if (array_key_exists('glide_key', $value)) {
            $this->_usedProperties['glideKey'] = true;
            $this->glideKey = $value['glide_key'];
            unset($value['glide_key']);
        }

        if (array_key_exists('plugins', $value)) {
            $this->_usedProperties['plugins'] = true;
            $this->plugins = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\PluginsConfig($v); }, $value['plugins']);
            unset($value['plugins']);
        }

        if (array_key_exists('driver_options', $value)) {
            $this->_usedProperties['driverOptions'] = true;
            $this->driverOptions = array_map(function ($v) { return new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\DriverOptionsConfig($v); }, $value['driver_options']);
            unset($value['driver_options']);
        }

        if (array_key_exists('dropbox2_settings', $value)) {
            $this->_usedProperties['dropbox2Settings'] = true;
            $this->dropbox2Settings = \is_array($value['dropbox2_settings']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig($value['dropbox2_settings']) : $value['dropbox2_settings'];
            unset($value['dropbox2_settings']);
        }

        if (array_key_exists('box_settings', $value)) {
            $this->_usedProperties['boxSettings'] = true;
            $this->boxSettings = \is_array($value['box_settings']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig($value['box_settings']) : $value['box_settings'];
            unset($value['box_settings']);
        }

        if (array_key_exists('onedrive_settings', $value)) {
            $this->_usedProperties['onedriveSettings'] = true;
            $this->onedriveSettings = \is_array($value['onedrive_settings']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig($value['onedrive_settings']) : $value['onedrive_settings'];
            unset($value['onedrive_settings']);
        }

        if (array_key_exists('ftp_settings', $value)) {
            $this->_usedProperties['ftpSettings'] = true;
            $this->ftpSettings = \is_array($value['ftp_settings']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig($value['ftp_settings']) : $value['ftp_settings'];
            unset($value['ftp_settings']);
        }

        if (array_key_exists('mysql_settings', $value)) {
            $this->_usedProperties['mysqlSettings'] = true;
            $this->mysqlSettings = \is_array($value['mysql_settings']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig($value['mysql_settings']) : $value['mysql_settings'];
            unset($value['mysql_settings']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['driver'])) {
            $output['driver'] = $this->driver;
        }
        if (isset($this->_usedProperties['volumeId'])) {
            $output['volume_id'] = $this->volumeId;
        }
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['autoload'])) {
            $output['autoload'] = $this->autoload;
        }
        if (isset($this->_usedProperties['phash'])) {
            $output['phash'] = $this->phash;
        }
        if (isset($this->_usedProperties['trashHash'])) {
            $output['trash_hash'] = $this->trashHash;
        }
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['i18nFolderName'])) {
            $output['i18n_folder_name'] = $this->i18nFolderName;
        }
        if (isset($this->_usedProperties['mimeDetect'])) {
            $output['mime_detect'] = $this->mimeDetect;
        }
        if (isset($this->_usedProperties['mimefile'])) {
            $output['mimefile'] = $this->mimefile;
        }
        if (isset($this->_usedProperties['securityVoter'])) {
            $output['security_voter'] = $this->securityVoter;
        }
        if (isset($this->_usedProperties['startPath'])) {
            $output['start_path'] = $this->startPath;
        }
        if (isset($this->_usedProperties['encoding'])) {
            $output['encoding'] = $this->encoding;
        }
        if (isset($this->_usedProperties['url'])) {
            $output['url'] = $this->url;
        }
        if (isset($this->_usedProperties['alias'])) {
            $output['alias'] = $this->alias;
        }
        if (isset($this->_usedProperties['imgLib'])) {
            $output['img_lib'] = $this->imgLib;
        }
        if (isset($this->_usedProperties['tmbPath'])) {
            $output['tmb_path'] = $this->tmbPath;
        }
        if (isset($this->_usedProperties['tmbPathMode'])) {
            $output['tmb_path_mode'] = $this->tmbPathMode;
        }
        if (isset($this->_usedProperties['tmbUrl'])) {
            $output['tmb_url'] = $this->tmbUrl;
        }
        if (isset($this->_usedProperties['tmbSize'])) {
            $output['tmb_size'] = $this->tmbSize;
        }
        if (isset($this->_usedProperties['tmbCrop'])) {
            $output['tmb_crop'] = $this->tmbCrop;
        }
        if (isset($this->_usedProperties['tmbBgColor'])) {
            $output['tmb_bg_color'] = $this->tmbBgColor;
        }
        if (isset($this->_usedProperties['quarantine'])) {
            $output['quarantine'] = $this->quarantine;
        }
        if (isset($this->_usedProperties['copyOverwrite'])) {
            $output['copy_overwrite'] = $this->copyOverwrite;
        }
        if (isset($this->_usedProperties['copyJoin'])) {
            $output['copy_join'] = $this->copyJoin;
        }
        if (isset($this->_usedProperties['copyFrom'])) {
            $output['copy_from'] = $this->copyFrom;
        }
        if (isset($this->_usedProperties['copyTo'])) {
            $output['copy_to'] = $this->copyTo;
        }
        if (isset($this->_usedProperties['uploadOverwrite'])) {
            $output['upload_overwrite'] = $this->uploadOverwrite;
        }
        if (isset($this->_usedProperties['fileMode'])) {
            $output['fileMode'] = $this->fileMode;
        }
        if (isset($this->_usedProperties['uploadAllow'])) {
            $output['upload_allow'] = $this->uploadAllow;
        }
        if (isset($this->_usedProperties['uploadDeny'])) {
            $output['upload_deny'] = $this->uploadDeny;
        }
        if (isset($this->_usedProperties['uploadOrder'])) {
            $output['upload_order'] = $this->uploadOrder;
        }
        if (isset($this->_usedProperties['uploadMaxSize'])) {
            $output['upload_max_size'] = $this->uploadMaxSize;
        }
        if (isset($this->_usedProperties['uploadMaxConn'])) {
            $output['upload_max_conn'] = $this->uploadMaxConn;
        }
        if (isset($this->_usedProperties['defaults'])) {
            $output['defaults'] = $this->defaults;
        }
        if (isset($this->_usedProperties['attributes'])) {
            $output['attributes'] = array_map(function ($v) { return $v->toArray(); }, $this->attributes);
        }
        if (isset($this->_usedProperties['acceptedName'])) {
            $output['accepted_name'] = $this->acceptedName;
        }
        if (isset($this->_usedProperties['showHidden'])) {
            $output['show_hidden'] = $this->showHidden;
        }
        if (isset($this->_usedProperties['disabledCommands'])) {
            $output['disabled_commands'] = $this->disabledCommands;
        }
        if (isset($this->_usedProperties['treeDeep'])) {
            $output['tree_deep'] = $this->treeDeep;
        }
        if (isset($this->_usedProperties['checkSubfolders'])) {
            $output['check_subfolders'] = $this->checkSubfolders;
        }
        if (isset($this->_usedProperties['separator'])) {
            $output['separator'] = $this->separator;
        }
        if (isset($this->_usedProperties['dateFormat'])) {
            $output['date_format'] = $this->dateFormat;
        }
        if (isset($this->_usedProperties['timeFormat'])) {
            $output['time_format'] = $this->timeFormat;
        }
        if (isset($this->_usedProperties['archiveMimes'])) {
            $output['archive_mimes'] = $this->archiveMimes;
        }
        if (isset($this->_usedProperties['archivers'])) {
            $output['archivers'] = $this->archivers instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\ArchiversConfig ? $this->archivers->toArray() : $this->archivers;
        }
        if (isset($this->_usedProperties['flysystem'])) {
            $output['flysystem'] = $this->flysystem instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FlysystemConfig ? $this->flysystem->toArray() : $this->flysystem;
        }
        if (isset($this->_usedProperties['glideUrl'])) {
            $output['glide_url'] = $this->glideUrl;
        }
        if (isset($this->_usedProperties['glideKey'])) {
            $output['glide_key'] = $this->glideKey;
        }
        if (isset($this->_usedProperties['plugins'])) {
            $output['plugins'] = array_map(function ($v) { return $v->toArray(); }, $this->plugins);
        }
        if (isset($this->_usedProperties['driverOptions'])) {
            $output['driver_options'] = array_map(function ($v) { return $v->toArray(); }, $this->driverOptions);
        }
        if (isset($this->_usedProperties['dropbox2Settings'])) {
            $output['dropbox2_settings'] = $this->dropbox2Settings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Dropbox2SettingsConfig ? $this->dropbox2Settings->toArray() : $this->dropbox2Settings;
        }
        if (isset($this->_usedProperties['boxSettings'])) {
            $output['box_settings'] = $this->boxSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\BoxSettingsConfig ? $this->boxSettings->toArray() : $this->boxSettings;
        }
        if (isset($this->_usedProperties['onedriveSettings'])) {
            $output['onedrive_settings'] = $this->onedriveSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\OnedriveSettingsConfig ? $this->onedriveSettings->toArray() : $this->onedriveSettings;
        }
        if (isset($this->_usedProperties['ftpSettings'])) {
            $output['ftp_settings'] = $this->ftpSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\FtpSettingsConfig ? $this->ftpSettings->toArray() : $this->ftpSettings;
        }
        if (isset($this->_usedProperties['mysqlSettings'])) {
            $output['mysql_settings'] = $this->mysqlSettings instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\MysqlSettingsConfig ? $this->mysqlSettings->toArray() : $this->mysqlSettings;
        }

        return $output;
    }

}
