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
class categoryController extends hikashopController{
	var $modify = array();
	var $delete = array();
	var $modify_views = array();
	function authorize($task){
		if($this->isIn($task,array('display'))){
			return true;
		}
		return false;
	}
}
