<?php

namespace Drupal\menu\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;



/**
 * Defines the "panelbutton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "menu",
 *   label = @Translation("Ckeditor Menu"),
 * )
 */
class Menu extends CKEditorPluginBase{
    /**
     * {@inheritdoc}
     */
    public function getFile() {
        return drupal_get_path('module', 'menu') . '/js/plugins/menu/plugin.js';
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