<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$doc=JFactory::getDocument();
$doc->addStyleSheet(JURI::root().'/modules/mod_adv_slider/css/mod_adv_slider.css');
// $doc->addScript(JURI::root().'/modules/mod_adv_slider/js/jquery-1.4.4.min.js');

require_once JPATH_ROOT . '/components/com_banners/helpers/banner.php';
$baseurl = JURI::base();

foreach($imagelist as $item)

// echo $imageurl = $item->params->get('imageurl');

// echo $imagename = $item->name;
// echo $imagename = $item['description'];
// var_dump($imagelist);
// var_dump($item);  


//adding variable 0 first   
$ctr = 0;

?>


<div class="slider main-slider">
    <div class="flexslider">
        <ul class="slides slider-img--cont">

             <?php foreach($imagelist as $item):
                    //initialize ctr
                    $ctr++;

                    $imageurl = $item->params->get('imageurl');
                    $imagename = $item->name;

                    //getting description on banner
                    $banId = $item->id;

                    $db = JFactory::getDbo();
                    $query = $db->getQuery(true);
                    $query->select($db->quoteName(array('id', 'name', 'state', 'description')));
                    $query->from($db->quoteName('#__banners'));
                    $query->where($db->quoteName('id') . ' LIKE '. $banId);
                    $db->setQuery($query);

                    $banner_desc = $db->loadObjectList();

                    foreach($banner_desc as $desc);

                    $state = $desc->state;

                    //counter looping  limit using ><=

                    if($ctr <= 3){

                    ?>

                    <?php if($state != 0) {?>
                        <li title="<?php echo $imagename; ?>" data-thumb="<?php echo $imageurl ?>">
                            <img src="<?php echo $imageurl ?>" />
                            <div class="flex-caption">
                                <h1><?php echo $imagename; ?></h1>
                                <p><?php echo $desc->description; ?></p>
                                <a class="button button-medium slider-button" href="#">MORE</a>
                            </div>
                        </li>

                    <?php } } ?>

            <?php endforeach; ?>

        </ul>
    </div>
</div>


<!-- 

<div id="contents">

    <div id="v2">

        <div id="demo-wrapper">

            <div id="demo-left">

                <div id="vWrapper">

                    <div id="carouselv">

                        <?php foreach($imagelist as $item): ?>

                                <?php $imageurl = $item->params->get('imageurl');?>
                               

                                <div>
                                    <img
                                    src="<?php echo $baseurl . $imageurl;?>"
                                    alt="<?php echo $alt;?>"
                                    /><br />

                                    <span class="thumbnail-text"><?php echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8');?>  </span>
                                </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div> -->

