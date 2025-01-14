<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosCkEditor_Form_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_ck_editor.form.type' shared service.
     *
     * @return \FOS\CKEditorBundle\Form\Type\CKEditorType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'ckeditor-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'CKEditorType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'ckeditor-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'CKEditorConfigurationInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'ckeditor-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'CKEditorConfiguration.php';

        return $container->privates['fos_ck_editor.form.type'] = new \FOS\CKEditorBundle\Form\Type\CKEditorType(new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['configs' => ['main_config' => ['toolbar' => 'full', 'filebrowserBrowseRoute' => 'elfinder', 'filebrowserBrowseRouteParameters' => []]], 'toolbars' => ['configs' => ['my_toolbar_1' => [0 => [0 => 'Source', 1 => '-', 2 => 'Save', 3 => 'NewPage', 4 => 'Preview', 5 => 'Print', 6 => '-', 7 => 'Templates'], 1 => [0 => 'Cut', 1 => 'Copy', 2 => 'Paste', 3 => 'PasteText', 4 => 'PasteFromWord', 5 => '-', 6 => 'Undo', 7 => 'Redo'], 2 => [0 => 'Find', 1 => 'Replace', 2 => '-', 3 => 'SelectAll', 4 => '-', 5 => 'Scayt'], 3 => [0 => 'Form', 1 => 'Checkbox', 2 => 'Radio', 3 => 'TextField', 4 => 'Textarea', 5 => 'Select', 6 => 'Button', 7 => 'ImageButton', 8 => 'HiddenField'], 4 => [0 => 'Bold', 1 => 'Italic', 2 => 'Underline', 3 => 'Strike', 4 => 'Subscript', 5 => 'Superscript', 6 => '-', 7 => 'CopyFormatting', 8 => 'RemoveFormat'], 5 => [0 => 'NumberedList', 1 => 'BulletedList', 2 => '-', 3 => 'Outdent', 4 => 'Indent', 5 => '-', 6 => 'Blockquote', 7 => 'CreateDiv', 8 => '-', 9 => 'JustifyLeft', 10 => 'JustifyCenter', 11 => 'JustifyRight', 12 => 'JustifyBlock', 13 => '-', 14 => 'BidiLtr', 15 => 'BidiRtl', 16 => 'Language'], 6 => [0 => 'Link', 1 => 'Unlink', 2 => 'Anchor'], 7 => [0 => 'Image', 1 => 'Flash', 2 => 'Table', 3 => 'HorizontalRule', 4 => 'Smiley', 5 => 'SpecialChar', 6 => 'PageBreak', 7 => 'Iframe'], 8 => [0 => 'Styles', 1 => 'Format', 2 => 'Font', 3 => 'FontSize'], 9 => [0 => 'TextColor', 1 => 'BGColor'], 10 => [0 => 'Maximize', 1 => 'ShowBlocks'], 11 => [0 => 'ckeditor_wiris_formulaEditor', 1 => 'ckeditor_wiris_formulaEditorChemistry']], 'my_toolbar_2' => [0 => [0 => 'Source'], 1 => '/', 2 => [0 => 'Anchor'], 3 => '/', 4 => [0 => 'Maximize']]], 'items' => []], 'enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => []]));
    }
}
