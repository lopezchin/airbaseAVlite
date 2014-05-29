<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$doc=JFactory::getDocument();
$doc->addStyleSheet(JURI::root().'/modules/mod_product_listing/css/mod_product_listing.css');
// $doc->addScript(JURI::root().'modules/mod_product_listing/js/product_listing.js');
// JHtml::script(Juri::base() . '/modules/mod_product_listing/js/product_listing.js');


?>

<script type="text/javaScript" src="modules/mod_product_listing/js/product_listing.js"></script>

<div class="section section--main">

    <!--jdocs for breadcrum-->   
        <!-- <jdoc:include type="modules" name="breadcrums" /> -->
    <!-- jdocs breadcrum end-->

    <section class="t-content">


        <ul class="tab" id="category_tab">
            <li id="airLi" class="active"><a href="#Airfield" class="item-air-lights">Airfield Lights</a></li>
            <li id="obsLi"><a href="#Obstruction" class="item-obstr-lights">Obstruction Lights</a></li>
            <li id="heliLi"><a href="#Heliport" class="item-heli-lights" >Heliport Lighting</a></li>
        </ul>

        <div id="Airfield" class="section sectionn--av">
              
        	<?php include("airfield-map.php") ?>
            <section class="iso-container-products imageRow n-border">
                   	<?php  

                   	$catID = 35;
                    $prod = "products/solar-heliport-lighting";

                   	include('product_listing_query.php') ?>

                    <div class="set">
                    </div>
            </section>

        </div>

        <div id="Obstruction" class="section sectionn--av">
            <section class="iso-container-products imageRow n-border">
                    <?php  

                   	$catID = 36;
                    $prod = "products/solar-airfield-lighting";

                   	include('product_listing_query.php') ?>

                    <div class="set">
                    </div>
            </section>
        </div>
        
        <div id="Heliport" class="section sectionn--av">
            <section class="iso-container-products imageRow n-border">
                    section heliport
                    <?php 

                    $catID = 37;
                    $prod = "products/solar-heliport-lighting";

                    include('product_listing_query.php') ?>

                    <div class="set">
                    </div>
            </section>  
        </div>
    </section>


</div>