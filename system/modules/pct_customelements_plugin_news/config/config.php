<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2014
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		pct_customelements_plugin_news
 */

/**
 * Register the plugin
 */
array_insert($GLOBALS['PCT_CUSTOMELEMENTS']['PLUGINS'], 0, array
(
	'plugin_news' => array
	(
		// has access
		'tables' => array('tl_news'),
		// tell the custom elements which field is the selection field for the table tl_news
		'selectionfield' => array
		(
			'tl_news'=>'customelement_selection'
		),
		'path' => 'system/modules/pct_customelement_plugin_news',
	)
));
 
#$GLOBALS['PCT_CUSTOMELEMENTS']['allowedTables'][] 	= 'tl_news';
// tell the custom elements which field is the selection field for the table tl_news
#$GLOBALS['PCT_CUSTOMELEMENTS']['tl_news']['selectionfield'] = 'customelement_selection';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseArticles'][] = array('PCT\CustomElements\Plugins\News','addCustomElementsToTemplate');