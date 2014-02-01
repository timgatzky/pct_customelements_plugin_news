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
 * Globals
 */
$GLOBALS['PCT_CUSTOMELEMENTS']['allowedTables'][] 	= 'tl_news';
// tell the custom elements which field is the selection field for the table tl_news
$GLOBALS['PCT_CUSTOMELEMENTS']['tl_news']['selectionfield'] = 'customelement_selection';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseArticles'][] = array('PCT\CustomElements\Plugins\News','addCustomElementsToTemplate');