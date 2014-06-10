$(function(){

    $('#category_tab li a').click(function(){
        
        $('.single').css({'opacity':1});
      
    });

    $('.hover-item-con').click(function(){

        $('.single').css({'opacity':0.6});
        $('#'+$(this).attr('data-id')).css({'opacity':1});
        
    });


    $("#image-category").hover(
                function(){
                    $(this).find('.back-overlay').fadeIn().css({"z-index":5});  
                }, function(){
                    $(this).find('.back-overlay').stop().fadeOut().css({"z-index":0});  
                }
            );
        
        $("#image-category .hover-item-con").hover(
                function(){
                        $(this).find('.hover-title').fadeIn("fast")
                                .addClass('show').css({"z-index":9})
                                .parent().css({"z-index":9}); 

                }, function(){
                        $(this).find('.hover-title').stop().fadeOut("fast")
                                .addClass('hide').css({"z-index":0})
                                .parent().css({"z-index":0});   
                }
        );

    $(".red-line").hover(
        function(){

            $("#animation-top-image").fadeIn("fast").css({"z-index":5});    
        }, 

        function(){
            $("#animation-top-image").stop().fadeOut("fast").css({"z-index":0});    
        }
    );
       

    $(".blue-line").hover(
        function(){
            $("#animation-bottom-image").fadeIn("fast").css({"z-index":5}); 
        }, 
        function(){
            $("#animation-bottom-image").stop().fadeOut("fast").css({"z-index":0}); 
        }
    );

    $(".hover-item-con").hover(
        function(){
            $($(this).attr('individual-effects')).fadeIn("fast").css({"z-index":5});    
        }, function(){
            $($(this).attr('individual-effects')).stop().fadeOut("fast").css({"z-index":0});    
        }
    );

});