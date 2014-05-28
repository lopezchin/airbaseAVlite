var avlite = {
   Global: {
        init: function () {
            var e = this;
            this.menuFlyout();

            $("a.lightbox").colorbox({rel:'group1'});
            $( ".tab" ).tabify(function(){});
            
        },
        polyfillPlaceholders: function () {
            if (!Modernizr.input.placeholder) {
                $("input, textarea").each(function () {
                    if ($(this).val() == "" && $(this).attr("placeholder") != "") {
                        $(this).val($(this).attr("placeholder"));
                        $(this).focus(function () {
                            if ($(this).val() == $(this).attr("placeholder")) $(this).val("")
                        });
                        $(this).blur(function () {
                            if ($(this).val() == "") $(this).val($(this).attr("placeholder"))
                        })
                    }
                })
            }
        },
        menuFlyout: function() {
            // $('.menu__list, .dropdown__list').amenu({
            //     'speed': 'fast',
            //     'animation': 'slide'
            // });
        }
        
    },
    Front: {
        init: function () {
            var e = this;
            this.tabbedSlider();
        },
        tabbedSlider: function() {
            $('.flexslider').flexslider({
                  animation: "fade",
                  direction: "vertical",
                  controlNav: "thumbnails",
                  start: function (slider) {
                      $('body').removeClass('loading');
                  }
            });
        }
    },

    Zoom: {

        init: function () {
            var e = this;
            this.sliderzoom();

        },

        sliderzoom: function() {
            $("#zoom-img").elevateZoom({

                tint:true, 
                tintColour:'#c72e4b',
                zoomLevel : 0.6, 
                tintOpacity:0.5,
                zoomWindowWidth:400,
                zoomWindowHeight:400,
                borderColour: '#ccc',
                lensBorderColour: '#ccc',
                gallery:'gal1', 
                cursor: 'crosshair', 
                galleryActiveClass: 'list-active'
            });

            // $("#zoom-img").elevateZoom({gallery:'gal1',galleryActiveClass: 'list-active'});
            
         }


    },

    Lightbox: {

        init: function () {
            var e = this;
            this.formlightbox();
        },
         formlightbox: function() {
            // Using a selector:
            $(".lightbox-form").colorbox({
                inline: true,
                width: "80%",
                maxWidth: "1000px",
                href:"#form-quotation"
            }); 
                   // Using a selector:
            $(".lightbox-form-login").colorbox({
                inline: true,
                width: "30%",
                maxWidth: "1000px",
                href:"#form-login"
            });

            $(function () {
            $(".country_id").selectbox();
          });


            $(document).ready(function() { 
                $("#bulletins").tablesorter({ 
                    // pass the headers argument and assing a object 
                    headers: { 
                        // assign the secound column (we start counting zero) 
                        2: { 
                            // disable it by setting the property sorter to false 
                            sorter: false 
                        }, 
                        // assign the third column (we start counting zero) 
                        3: { 
                            // disable it by setting the property sorter to false 
                            sorter: false 
                        } 
                    } 
                }); 
            });

           var the_append_id = 1;
          (function($){
            $(function(){
              $(".criteria_title").click(function () {
              $('.criteria_content').slideUp('slow');
              $('.criteria_item').removeClass('is-active');
              var li = $(this).closest('li');
              li.addClass('is-active');
              li.find(".criteria_content").slideDown("slow");
              return false;
              });
              return false;
            });
          })(jQuery);

    }

    },


    Product: {
        init: function () {
            var e = this;
            this.productSlider();
            this.bxSlider();
        },
        productSlider: function() {
            $('.flexslider').flexslider({
                animation: "fade",
                direction: "vertical",
                controlNav: "thumbnails",
                start: function (slider) {
                  $('body').removeClass('loading');
                }
            });
        },
        bxSlider: function() {
           $('.products--carousel').bxSlider({   
              mode: 'vertical',
              minSlides: 5, 
              maxSlides: 5,
              
              slideMargin: 14
            });
           $('.mainproducts--carousel').bxSlider({   
              mode: 'vertical',
              minSlides: 3, 
              maxSlides: 3,
              infiniteLoop: false,
              slideMargin: 14
            });


            $('.accesorries--carousel').bxSlider({    
              maxSlides: 4,
              slideWidth: 185,
              slideMargin: 20
            }); 
        },
    },
    Category: {
        init: function () {
            var e = this;
            this.LiteTooltip();
        },
        LiteTooltip: function() {
            $("#fhotspot1").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });
         
            $("#fhotspot2").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot3").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot4").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot5").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot6").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot7").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot8").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot9").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot10").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot11").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });

            $("#fhotspot12").LiteTooltip({
                textalign: "left",
                trigger: "hover",
                title:
                '<div class="cat-template">' +
                '<p>' +        
                'Runway Edge Lights' +
                '</p>' +
                '</div>'
            });
        }
    }
}

