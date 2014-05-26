

<?php //include('assets/include/product_map.php'); ?>

<div class="section section--main">
    <!--jdocs for breadcrum-->   
        <jdoc:include type="modules" name="breadcrums" />
    <!-- jdocs breadcrum end-->
    <?php #include('assets/include/video-gallery.php') ?> 
      


    <ul class="tab" id="category_tab">
        <li id="airLi" class=""><a  onclick="<?php $tabID = 1;?>" href="#Airfield-tab" class="item-air-lights parent">Airfield Lights</a></li>
        <li id="obsLi" class=""><a  onclick="<?php $tabID = 2;?>" href="#Obstruction-tab" class="item-obstr-lights parent">Obstruction Lights</a></li>
        <li id="heliLi" class=""><a onclick="<?php $tabID = 3;?>" href="#Heliport-tab" class="item-heli-lights parent">Heliport Lighting</a></li>
    </ul> 
    

   

    <section class="iso-container-products imageRow n-border">

        <?php 

        if ($tabID == 1){
            $catID = 2;
        }else if($tabID == 2){
            $catID = 1;
        }else if($tabID == 3){
            $catID = 3;
        }

        // Get a db connection.
        $db = JFactory::getDbo();
         
        // Create a new query object.
        $query = $db->getQuery(true);
         
        // Select all records from the user profile table where key begins with "custom.".
        // Order it by the ordering field.
        $query->select($db->quoteName(array('id', 'title', 'alias', 'catid',)));
        $query->from($db->quoteName('#__k2_items'));
        $query->where($db->quoteName('catid') . ' LIKE '. $catID);
        // Reset the query using our newly populated query object.
        $db->setQuery($query);
         
        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $results = $db->loadObjectList();

        foreach ( $results as $result  ) { ?>
            <!-- echo $result->title; -->
            
            <div class="single AV-425-RF">
            <div class="title" style="height:66px !important;font-size:0.775rem;">
             <a name="<?php echo $result->title; ?>" href="" class="menu__subitem"><?php echo $result->title; ?></a>
            </div>                                                                                            
                <a href="<?php echo $result->link; ?>" class="menu__subitem">
                <center><table id="wrapper">
                    <tbody><tr><td>
                            <img style="border:none" src="<?php echo "media/k2/items/cache/".md5("Image".$result->id )."_M.jpg" ?>">
                    </td></tr></tbody>
                </table></center></a>
            </div> 

        <?php } ?>

    </section>
        
</div>