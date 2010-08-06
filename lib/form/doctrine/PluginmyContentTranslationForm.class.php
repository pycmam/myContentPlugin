<?php

/**
 * PluginmyContentTranslation form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyContentTranslationForm extends BasemyContentTranslationForm
{
    public function setup()
    {
        parent::setup();

        $this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMCE(array(
            'width'  => sfConfig::get('app_tinymce_width', 800),
            'height' => sfConfig::get('app_tinymce_height', 500),
        ));

        $this->useFields(array('title', 'content'));
    }
}
