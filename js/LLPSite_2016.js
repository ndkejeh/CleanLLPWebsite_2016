$(document).ready(function(){
    /////////Variables/////////
    var footerSmoother = 0;
    var navSmoother = 0;
    var timerVar; 
    var timerFooter;
    
    /////////footer script/////////
    var chgFooter = function (){
        var footerCorrection = 4;
        footerSmoother = 0; //reset footerSmoother function
        timerFooter = setInterval(function(){
            $('body').css('margin-bottom',$('.footer').height());
            if (!footerCorrection) {
                clearInterval(timerFooter);
                footerCorrection --;
            }
        }, 300)
    }
    //window resize trigger event
    $(window).resize(function(){
        footerSmoother ++; //increment smoother variable make sure resize event is needed
        if(footerSmoother == 1){
            chgFooter(); //and call the change footer method
        }
    });
    ///////////Maybe re-write setInterval code for footer to see if initial extra height issue is solved///////

    /////////Navbar script/////////
    $(".nav-wrapper").on("click", function(){
                           $(this).hide(500);
                           });

    $(".logo-small, .logo-big").mouseover(function() {
                           $(".nav-wrapper").show(250);
                           if($(window).scrollTop() > 10){//then we'll hide the menu 4 seconds after mouseover
                                timerVar=setTimeout(function(){$(".nav-wrapper").hide(500)},4000);   
                           }
                           // alert(window.innerWidth + " px");
                          //  alert($(window).scrollTop()+ "px");
                           });
    //need to do an if(open) on scroll hide//
    //nav-content SHOW on the mouseover; HIDE after a few seconds or on scroll//


    $(window).scroll(function(){
        if($(this).scrollTop()<10){
            clearTimeout(timerVar);
            if(window.innerWidth > 992){
                $(".nav-wrapper").show(500);   
            }//else on smaller screens don't show the menu automatically
           // alert($(".fixed-navbar").width() + " px");
        } else {
            clearTimeout(timerVar);
            $(".nav-wrapper").hide(500);
        }
    });

});