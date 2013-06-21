<?php
/**
 * @package	HikaShop for Joomla!
 * @version	2.1.3
 * @author	hikashop.com
 * @copyright	(C) 2010-2013 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
class hikashopVolumeType{

	function display($map, $volume_unit,$type='dimension'){
		$config =& hikashop_config();
		$symbols = explode(',',$config->get('volume_symbols','m,cm'));

		if(empty($volume_unit)){
			$volume_unit = $symbols[0];
		}
		$this->values = array();

		if(!in_array($volume_unit,$symbols)){
			$text = JText::_($volume_unit);
			if($type!='dimension') $text.='&sup3;';
			$this->values[] = JHTML::_('select.option', $volume_unit,$text);
		}

		foreach($symbols as $symbol){
			$text = JText::_($symbol);
			if($type!='dimension') $text.='&sup3;';
			$this->values[] = JHTML::_('select.option', $symbol,$text);
		}

		return JHTML::_('select.genericlist', $this->values, $map, 'class="inputbox volumeselect" size="1"', 'value', 'text', $volume_unit);

	}
}