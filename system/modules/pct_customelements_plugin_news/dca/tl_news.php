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

$GLOBALS['TL_DCA']['tl_news']['config']['onload_callback'][] = array('tl_news_pct_customelement_plugin_news', 'loadStyles');


/**
 * Default custom element palettes
 */
// injcet the custom element selection in the default palette
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace
(
	'addEnclosure;',
	'addEnclosure;{customelement_legend},customelement_selection;',
	$GLOBALS['TL_DCA']['tl_news']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_news']['palettes']['__customelement__'] = str_replace
(
	'customelement_selection;',
	'customelement_selection,###CUSTOMELEMENT_WIDGET###;',
	$GLOBALS['TL_DCA']['tl_news']['palettes']['default']
);

/**
 * Fields
 */
array_insert($GLOBALS['TL_DCA']['tl_news']['fields'], 0,array
(
	'customelement_selection' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_news']['customelement_selection'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options_callback'		  => array('tl_news_pct_customelement_plugin_news','getCustomElements'),
		'eval'                    => array('tl_class'=>'clr','submitOnChange'=>true,'includeBlankOption'=>true,'chosen'=>true),
		'sql'					  => "varchar(255) NOT NULL default ''",
	),
));

/**
 * Class file
 */
class tl_news_pct_customelement_plugin_news extends \Backend
{
	/**
	 * Return custom elements as array
	 * @return array
	 */
	public function getCustomElements()
	{
		$objCE = new PCT\CustomElements\Core\CustomElements;
		$arrCE = $objCE->getCustomElements('tl_news');
		
		if(empty($arrCE))
		{
			return array();
		}
		
		foreach($arrCE as $alias)
		{
			$label = $objCE->findTranslatedNameByAlias($alias,'tl_news');
			$arrReturn[$alias] = $label[0];
		}
		
		return $arrReturn;
	}
	
	/**
	 * Laod styles
	 */
	public function loadStyles()
	{
		$GLOBALS['TL_CSS'][] = 'system/modules/pct_customelements_plugin_news/assets/css/styles.css';
	}
}