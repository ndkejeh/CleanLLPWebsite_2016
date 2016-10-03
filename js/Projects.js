 $(document).ready(function(){
            var scrollAdjust = 1 //set scrollAdjust so it can call chgBlurbHeight on first scroll
     
            //initialise #work-blurb-height run the resize event//
            var chgBlurbHeight = function(){
                if(window.innerWidth > 992){ //then we're not in xs/mobile view so run it
                     $("#work-blurb-height").css('height', $("#about-red").height());    
                }
                else {//else we're in the small view were we'd like auto height
                    $("#work-blurb-height").css('height', "auto");    
                }   
            }
            
            //Run the resize event whenever the window is resized//
            $(window).resize(function(){
                if(window.innerWidth > 992){ //then we're not in xs/mobile view so run i
                    $("#work-blurb-height").css('height', $("#about-red").height());    
                }
                else { //else we're in the small view so make auto
                    $("#work-blurb-height").css('height', "auto");    
                }
            });
     
            $(window).scroll(function(){
                if(scrollAdjust == 1){
                    chgBlurbHeight();
//                    alert("chgBlurbHeight called");
                }
                scrollAdjust = 0;
            })
            
            /////////////////////////Carousel////////////////////////////////////
             $("#a50-carousel").owlCarousel({
 
                  navigation : false, // Show next and prev buttons
                  slideSpeed : 300,
                  paginationSpeed : 400,
                  singleItem:true
            });
        });