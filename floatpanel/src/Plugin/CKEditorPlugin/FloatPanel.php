<?php

namespace Drupal\floatpanel\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;



/**
 * Defines the "panelbutton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "floatpanel",
 *   label = @Translation("Ckeditor floatpanel"),
 * )
 */
class FloatPanel extends CKEditorPluginBase{
    /**
     * {@inheritdoc}
     */
    public function getFile() {
        return drupal_get_path('module', 'floatpanel') . '/js/plugins/floatpanel/plugin.js';
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