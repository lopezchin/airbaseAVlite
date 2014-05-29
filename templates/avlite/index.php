<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Avlite - Solar Aviation Lighting</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/style.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/custom.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/slider-zoom.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/colorbox.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/jquery.selectbox.css">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/map.css">

<!-- Feather light JS  -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/featherlight.css" title="Featherlight Styles">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/avlite/assets/css/featherlight.min.css" title="Featherlight Styles">

<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
                    
    
<!-- jQuery -->
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/ext/jquery-1.8.3.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/isotope.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/ext/modernizr.custom.2.6.1.js"></script>

<!-- Extension -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/jquery.maphilight.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/featherlight.min.js" charset="utf-8"></script>

<!-- FlexSlider -->
<script defer src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.flexslider.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.bxslider.min.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.tabify.js"></script>  
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/tooltip.js"></script>  
<!--<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/marquee.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/amenu.js"></script>-->
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.elevatezoom.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.selectbox-0.1.3.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/jquery.colorbox-min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/libs/__jquery.tablesorter.min.js"></script>

<script src="<?php echo $this->baseurl ?>/templates/avlite/assets/js/main.js"></script>

<script type="text/javascript">
    $(function($){
        avlite.Global.init();  
        avlite.Category.init();  
        avlite.Front.init();  
        avlite.Front.Menu();  
        avlite.Product.init();
        avlite.Zoom.init();
        avlite.Lightbox.init(); 
    });


</script>

</head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header class="t-header">

            <!--<?php echo JPATH_ADMINISTRATOR; ?>-->

            <div class="l-wrap">
                <div class="branding">
                    <a href="index.php"><img src="<?php echo $this->baseurl ?>/templates/avlite/assets/i/logo.jpg" /></a>
                </div>
    
                <nav class="menu menu--secondary">

                <!--jdocs for nav-->  
                  <jdoc:include type="modules" name="list-nav" />
                <!--jdocs for nav-->  
                <jdoc:include type="modules" name="search-form" />
                </nav>
                 <nav class="menu menu--main">
                    <!--jdocs for main-menu-->  
                      <jdoc:include type="modules" name="main-menu" />
                     <!--jdocs for main-menu--> 

                    <div class="login enquirehdr">
                        <a href="#" class="button button--red login__button button-small lightbox-form-login" type="submit" value=""><i class="icon-email"></i>Enquire</a>                    
                    </div>
                </nav>
            </div>
         </header>
  
  <!-- header end -->

  <!-- content -->       
<div class="l-wrap">

<!--accessories-->
        
        <jdoc:include type="modules" name="breadcrums" />

        <!--jdocs for slider-->   
            <jdoc:include type="modules" name="slider" />
        <!-- jdocs slider end-->
  
        <?php $app = JFactory::getApplication();
              $menuID = $app->getMenu()->getActive()->id ;
                  if ($menuID == '138'){ ?>
        
        <div id="proj_gallery" class="section section--main">
            <div id="gallery-img" class="iso-container-products imageRow">
                <div class="set">

                <section class="t-content">
                    <jdoc:include type="modules" name="form-field" style="none"/> 
                    <jdoc:include type="component" />
                    <jdoc:include type="message" />
                </section>
                
                </div>
            </div>  
        </div>
        
        <?php }elseif($menuID == '106'){ ?>

            <?php include('assets/include/location-distributor.php') ?>   
        
        <?php }elseif($menuID == '144'){ ?>
            
         <div class="section section--main">
            <?php #include('assets/include/video-gallery.php') ?>  
            <section class="t-content">
                <jdoc:include type="component" />
                <jdoc:include type="message" />
            </section>
        </div>  


        <?php 

        // }elseif($menuID == '186' || $menuID == '188' || $menuID == '189' || $menuID == '190'){ 
            
        //      include('assets/include/products.php');

        }else { ?>


        <div class="section section--main">
            

            <div class="t-content t-content-no-border">
                    
                    <?php 
                      $app = JFactory::getApplication();
                      $menuID = $app->getMenu()->getActive()->id ;
                      if ($menuID == '101'){ ?> <!-- Home Page -->
                      
                        <div class="post post--story">
                            <header>
                                <h2 class="section-title">ABOUT AVLITE</h2>
                                <div class="section-title__border"></div>
                            </header>
                                <jdoc:include type="component" />
                                <jdoc:include type="message" />
                        </div>
                    <?php }elseif ($menuID == '141'){ ?> <!-- for subscribe form only -->

                            <jdoc:include type="component" />
                            <jdoc:include type="message" />
                            <jdoc:include type="modules" name="form-field" style="none"/> 
                            
                            <?php if($_SERVER['REQUEST_METHOD'] == "POST"){

                                    $email = JRequest::getVar('email', '');
                                    include('assets/include/subscribe-form.php');
                                }else{   
                                     header( 'Location: /avlite' ) ;
                                }
                            ?>   

                    <?php }else{ ?>
                    
                        <?php  //include('assets/include/single-product.php'); ?>

                            <jdoc:include type="component" />
                            <div class="post post--story">
                                <div class="post_body formatted">
                                    <jdoc:include type="message" />
                                </div>
                            </div>
                            <jdoc:include type="modules" name="form-field" style="none"/> 
                            <jdoc:include type="modules" name="product-listing" />
                    <?php } ?>

            </div>

            <div class="t-sidebar">
                <div class="widget">  
                    
                    <!--sidebar-->     
                    <jdoc:include type="modules" name="sidebar" />   
                    <!--sidebar end --> 
                   
                </div>
            </div>
            <section class="t-sidebar t-right ">
                <jdoc:include type="modules" name="avlite-airfield-module" style="none" />
                <jdoc:include type="modules" name="avlite-obstruction-module" style="none" />
                <jdoc:include type="modules" name="avlite-heliport-module" style="none" />
            </section>     

            
            <jdoc:include type="modules" name="avlite-accessories-module" style="none" />
         
        </div> 

        <?php } ?>

<!-- footer -->

        <aside class="t-sidebar--secondary">
            <div class="small-logo">
                <a href="#"><img src="<?php echo $this->baseurl ?>/templates/avlite/assets/i/small-logo.jpg" /></a>
            </div>
            <div class="widget widget__contact">
                <p>H/O call : <span>+61(3) 5977 6128 </span></p>
                <p>USA & Canada call : <span>+1 (603) 737 1310</span></p>
            </div>
            <div class="widget widget__subscribe">
                
                <?php 
                    //getting email input
                    JRequest::get( 'post' )
                ?>

                <form class="subscribe__form" action="/avlite/contact/subscribe" method="POST">
                    <input type="email" name="email" id="Email" class="subscribe__input input-full" placeholder="YOUR EMAIL ADDRESS" required>
                    <button class="button  button__subscribe" type="submit" value="">SUBSCRIBE</button>
                </form>
                <!-- subscribe -->
                    <!-- <jdoc:include type="modules" name="subscribe" /> -->
                <!-- subscribe -->
              
            </div>
        </aside>

        <footer class="t-footer">  
            <nav class="menu subsidiary-menu">
                <!-- <ul class="menu__root">
                    <li class="menu__item"><a href="#" class="">Products</a></li>
                    <li class="menu__item"><a href="#" class="">Video Gallery</a></li>
                    <li class="menu__item"><a href="#" class="">Contact Us</a></li>
                </ul> -->
                <jdoc:include type="modules" name="footer-menu" />
            </nav>
             <p class="copyright">
                © 2013 All rights reserved.
            </p>
        </footer> 

<!-- footer end -->       
 
</div>   

</body>

</html>

