<?php

namespace Drupal\smmg_ckeditor_plugins\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "cke_smmg" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "cke_smmg",
 *   label = @Translation("Insert Seperator")
 * )
 */
class insertSeparatorIcon extends CKEditorPluginBase
{


  /**
   * {@inheritdoc}
   *
   * NOTE: The keys of the returned array corresponds to the CKEditor button
   * names. They are the first argument of the editor.ui.addButton() or
   * editor.ui.addRichCombo() functions in the plugin.js file.
   */
  public function getButtons()
  {
    // Make sure that the path to the image matches the file structure of
    // the CKEditor plugin you are implementing.
    $module_root = drupal_get_path('module', $this->getModule());

    return [
      'Seperator' => [
        'label' => t('Insert Seperator'),
        'image' => $module_root . '/js/plugins/cke_smmg/icons/seperator.png',
      ],
      'Firstname' => [
        'label' => t('Firstname'),
        'image' => $module_root . '/js/plugins/cke_smmg/icons/firstname.png',
      ],
      'Lastname' => [
        'label' => t('Lastname'),
        'image' => $module_root . '/js/plugins/cke_smmg/icons/lastname.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getModule()
  {
    // Make sure that the path to the plugin.js matches the file structure of
    // the CKEditor plugin you are implementing.
    return 'smmg_ckeditor_plugins';
  }

  /**
   * {@inheritdoc}
   */
  public function getFile()
  {
    // Make sure that the path to the plugin.js matches the file structure of
    // the CKEditor plugin you are implementing.
    return drupal_get_path('module', $this->getModule()) . '/js/plugins/cke_smmg/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal()
  {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor)
  {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor)
  {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor)
  {
    return [];
  }

}
