<?php

namespace Symfony\Config\FmElfinder;

require_once __DIR__.\DIRECTORY_SEPARATOR.'InstanceConfig'.\DIRECTORY_SEPARATOR.'ConnectorConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class InstanceConfig 
{
    private $locale;
    private $corsSupport;
    private $editor;
    private $editorTemplate;
    private $fullscreen;
    private $multiHomeFolder;
    private $folderSeparator;
    private $theme;
    private $tinymcePopupPath;
    private $relativePath;
    private $pathPrefix;
    private $whereIsMulti;
    private $visibleMimeTypes;
    private $connector;
    private $_usedProperties = [];

    /**
     * @default null
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
    public function corsSupport($value): static
    {
        $this->_usedProperties['corsSupport'] = true;
        $this->corsSupport = $value;

        return $this;
    }

    /**
     * @default 'simple'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function editor($value): static
    {
        $this->_usedProperties['editor'] = true;
        $this->editor = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function editorTemplate($value): static
    {
        $this->_usedProperties['editorTemplate'] = true;
        $this->editorTemplate = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fullscreen($value): static
    {
        $this->_usedProperties['fullscreen'] = true;
        $this->fullscreen = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function multiHomeFolder($value): static
    {
        $this->_usedProperties['multiHomeFolder'] = true;
        $this->multiHomeFolder = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function folderSeparator($value): static
    {
        $this->_usedProperties['folderSeparator'] = true;
        $this->folderSeparator = $value;

        return $this;
    }

    /**
     * @default 'smoothness'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function theme($value): static
    {
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tinymcePopupPath($value): static
    {
        $this->_usedProperties['tinymcePopupPath'] = true;
        $this->tinymcePopupPath = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function relativePath($value): static
    {
        $this->_usedProperties['relativePath'] = true;
        $this->relativePath = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathPrefix($value): static
    {
        $this->_usedProperties['pathPrefix'] = true;
        $this->pathPrefix = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function whereIsMulti(mixed $value): static
    {
        $this->_usedProperties['whereIsMulti'] = true;
        $this->whereIsMulti = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function visibleMimeTypes(mixed $value): static
    {
        $this->_usedProperties['visibleMimeTypes'] = true;
        $this->visibleMimeTypes = $value;

        return $this;
    }

    /**
     * @default {"debug":false,"binds":[],"plugins":[],"roots":[]}
    */
    public function connector(array $value = []): \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig
    {
        if (null === $this->connector) {
            $this->_usedProperties['connector'] = true;
            $this->connector = new \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connector()" has already been initialized. You cannot pass values the second time you call connector().');
        }

        return $this->connector;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('locale', $value)) {
            $this->_usedProperties['locale'] = true;
            $this->locale = $value['locale'];
            unset($value['locale']);
        }

        if (array_key_exists('cors_support', $value)) {
            $this->_usedProperties['corsSupport'] = true;
            $this->corsSupport = $value['cors_support'];
            unset($value['cors_support']);
        }

        if (array_key_exists('editor', $value)) {
            $this->_usedProperties['editor'] = true;
            $this->editor = $value['editor'];
            unset($value['editor']);
        }

        if (array_key_exists('editor_template', $value)) {
            $this->_usedProperties['editorTemplate'] = true;
            $this->editorTemplate = $value['editor_template'];
            unset($value['editor_template']);
        }

        if (array_key_exists('fullscreen', $value)) {
            $this->_usedProperties['fullscreen'] = true;
            $this->fullscreen = $value['fullscreen'];
            unset($value['fullscreen']);
        }

        if (array_key_exists('multi_home_folder', $value)) {
            $this->_usedProperties['multiHomeFolder'] = true;
            $this->multiHomeFolder = $value['multi_home_folder'];
            unset($value['multi_home_folder']);
        }

        if (array_key_exists('folder_separator', $value)) {
            $this->_usedProperties['folderSeparator'] = true;
            $this->folderSeparator = $value['folder_separator'];
            unset($value['folder_separator']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = $value['theme'];
            unset($value['theme']);
        }

        if (array_key_exists('tinymce_popup_path', $value)) {
            $this->_usedProperties['tinymcePopupPath'] = true;
            $this->tinymcePopupPath = $value['tinymce_popup_path'];
            unset($value['tinymce_popup_path']);
        }

        if (array_key_exists('relative_path', $value)) {
            $this->_usedProperties['relativePath'] = true;
            $this->relativePath = $value['relative_path'];
            unset($value['relative_path']);
        }

        if (array_key_exists('path_prefix', $value)) {
            $this->_usedProperties['pathPrefix'] = true;
            $this->pathPrefix = $value['path_prefix'];
            unset($value['path_prefix']);
        }

        if (array_key_exists('where_is_multi', $value)) {
            $this->_usedProperties['whereIsMulti'] = true;
            $this->whereIsMulti = $value['where_is_multi'];
            unset($value['where_is_multi']);
        }

        if (array_key_exists('visible_mime_types', $value)) {
            $this->_usedProperties['visibleMimeTypes'] = true;
            $this->visibleMimeTypes = $value['visible_mime_types'];
            unset($value['visible_mime_types']);
        }

        if (array_key_exists('connector', $value)) {
            $this->_usedProperties['connector'] = true;
            $this->connector = new \Symfony\Config\FmElfinder\InstanceConfig\ConnectorConfig($value['connector']);
            unset($value['connector']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['locale'])) {
            $output['locale'] = $this->locale;
        }
        if (isset($this->_usedProperties['corsSupport'])) {
            $output['cors_support'] = $this->corsSupport;
        }
        if (isset($this->_usedProperties['editor'])) {
            $output['editor'] = $this->editor;
        }
        if (isset($this->_usedProperties['editorTemplate'])) {
            $output['editor_template'] = $this->editorTemplate;
        }
        if (isset($this->_usedProperties['fullscreen'])) {
            $output['fullscreen'] = $this->fullscreen;
        }
        if (isset($this->_usedProperties['multiHomeFolder'])) {
            $output['multi_home_folder'] = $this->multiHomeFolder;
        }
        if (isset($this->_usedProperties['folderSeparator'])) {
            $output['folder_separator'] = $this->folderSeparator;
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme;
        }
        if (isset($this->_usedProperties['tinymcePopupPath'])) {
            $output['tinymce_popup_path'] = $this->tinymcePopupPath;
        }
        if (isset($this->_usedProperties['relativePath'])) {
            $output['relative_path'] = $this->relativePath;
        }
        if (isset($this->_usedProperties['pathPrefix'])) {
            $output['path_prefix'] = $this->pathPrefix;
        }
        if (isset($this->_usedProperties['whereIsMulti'])) {
            $output['where_is_multi'] = $this->whereIsMulti;
        }
        if (isset($this->_usedProperties['visibleMimeTypes'])) {
            $output['visible_mime_types'] = $this->visibleMimeTypes;
        }
        if (isset($this->_usedProperties['connector'])) {
            $output['connector'] = $this->connector->toArray();
        }

        return $output;
    }

}
