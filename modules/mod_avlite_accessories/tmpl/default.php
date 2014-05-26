<?php 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$document = JFactory::getDocument();

?>
<section class="nav-slider-products accesorries">
    <h1>Accessories</h1>
    <div class="bx-wrapper" style="max-width: 800px;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 109px;">
        <ul class="products accesorries--carousel block-grid" style="width: 2150%; position: relative; transition-duration: 0s; transform: translate3d(-820px, 0px, 0px);">
            <?php foreach($products as $data): ?>
            <li style="float: left; list-style: none outside none; position: relative; width: 185px; margin-right: 20px;" class="bx-clone">
                <a class="parent">
                    <table id="wrapper">
                        <tbody>
                            <tr>
                                <td>
                                    <img alt="" src="<?php echo json_decode($data->images)->image_intro ?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="font-size: 12px !important;" class="product-title">
                     <?php echo $data->title ?>
                    </div> 
                </a>
            </li>
        	<?php endforeach; ?>
        </ul>
    </div>
</section>