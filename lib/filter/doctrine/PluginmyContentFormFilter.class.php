<?php

/**
 * PluginmyContent form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormFilterPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginmyContentFormFilter extends BasemyContentFormFilter
{
    public function setup()
    {
        parent::setup();

        $this->useFields(array('domain', 'block', 'url'));
    }
}
