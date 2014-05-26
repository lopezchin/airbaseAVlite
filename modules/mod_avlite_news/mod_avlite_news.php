<?php
/*
* @package: Joomla.Site
*/
//no direct access
// no direct access
defined('_JEXEC') or die;

jimport('joomla.html.pagination');
// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$avnews = get_avlite_news();

require(JModuleHelper::getLayoutPath('mod_avlite_news', 'default'));