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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'PCT\CustomElements',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'PCT\CustomElements\Plugins\News' => 'system/modules/pct_customelements_plugin_news/PCT/CustomElements/Plugins/News.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
));
