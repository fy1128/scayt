<?php

namespace Drupal\dialogui\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "dialogui" plugin.
 *
 * @CKEditorPlugin(
 *   id = "dialogui",
 *   label = @Translation("Ckeditor Dialog UI"),
 * )
 */
class DialogUi extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'dialogui') . '/js/plugins/dialogui/plugin.js';
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
