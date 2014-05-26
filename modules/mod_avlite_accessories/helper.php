<?php
/**
 * Helper class for Avlite 
 * 
 * @package    Joomla.Site
 * @subpackage Modules
 * @license       GNU/GPL, see LICENSE.php
 */
class modAccessoriesProduct {

    /*
    * This will get the article that belongs to product category only
    * param:none
    * return: array()
    */
    public static function getAccessories() {

    	$db = JFactory::getDBO();
    	$catid = 38; //category id

    	$query = $db->getQuery(true);
    	$query->clear()
    		->select('*')
    		->from('fkq4s_content')
    		->where('catid =' . (int)$catid);
    	$db->setQuery($query);
        $result=$db->loadObjectList();


    	return $result;

    }
}
?>