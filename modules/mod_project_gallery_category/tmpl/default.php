<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
	

	<?php foreach($lists as $list): ?>
		
		<?php
			$id 	= $list->id;
			$title = $list->title;
			$introtext = $list->introtext; 
			$image = json_decode($list->images);
			$img = $image->image_intro;
			$img_caption = $image->image_intro_caption;
			$img_alt =$image->image_intro_alt;

		 ?>

        <div class="single"><a class="lightbox1 prodgal1" href="#" rel="lightbox"> <img src="<?php echo $img ?>" alt="<?php echo $img_alt ?>" /> </a>
            <div class="title"><a href="#"><?php echo $title ?></a></div>
        </div>
	<?php endforeach; ?>