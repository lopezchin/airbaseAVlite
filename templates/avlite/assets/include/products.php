<?php //include('assets/include/product_map.php'); ?>
<div class="section section--main">
    <!--jdocs for breadcrum-->   
        <!-- <jdoc:include type="modules" name="breadcrums" /> -->
    <!-- jdocs breadcrum end-->
    <?php #include('assets/include/video-gallery.php') ?> 
    <ul class="tab_menu" >
        <?php 
          $app = JFactory::getApplication();
          $menuID = $app->getMenu()->getActive()->id ;
          if ($menuID == '186' || $menuID == '188'){             
             $catID = 35; 
             $prod = "products/solar-airfield-lighting";
             $active = "active";
             $active2 = "";
             $active3 = "";

            }else if($menuID == '190'){
                $catID = 36;
                $prod = "products/obstruction-lighting";
                $active = "";
                $active2 = "active";
                $active3 = "";

            }else if($menuID == '189'){
                $catID = 37;
                $prod = "products/solar-heliport-lighting";
                $active = "";
                $active2 = "";
                $active3 = "active";
            }
        ?> 

        <li  class="<?php echo $active ?>"><a href="products/solar-airfield-lighting" class="item-air-lights ">Airfield Lights</a></li>
        <li class="<?php echo $active2 ?>"><a href="products/obstruction-lighting" class="item-obstr-lights ">Obstruction Lights</a></li>
        <li  class="<?php echo $active3 ?>"><a href="products/solar-heliport-lighting" class="item-heli-lights ">Heliport Lighting</a></li>
    </ul> 

   <section class="iso-container-products imageRow n-border">            

            <?php           
            // Get a db connection.
            $db = JFactory::getDbo();
            // Create a new query object.
            $query = $db->getQuery(true);
            // Select all records from the user profile table where key begins with "custom.".
            // Order it by the ordering field.
            $query->select($db->quoteName(array('id', 'title', 'alias', 'catid', 'images', 'state')));
            $query->from($db->quoteName('#__content'));
            $query->where($db->quoteName('catid') . ' LIKE '. $catID);
            // Reset the query using our newly populated query object.
            $db->setQuery($query);
            // Load the results as a list of stdClass objects (see later for more options on retrieving data).
            $results = $db->loadObjectList();
           
            foreach ( $results as $result  ) { ?>

                <?php  $state = $result->state; ?> 
                <!-- echo $result->title; -->
                <?php // var_dump(json_decode($result->images)->image_fulltext) ?>
                <?php if($state!=0){ ?>
                <!-- <?php echo 'menu'.$result->id; ?> -->
                <div class="single <?php echo $result->title; ?>">
                <div class="title" style="height:66px !important;font-size:0.775rem;">
                 <a href="<?php echo $prod.'/'.$result->alias; ?>" class="menu__subitem"><?php echo $result->title; ?></a>
                </div>

                    <a href="<?php echo $prod.'/'.$result->alias; ?>" class="menu__subitem">
                    <center><table id="wrapper">
                        <tbody><tr><td>
                        <img src="<?php echo json_decode($result->images)->image_intro; ?>" alt=""/></td></tr></tbody>
                    </table></center></a>
                </div> 

                <?php } ?>
            <?php } ?>

    </section>
    <!---
    <?php
        $app = JFactory::getApplication();
        $menu = $app->getMenu()->getActive()->id;
        

        $itemID = $result->id;

        if ($menu == $itemID){
            echo 'hello item page';
        }else{
            echo 'its not item page';
        }

    ?>-->

   




</div>      