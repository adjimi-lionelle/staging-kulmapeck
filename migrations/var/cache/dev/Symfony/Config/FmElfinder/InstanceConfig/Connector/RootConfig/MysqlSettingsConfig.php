<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MysqlSettingsConfig 
{
    private $enabled;
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    private $socket;
    private $filesTable;
    private $tmbPath;
    private $tmpPath;
    private $rootCssClass;
    private $noSessionCache;
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
    public function host($value): static
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function user($value): static
    {
        $this->_usedProperties['user'] = true;
        $this->user = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pass($value): static
    {
        $this->_usedProperties['pass'] = true;
        $this->pass = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function db($value): static
    {
        $this->_usedProperties['db'] = true;
        $this->db = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): static
    {
        $this->_usedProperties['port'] = true;
        $this->port = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function socket($value): static
    {
        $this->_usedProperties['socket'] = true;
        $this->socket = $value;

        return $this;
    }

    /**
     * @default 'elfinder_file'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesTable($value): static
    {
        $this->_usedProperties['filesTable'] = true;
        $this->filesTable = $value;

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
    public function tmpPath($value): static
    {
        $this->_usedProperties['tmpPath'] = true;
        $this->tmpPath = $value;

        return $this;
    }

    /**
     * @default 'elfinder-navbar-root-sql'
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
     * @default 'hasdirs'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function noSessionCache($value): static
    {
        $this->_usedProperties['noSessionCache'] = true;
        $this->noSessionCache = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('user', $value)) {
            $this->_usedProperties['user'] = true;
            $this->user = $value['user'];
            unset($value['user']);
        }

        if (array_key_exists('pass', $value)) {
            $this->_usedProperties['pass'] = true;
            $this->pass = $value['pass'];
            unset($value['pass']);
        }

        if (array_key_exists('db', $value)) {
            $this->_usedProperties['db'] = true;
            $this->db = $value['db'];
            unset($value['db']);
        }

        if (array_key_exists('port', $value)) {
            $this->_usedProperties['port'] = true;
            $this->port = $value['port'];
            unset($value['port']);
        }

        if (array_key_exists('socket', $value)) {
            $this->_usedProperties['socket'] = true;
            $this->socket = $value['socket'];
            unset($value['socket']);
        }

        if (array_key_exists('files_table', $value)) {
            $this->_usedProperties['filesTable'] = true;
            $this->filesTable = $value['files_table'];
            unset($value['files_table']);
        }

        if (array_key_exists('tmbPath', $value)) {
            $this->_usedProperties['tmbPath'] = true;
            $this->tmbPath = $value['tmbPath'];
            unset($value['tmbPath']);
        }

        if (array_key_exists('tmpPath', $value)) {
            $this->_usedProperties['tmpPath'] = true;
            $this->tmpPath = $value['tmpPath'];
            unset($value['tmpPath']);
        }

        if (array_key_exists('rootCssClass', $value)) {
            $this->_usedProperties['rootCssClass'] = true;
            $this->rootCssClass = $value['rootCssClass'];
            unset($value['rootCssClass']);
        }

        if (array_key_exists('noSessionCache', $value)) {
            $this->_usedProperties['noSessionCache'] = true;
            $this->noSessionCache = $value['noSessionCache'];
            unset($value['noSessionCache']);
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
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['user'])) {
            $output['user'] = $this->user;
        }
        if (isset($this->_usedProperties['pass'])) {
            $output['pass'] = $this->pass;
        }
        if (isset($this->_usedProperties['db'])) {
            $output['db'] = $this->db;
        }
        if (isset($this->_usedProperties['port'])) {
            $output['port'] = $this->port;
        }
        if (isset($this->_usedProperties['socket'])) {
            $output['socket'] = $this->socket;
        }
        if (isset($this->_usedProperties['filesTable'])) {
            $output['files_table'] = $this->filesTable;
        }
        if (isset($this->_usedProperties['tmbPath'])) {
            $output['tmbPath'] = $this->tmbPath;
        }
        if (isset($this->_usedProperties['tmpPath'])) {
            $output['tmpPath'] = $this->tmpPath;
        }
        if (isset($this->_usedProperties['rootCssClass'])) {
            $output['rootCssClass'] = $this->rootCssClass;
        }
        if (isset($this->_usedProperties['noSessionCache'])) {
            $output['noSessionCache'] = $this->noSessionCache;
        }

        return $output;
    }

}
