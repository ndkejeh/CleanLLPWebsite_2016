$(document).ready(function(){
    /////////Variables/////////
    var footerSmoother = 0;
    var navSmoother = 0;
    var timerVar; 
    var timerFooter;
    var closeEventTimer; //the timer for the navbar close function
    
    /////////////////////////////////////Footer Script//////////////////////////////////////////////////
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
        /////////////////Important height adjustment event for footer///////////////////
        footerSmoother ++; //increment smoother variable make sure resize event is needed
        if(footerSmoother == 1){
            chgFooter(); //and call the change footer method
        }
        ////////Important close event for Navbar///////////////////
        if (window.innerWidth > 992){
             $("span.material-icons").text("add");
             $("span.material-icons").next().removeAttr("style");
        }
    });
    ///////////Maybe re-write setInterval code for footer to see if initial extra height issue is solved///////

    //////////////////////////////////////Navbar Script/////////////////////////////////////////////////////////////
    $(".nav-wrapper").on("click", function(){
                    //       $(this).hide(500);
                           });

    $(".logo-big").mouseover(function() {
                           $(".nav-wrapper").show(250);
                           if($(window).scrollTop() > 10){//then we'll hide the menu 4 seconds after mouseover
                                timerVar=setTimeout(function(){$(".nav-wrapper").hide(500)},4000);   
                           }
                           // alert(window.innerWidth + " px");
                          //  alert($(window).scrollTop()+ "px");
                           });
    //need to do an if(open) on scroll hide//
    //nav-content SHOW on the mouseover; HIDE after a few seconds or on scroll//

    $('.logo-small').click(function (){
        $(".nav-wrapper").toggle(250);
    });
    $("a.change-icon").mouseenter(function() {
                              $(this).next().css("color", "#fff");
                            });      
    $("a.change-icon").mouseleave(function() {
//                            $(".material-icons").css("color", "#000");
                            $(this).next().removeAttr("style"); //takes away the style attribute it built on mouseenter
                            });
    $("span.material-icons").click(function () {
                        if($(this).text() == "add") {
                            //first rest any other open dropdowns
                            $("span.material-icons").text("add");
                            $("ul.sub-menu").slideUp("500");
                            //then open this particular dropdown
                            $(this).next().slideDown("500");
                            $(this).text("clear");                                                
                        } else {
                            $(this).next().slideUp("500");                                                                        
                            $(this).text("add");
                        }                    
                    });
    $("ul.sub-menu").mouseenter(function() {
        $(this).prevAll().css({"background": "#333333", "color": "#fff"});
    });
    $("ul.sub-menu").mouseleave(function() {
        $(this).prevAll().removeAttr("style");
    });

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
    
    //Important close function for navbar//
    closeEventTimer = setInterval(function() {
                        if($(".nav-wrapper, .logo-small, .logo-big").is(":hover")){
                            alert("It's true!!");
                        };    
    }, 300);
    /////////////////////////////////////////Image Overlays//////////////////////////////////////////
    $("img.img-responsive").mouseenter(function() {
        $(this).next().slideDown("100");
    })
    $("img.img-responsive").mouseleave(function() {
        $(this).next().slideUp("100");
    })
});