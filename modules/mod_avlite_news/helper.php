<?php 
/*
* @package: Joomla.Site
* @subpackage: mod_whats_new
*/
defined('_JEXEC') or die;

/*
*
* This will get the article with a specific category
* param: none
* return: array()
*/

function get_avlite_news() {
	$db = JFactory::getDBO();
	$catid = 18;

	$query = $db->getQuery(true);
	$query->clear()
		  ->select('*')
		  ->from('#__content')
		  ->where('catid = '. (int) $catid )
		  ->order('id ASC');
	$db->setQuery($query);
	$result = $db->loadObjectList();
	
	return $result;


}
?>

