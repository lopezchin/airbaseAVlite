<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
 <style>
            #modal {
                position:absolute;
                background:gray;
                padding:8px;
            }

            #content {
                background:white;
                padding:20px;
            }

            #close {
                position:absolute;
                background:url(close.png);
                width:24px;
                height:27px;
                top:-7px;
                right:-7px;
            }
        </style>
<ul>
	<?php foreach($lists as $list): ?>
		
		<?php
			$id 	= $list->id;
			$title = $list->title;
			$introtext = $list->introtext; 
			$image = json_decode($list->images);
			$img = $image->image_intro;
			$img_caption = $image->image_intro_caption;
			$img_alt =$image->image_intro_alt;

			$pdf = 'images/'.$image->image_fulltext;
		 	
		 	$concat_val = $id.'-'.$pdf;
		 ?>


		 <li class="post post--testimonials skin2">

			<div class="post__avatar">
				<center><small><?php echo $img_caption ?></small>
					<h1><img src="<?php echo $img ?>" /></h1>
					<a onclick="resetPassword('<?php echo $concat_val ?>')" class='button button--small' data-case-id="<?php echo $list->id ?>" href='#'>[ PDF 2.3 MB ]</a>
				</center>
			</div>

			<div class="post__content formatted">
				<h4 class="post__title"><?php echo $title ?></h4>
				<input id="recNo" class="recNo" type="hidden" value="0" />

				 <div class="full-content-<?php echo $id ?>" style="display:none">
				 	<div class="content">
				 		<?php echo $introtext; ?>
				 	</div>
				 </div>
				 <a style="display:none" class="readLess readLess-<?php echo $id ?>" data-id="<?php echo $id ?>" href="#">Read Less</a>


				 <div class="less-content-<?php echo $id ?>">
				 	<div class="content">
				 		<?php echo substr($introtext,0,140); ?>...
				 	</div>
				 </div>	
				 
				 <a class="readMore readMore-<?php echo $id ?>" data-id="<?php echo $id ?>" href="#">Read More</a>


			</div>

		 </li>

	<?php endforeach; ?>
</ul>

<!-- <form id="frm1" action="login.php" method='post'>
    <input id="email" onclick="resetPassword()" type="text" name="email" placeholder="Reset Password" />
</form> -->

<script type="text/javascript">
  function resetPassword(val) {  

    var email = prompt("Enter email to download the pdf file", "");
    var convert = val.split('-');

    var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;//validate email
    


    if(!pattern.test(email) || email != '') {
		
		alert('Can\'t proceed to download the pdf');
        return false;

    } else {

		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: "<?php echo JURI::base() . "technical/case-studies"?>",
			data: {
				'id':convert[0],
				'pdf':convert[1],
				'email':email,
				'action': 'notify_email',
			},
			success: function( response ) {
                console.log('adasdasd');

        //        window.location.href= '<?php echo JURI::base() ?>'+convert[1];
			
			}
		});

    	window.location.href= '<?php echo JURI::base() ?>'+convert[1];
    }
   	
    return false;

  }
</script>


    <script>
        var modal = (function(){
            // Generate the HTML and add it to the document
            $modal = $('<div id="modal"></div>');
            $content = $('<div id="content"></div>');
            $close = $('<a id="close" href="#"></a>');

            $modal.hide();
            $modal.append($content, $close);

            $(document).ready(function(){
                $('body').append($modal);                       
            });

            $close.click(function(e){
                e.preventDefault();
                $modal.hide();
                $content.empty();
            });
            // Open the modal
            return function (content) {
                $content.html(content);
                // Center the modal in the viewport
                $modal.css({
                    top: ($(window).height() - $modal.outerHeight()) / 2, 
                    left: ($(window).width() - $modal.outerWidth()) / 2
                });
                $modal.show();
            };
        }());

        // Wait until the DOM has loaded before querying the document
        $(document).ready(function(){




        	$('.readMore').click(function(){

        		var id = $(this).attr('data-id');

        		$('.readMore-'+id).hide();
        		$('.full-content-'+id).show();
        		$('.readLess-'+id).show();
        		$('.less-content-'+id).hide();


        	});

        	$('.readLess').click(function(){

        		var id = $(this).attr('data-id');

        		$('.readLess-'+id).hide();
        		$('.less-content-'+id).show();
        		$('.readMore-'+id).show();
        		$('.full-content-'+id).hide();
        		

        	});


            $('a.popup').click(function(){

            	var id = $(this).attr('data-case-id');

            	var form = $("form").serialize();

                modal($('.case-info-content-'+id).html());

                //load the jquery 
	      		$(document).on('click','.download-pdf',function(){
					$('.wrap_error').hide();
					$('.error').hide();


				    var ids = $(this).attr('data-attr-id'),
                		email = $('#email-'+ids).val();

            		alert( $('#email-'+ids).val() );

                
                	console.log(ids+' '+email);

    

				});

            });





        });
    </script>