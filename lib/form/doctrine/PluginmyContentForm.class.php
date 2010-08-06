<?php

/**
 * PluginmyContent form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyContentForm extends BasemyContentForm
{
    public function setup()
    {
        parent::setup();

         $this->widgetSchema['domain'] = new sfWidgetFormChoice(array(
            'choices' => array_combine(
                sfConfig::get('app_domains'),
                sfConfig::get('app_domains')
            )
        ));

        $this->useFields(array('domain', 'block', 'url'));

        $this->embedI18n(array('ru', 'en'));
    }
}
