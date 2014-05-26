<?php


//This is the code for the page with menu ID 6
$menuID = JSite::getMenu()->getActive()->id ;
if ($menuID == '106'){ ?>
            
            <script type="text/javascript">
              (function() {
                var cx = '000102259637499413599:sfva5kr0qde';
                var gcse = document.createElement('script');
                gcse.type = 'text/javascript';
                gcse.async = true;
                gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                    '//www.google.com/cse/cse.js?cx=' + cx;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(gcse, s);
              })();
            </script>
               
                <script type="text/javascript">
                    $(function($){
                        avlite.Global.init();  
                        avlite.Category.init();  
                        avlite.Front.init();  
                        avlite.Product.init();
                        avlite.Zoom.init();
                        avlite.Lightbox.init();  
                    });
                </script>
        
            <script language="JavaScript">
            <!--
            function viewDist(id) {
                var url="distrib_profile.php?distId="+id;
                windowDist=window.open(url,"windowDist","width=680,height=420,toolbar=yes,menubar=yes,status=yes,resizable=yes,scrollbars=yes");
            }
            // -->
            </script>

<?php }else{ ?>
<?php } ?>    