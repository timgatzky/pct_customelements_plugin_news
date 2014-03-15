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
 * Namespace
 */
namespace PCT\CustomElements\Plugins;

/**
 * Imports
 */
use PCT\CustomElements\Core\CustomElementFactory as CustomElementFactory;

/**
 * Class file
 * News
 */
class News extends \Frontend
{
	/**
	 * Add the custom element to the news template
	 * @param object
	 * @param array
	 */
	public function addCustomElementsToTemplate($objTemplate, $arrRow)
	{
		if(!$arrRow['customelement_selection'])
		{
			return;
		}
		
		$objCustomElement = CustomElementFactory::byAlias($arrRow['customelement_selection']);
		if($objCustomElement)
		{
			$objCustomElement->setOrigin($arrRow['id'],'tl_news');
			$objTemplate->customelement = $objCustomElement->render();
		}
	}
}