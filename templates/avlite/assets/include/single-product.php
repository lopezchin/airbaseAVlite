<?php
    // $input = JFactory::getApplication()->input;

    // // should be article, categories, featured, blog...
    // $view = $input->get('view'); 

    // // if it's a category view, this will be the category id, else the article id
    // $id = $input->getInt('id'); 

    // // in an article view, this will be the cat id.
    // $catid = $input->getInt('catid'); 

    // // this is the menu item id i.e. what you call page id I guess.
    // $Itemid = $input->getInt('Itemid'); 

    // echo "View = ".$view."<br>"."id = ".$id."<br>"."catid = ".$catid."<br>"."Itemid = ".$Itemid;
   
   $menu = JFactory::getApplication()->getMenu(); 
   // echo $menu->getActive()->alias;
   $alias = $menu->getActive()->alias;
?>

<section class="slider slider--second">
  <div class="slides slider-img--cont" style="text-align:center;height:264px;margin-top:2px;">
        <img id="zoom-img" src="<?php echo $this->baseurl.'/'.'templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_456x246.jpg' ?>" alt="Avlite AV-425 with high visibility aviation yellow chassis" data-zoom-image="<?php echo $this->baseurl.'/'.'templates/avlite/assets/i/products/'.$alias.'/'.$alias.'.jpg' ?>">                        
  </div>

  <div class="flex-control-nav flex-control-thumbs">
   
    <div id="gal1">
        <section class="nav-slider-mainproducts vertical">
            <div class="bx-wrapper" style="max-width: 100%;">
                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 78px;">
                <ul class="mainproducts--carousel" style="width: auto; position: relative; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(0px, 0px, 0px);">
                    <li class="slider-img--cont thumb-img">
                        <center>
                            <a href="#" data-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_456x246.jpg' ?>"
                             data-zoom-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_1000x900.jpg' ?>" class="zoom_trigger list-active">
                                <img id="zoom-img" src="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_134x74.jpg' ?>" alt="">
                                <span class="active-img"></span>
                            </a>
                        </center>
                    </li>
                    <li class="slider-img--cont thumb-img">
                        <center>
                            <a href="#" data-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img1_456x246.jpg' ?>"
                             data-zoom-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img1_1000x900.jpg' ?>" class="zoom_trigger list-active">
                                <img id="zoom-img" src="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img1_134x74.jpg' ?>" alt="">
                                <span class="active-img"></span>
                            </a>
                        </center>
                    </li>
                    <li class="slider-img--cont thumb-img">
                        <center>
                            <a href="#" data-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img2_456x246.jpg' ?>"
                             data-zoom-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img2_1000x900.jpg' ?>" class="zoom_trigger list-active">
                                <img id="zoom-img" src="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img2_134x74.jpg' ?>" alt="">
                                <span class="active-img"></span>
                            </a>
                        </center>
                    </li>
                    <li class="slider-img--cont thumb-img">
                        <center>
                            <a href="#" data-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img3_456x246.jpg' ?>"
                             data-zoom-image="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img3_1000x900.jpg' ?>" class="zoom_trigger list-active">
                                <img id="zoom-img" src="<?php echo $this->baseurl.'/'.'/templates/avlite/assets/i/products/'.$alias.'/'.$alias.'_Img3_134x74.jpg' ?>" alt="">
                                <span class="active-img"></span>
                            </a>
                        </center>
                    </li>                
                                   
                </ul>
                </div>
            </div>
        </section>
    </div>
  </div>

</section>
