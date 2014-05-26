<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$document = JFactory::getDocument();

?>
<div class="widget widget--skin-box" id="other_products">
    <h4 style="text-transform: capitalize" class="widget__title">Other <span>airfield</span> Products</h4>
    <section class="nav-slider-products vertical">
        <div class="bx-wrapper" style="max-width: 100%;">
	        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 601px;">
		        <ul class="products products--carousel" style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -616px, 0px);">
		        	<?php foreach($products as $data): ?>
			        <li style="float: none; list-style: none outside none; position: relative; width: 213px; margin-bottom: 14px;" class="bx-clone">
			            <a href="#" class="parent"></a>
			            <center>
			                <a href="#">
			                    <table id="wrapper">
			                        <tbody>
			                            <tr>
			                                <td><img alt="" src="<?php echo json_decode($data->images)->image_intro ?>"></td>
			                            </tr>
			                        </tbody>
			                    </table>
			                </a>
			            <center>
			            		<a href="#"></a>
			            		<div style="font-size: 12px !important;" class="product-title"><a href="#">
			                        </a><a href=""><?php echo $data->title ?></a>
			                    </div> 
			            </center>
			        </li>
		       		<?php endforeach; ?>
				</ul>
	       </div>
       </div>
    </section>  
</div>