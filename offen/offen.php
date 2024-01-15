<?php

/**
 * Shaarli offen Plugin
 *
 * @author Andreas Waschinski
 * @link
 */

use Shaarli\Plugin\PluginManager;

function offen_init($conf)
{
    $offenUrl = $conf->get('plugins.OFFEN_URL');
    $offenAccountid = $conf->get('plugins.OFFEN_ACCOUNTID');
    if (empty($offenUrl) || empty($offenAccountid)) {
        $error = t('Offen plugin error: ' .
            'Please define OFFEN_URL and OFFEN_ACCOUNTID in the plugin administration page.');
        return [$error];
    }
}

function hook_offen_render_footer($data, $conf)
{
    $offenUrl = $conf->get('plugins.OFFEN_URL');
    $offenAccountid = $conf->get('plugins.OFFEN_ACCOUNTID');	
    if (empty($offenUrl) || empty($offenAccountid)) {
        return $data;
    }

    // Free elements at the end of the page.
    $data['endofpage'][] = sprintf(
        file_get_contents(PluginManager::$PLUGINS_PATH . '/offen/offen.html'),
        $offenUrl,
        $offenAccountid
    );

    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function offen_dummy_translation()
{
    // meta
    t('A plugin that adds Offen analytics tracking code to Shaarli pages.');
    t('Offen URL');
    t('Ofefn account ID');
}

