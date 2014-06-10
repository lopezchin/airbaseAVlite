<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modCaseStudiesHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    function getHello( $params )
    {
        return 'Case Studies Example';
    }


    function getCaseStudyCategory() {


        $db = JFactory::getDBO();
        $catid = 20; //category id

        $query = $db->getQuery(true);
        $query->clear()
            ->select('*')
            ->from('fkq4s_content')
            ->where('catid =' . (int)$catid);
        $db->setQuery($query);
        $result=$db->loadObjectList();

        return $result;


    }

    function test(){

        $data = 'test';
        
        header('Content-type: application/json');
        echo json_encode($data);
        die();

    }

}
?>