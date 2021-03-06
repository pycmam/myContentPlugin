<?php
/**
 * Хелпер статичного контента
 */

/**
 * Вставить блок
 *
 * @param string $block
 */
function include_block($block)
{
    echo get_block($block);
}

/**
 * Вставить блок с названием текушего url
 */
function include_url_block($name = null)
{
    echo get_url_block($name);
}

/**
 * Получить блок по текущему URL
 *
 * @param string $name
 * @return string
 */
function get_url_block($name = null)
{
    $url = sfContext::getInstance()->getRequest()->getPathInfo();

    if ($name) {
        $url = sprintf('%s:%s', $name, $url);
    }

    return get_block($url);
}


/**
 * Получить блок
 *
 * @param string $block
 * @return string
 */
function get_block($block)
{
    //$context = sfContext::getInstance();
    //$context->getConfiguration()->loadHelpers(array('RemoteLink'));

    $content = myContentTable::getInstance()
        ->queryByBlock($block)
        ->fetchOne();

    if ($content) {
        //$text = $content->getContent();

        //$user = $context->getUser();
        //if ($user->hasCredential('admin_text')) {
        //    $text .= sprintf('<p>%s</p>', link_to_admin('Правка', 'text_edit', $content));
        //}

        //return $text;
        return $content->getContent();
    }
}