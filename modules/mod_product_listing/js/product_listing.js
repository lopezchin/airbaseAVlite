function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top - 40},'slow');
}

$(function(){
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

    function showItem(a_items){
        $(".iso-container-products .single").animate({ opacity: 0.4 });

        for (var i = 0; i < a_items.length; i++) {
            //$(a_items[i]).show();
            $(a_items[i]).animate({ opacity: 100 });
        };
            showObstHeli();
    }
        
    function showObstHeli()
    {
        var obhl_items =  [".obstr",".heli"];

        for (var i = 0; i < obhl_items.length; i++) {
        //$(a_items[i]).show();
        $(obhl_items[i]).animate({ opacity: 100 });
        };
    }

    $(".red-line").click(function(e){
        var items =  [".AV-425-RF",".AV-70_AV-70-HI",".AV-72-RF"];

        showItem(items);
                scrollToAnchor("AV-425-RF");
        e.preventDefault();
    });
    $(".blue-line").click(function(e){
        var items =  [".AV-70_AV-70-HI",".AV-72-RF"];

        showItem(items);
                scrollToAnchor("AV-70_AV-70-HI");
        e.preventDefault();
    });
    $(".item-av-solar-pals").click(function(e){
        var items = [".AV-SOLAR-PALS"];

        showItem(items);
                scrollToAnchor("AV-SOLAR-PALS");
        e.preventDefault();
    });

    /*$(".item-papi").click(function(e){
        var items = [".product-papi"];

        showItem(items);
        e.preventDefault();
    });*/

    $(".item-windsock-cones").click(function(e){
        var items = [".AV-WC-L-WindsockAssembly",".AV-09-4WL"];
        showItem(items);
                scrollToAnchor("AV-WC-L-WindsockAssembly");
                e.preventDefault();
    });


    $(".item-cones").click(function(e){
        var items = [".AV-MC_AV-LC_Cone-Markers"];
        showItem(items);
                scrollToAnchor("AV-MC_AV-LC_Cone-Markers");
                e.preventDefault();
    });

    $(".item-gable").click(function(e){
        var items = [".AV-GM_Gable"];
        showItem(items);
                scrollToAnchor("AV-GM_Gable");
                e.preventDefault();
    });

    $(".item-arealight").click(function(e){
        var items = [".product-arealight"];
        showItem(items);e.preventDefault();
    });


    $(".item-av15-av60").click(function(e){
        var items = [".AV-15",".AV-60"];
        showItem(items);
                scrollToAnchor("AV-15");
                e.preventDefault();
    });

    $(".item-palc").click(function(e){
        var items = [".AV-PALC"];
        showItem(items);
                scrollToAnchor("AV-PALC");
                e.preventDefault();
    });

    $(".item-heliport-lighting").click(function(e){
                
        var items = [".single"];
        showItem(items);
    });
        
        $(".item-air-lights").click(function(e){
        var items = [".single"];
        showItem(items);     
                
    });
        
        $(".item-obstr-lights").click(function(e){
        var items = [".single"];
        showItem(items);
                
    });
        
        $(".item-heli-lights").click(function(e){
                
        var items = [".single"];
        showItem(items);
    });

});