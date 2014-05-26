<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
JHtml::_('behavior.caption');

?>
<?php 

// $article = JTable::getInstance("content"); 
// $id = $article->load(JRequest::getInt("id")); // Get Article ID
// $article_images = $article->get("images"); // Get image parameters
// $pictures = json_decode($article_images); // Split the parameters apart
// // Print the image
// echo "<img src='../../" . $pictures->{'image_intro'} . "' alt='" . $pictures->{'image_intro_alt'} . "'>"; 
?>
<?php  
        $db = JFactory::getDBO();
      //  $catid = 35; //category id

        $query = $db->getQuery(true);
        $query->clear()
            ->select('*')
            ->from('fkq4s_content')
            ->where('id =' . (int)$this->item->id );
        $db->setQuery($query);
        $result=$db->loadObjectList();

echo '<pre>';
foreach($result as $res){

        // var_dump($res->catid);

        // $query = $db->getQuery(true);
        // $query->clear()
        //     ->select('*')
        //     ->from('fkq4s_content')
        //     ->where('catid =' . (int)$res->catid .' AND id ='. (int)$this->item->id);
        // $db->setQuery($query);
        // $category=$db->loadObjectList();

        // foreach($category as $cat) {

        //    // var_dump($cat);
        // }



echo '</pre>'; 

//var_dump( $this->item->id );

// $app = JFactory::getApplication();
// $catid = $app->input->get('cat_id');
$catid =$res->catid;
// echo $catid;

if($catid == '35' || $catid == '36' || $catid == '37' ){

?>

<section class="slider slider--second">
  <div class="slides slider-img--cont" style="text-align:center;height:264px;margin-top:2px;">
    <?php if(htmlspecialchars($images->image_fulltext) != null ){ ?>
        <img id="zoom-img" src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>" alt="image" data-zoom-image="/<?php echo htmlspecialchars($images->image_fulltext); ?>">                        
    <?php }else{ ?>
        <img id="zoom-img" src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro); ?>" alt="image" data-zoom-image="/<?php echo htmlspecialchars($images->image_intro); ?>">                        
    <?php } ?>
  </div>

  <div class="flex-control-nav flex-control-thumbs">
   
    <div id="gal1">
        <section class="nav-slider-mainproducts vertical">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 78px;">
                <ul class="mainproducts--carousel" style="width: auto; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px);">
                    <?php if(htmlspecialchars($images->image_fulltext) != null ){ ?>
                        <li class="slider-img--cont thumb-img">
                            <center>
                                <a href="#" data-image="/<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="/<?php echo htmlspecialchars($images->image_fulltext); ?>" class="list-active">
                                    <img src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="">
                                    <span class="active-img"></span>
                                </a>
                            </center>
                        </li>        
                    <?php } ?>
                    <?php if(htmlspecialchars($images->image_intro) != null ){ ?>
                        <li class="slider-img--cont thumb-img">
                            <center>
                                <a href="#" data-image="/<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro); ?>" class="">
                                    <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro); ?>" alt="">
                                    <span class="active-img"></span>
                                </a>
                            </center>
                        </li>  
                    <?php } ?>
                </ul>
                </div>
            </div>
        </section>
    </div>
  </div>

</section>
<?php } }?>
<section class="post post--story">
<div class="post_body formatted">
<?php if($catid == 35 || $catid == 36 || $catid == 37){?>
<h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
<?php } ?>
	<?php echo $this->item->text; ?>
</div>
</section>


