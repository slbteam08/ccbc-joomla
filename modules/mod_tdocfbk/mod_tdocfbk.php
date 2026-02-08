<?php
/**
* @package   TDOC Facebook Display
* @copyright Copyright (C) 2021. All rights reserved.
* @license   http://www.gnu.org/licenses/gpl-3.0.html
* @version   5.3.1
**/
/**
* 5.3.1 26-apr-24 upgrade to J5 new style - Modified per robbiej - https://forum.joomla.org/viewtopic.php?f=833&t=1008461
**/

// see https://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module 

// no direct access
defined('_JEXEC') or die('Restricted access');

/** new code **/
use Joomla\CMS\Helper\ModuleHelper;

/** deleted code **/
// Include the syndicate functions only once
// require_once __DIR__ . '/helper.php';

/** modified code **/
/** require JModuleHelper::getLayoutPath('mod_tdocfbk'); **/
require ModuleHelper::getLayoutPath('mod_tdocfbk');

?>