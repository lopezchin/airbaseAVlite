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
            $('.menu__list, .dropdown__list').amenu({
                'speed': 'fast',
                'animation': 'slide'
            });
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
    Product: {
        init: function () {
            var e = this;
            this.productSlider();
            this.bxSlider();
            this.zoomSlider();
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
              maxSlides: 5,
              slideWidth: 173,
              slideMargin: 14
            });

            $('.accesorries--carousel').bxSlider({    
              maxSlides: 4,
              slideWidth: 185,
              slideMargin: 20
            }); 
        },
        zoomSlider: function() {           
            $('#prod-zoom').etalage({
                thumb_image_width: 512,
                thumb_image_height: 250,
                source_image_width: 800,
                source_image_height: 700,
                zoom_area_width: 400,
                zoom_area_height: 400,
                zoom_area_distance: 5,
                small_thumbs: 3,
                smallthumb_inactive_opacity: 0.6,
                smallthumbs_position: 'right',
                show_icon: false,
                autoplay: false,
                keyboard: false,
                zoom_easing: true
            });
        },
        zoomSlider: function() {           
            $('.zoom-item').zoom();      
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

