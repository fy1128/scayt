<?php

namespace Drupal\button\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "panelbutton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "button",
 *   label = @Translation("Ckeditor button"),
 * )
 */
class Button extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'button') . '/js/plugins/panelbutton/plugin.js';
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
