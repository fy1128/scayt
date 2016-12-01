<?php

namespace Drupal\menubutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "panelbutton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "menubutton",
 *   label = @Translation("Ckeditor Menu Button"),
 * )
 */
class MenuButton extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'menubutton') . '/js/plugins/menubutton/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }
}
