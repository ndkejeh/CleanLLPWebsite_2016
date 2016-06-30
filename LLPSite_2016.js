$(document).ready(function(){
    /////////Variables/////////
    var footerSmoother = 0;
    var navSmoother = 0;
    var timerVar; 

    /////////footer script/////////
    var chgFooter = function (){
        $('body').css('margin-bottom',$('.footer').height());
        footerSmoother = 0; //reset footerSmoother function
    }
    //window resize trigger event
    $(window).resize(function(){
        footerSmoother ++; //increment smoother variable make sure resize event is needed
        if(footerSmoother == 1){
            chgFooter(); //and call the change footer method
        }
    });

    /////////Navbar script/////////
    $(".nav-wrapper").on("click", function(){
                           $(this).hide(500);
                           });

    $(".logo-small, .logo-big").mouseover(function() {
                           $(".nav-wrapper").show(250);
                           timerVar=setTimeout(function(){$(".nav-wrapper").hide(500)},4000);
                           });
    //need to do an if(open) on scroll hide//
    //nav-content SHOW on the mouseover; HIDE after a few seconds or on scroll//


    $(window).scroll(function(){
        if($(this).scrollTop()<10){
            clearTimeout(timerVar);
            $(".nav-wrapper").show(500);
           // alert($(".fixed-navbar").width() + " px");
        } else {
            clearTimeout(timerVar);
            $(".nav-wrapper").hide(500);
        }
    });

});