<?php

/**
 * Статические страницы
 */
class myContentActions extends sfActions
{
    /**
     * Показать страницу
     */
    public function executeShow(sfWebRequest $request)
    {
        $this->page = $this->getRoute()->getObject();

        $this->getResponse()->setTitle($this->page->getTitle());
    }
}