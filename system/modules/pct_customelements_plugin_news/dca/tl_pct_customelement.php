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
 * Table tl_pct_customelement
 */
#array_insert($GLOBALS['TL_DCA']['tl_pct_customelement'], 0,array
#(
#	'isNews' => array
#	(
#		'label'                   => &$GLOBALS['TL_LANG']['tl_pct_customelement']['isCTE'],
#		'exclude'                 => true,
#		'inputType'               => 'checkbox',
#		'eval'                    => array('tl_class'=>'w50','submitOnChange'=>true),
#		'sql'					  => "char(1) NOT NULL default ''",
#	),
#));