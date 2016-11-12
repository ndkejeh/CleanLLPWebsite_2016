<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!--- Adobe Typekit for Adelle Sans reg & Bold -->
    <script src="https://use.typekit.net/usk7nvk.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <!--Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>About | Perspectives</title>
    <link rel="icon" href="images/BlockFavicon_Large.jpg"> 
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Icons-->
</head>
<body>
 <!-- Start of reponsive Nav bar -->
	<?php include 'navbar.php';?>
 <!-- end of Nav menu container -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="banner-container">
                    <img class="img-responsive" src="images/AboutPagesBanner.jpg">
                    <div class="banner-overlay" style="background: rgba(0,0,0,0)">
                        <p class="about-page-headlines">We think Africa is ripe for new ideas and paradigms. We work with entities holding similar   <span style="color: #DB7833">perspectives</span>.</p>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-xs-12 nopadding" id="perspTextBG">
                <div class="body-frame">
                    <p class="body">Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Nulla non nisl justo. 
                    Aenean molestie molestie nunc. Morbi sed 
                    dolor mollis, condimentum ligula pharetra, 
                    posuere felis. Morbi id ex hendrerit, 
                    commodo lacus eu, venenatis lectus. 
                    Nullam felis lectus, molestie et velit sed, 
                    molestie posuere elit. Sed at nulla sit amet 
                    ipsum tincidunt tempor vel vitae sapien. 
                    Curabitur nibh libero, pulvinar ac leo sit amet, 
                    commodo ultrices velit. Proin odio nisi, 
                    tincidunt eu nunc non, vulputate dictum velit.Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Nulla non nisl justo. 
                    Aenean molestie molestie nunc. Morbi sed 
                    dolor mollis, condimentum ligula pharetra, 
                    posuere felis. Morbi id ex hendrerit, 
                    commodo lacus eu, venenatis lectus. 
                    Nullam felis lectus, molestie et velit sed, 
                    molestie posuere elit. Sed at nulla sit amet 
                    ipsum tincidunt tempor vel vitae sapien. 
                    Curabitur nibh libero, pulvinar ac leo sit amet, 
                    commodo ultrices velit. Proin odio nisi, 
                    tincidunt eu nunc non, vulputate dictum velit.</p>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-6 nopadding">
                <div class="persp-info" id="tech-over-text">
                    <p class="headline-text" id="tech-over">Technology over Barriers</p>
                </div>
            </div>
            <div class="col-sm-6 nopadding">
                <div class="persp-info" id="power-map-box">
                    <img class="img-responsive" id="Power-map" src="images/PowerProblem_Map_SansHeading.png" alt="Africa Power Map">
                </div>
            </div>
         </div>
        <div class="row">
            <div class="col-sm-4 col-sm-push-8 nopadding">
                <div class="persp-info second-row">
                    <p class="services-blurb" id="power-info-text">These graphics illustrate the severity of The power problem in African states, but for some it also identifies the opportunities.</p>
                </div>
            </div>
            <div class="col-sm-8 col-sm-pull-4 nopadding">
                <div class="persp-info second-row" id="density-info">
                    <img class="img-responsive" id="power-info" src="images/PowerInfograph.png" alt="power density infographic">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-6 nopadding">
                <a href="attributes.php"><img class="img-responsive" src="images/Attributessq.png" alt="attributes"></a>
            </div>
            <div class="col-sm-3 col-xs-6 nopadding">
                <a href="perceptions.php"><img class="img-responsive" src="images/OurPerceptionsSq.jpg" alt="Our Perceptions"></a>
            </div>
            <div class="col-sm-3 col-xs-6 nopadding">
                <img class="img-responsive" src="images/Green-Filler.png" alt="LLP Green!">
            </div>
            <div class="col-sm-3 col-xs-6 nopadding">
                <img class="img-responsive" src="images/GetinTouchSq.png" alt="Get in Touch!">
            </div>
        </div>
    </div>
    <!--End of Container-->
    <!--Start of Footer-->
		<?php include 'footer.php';?>
	<!--End of Footer-->
    <!--------------------Start of Scripts--------------->
    <script src="js/LLPSite_2016.js"></script>
    <script>
        $(document).ready(function(){
            //initialise #tech-over-text height - run the resize event//
          if(window.innerWidth > 768){ //then we're not in xs/mobile view so run i
                     $("#tech-over-text").css('height', $("#power-map-box").height());    
                }
                else { //we're in the small view were we'd like auto height
                    $("#tech-over-text").css('height', "auto"); 
                    $(".second-row").css('height', "auto"); 
                }
            
            //Run the resize event whenever the window is resized//
            $(window).resize(function(){
                if(window.innerWidth > 768){ //then we're not in xs/mobile view so run i
                    $("#tech-over-text").css('height', $("#power-map-box").height());  
                    $(".second-row").css('height', "300px"); 
                }
                else { //we're in the small view were we'd like auto height
                     $("#tech-over-text").css('height', "auto"); 
                     $(".second-row").css('height', "auto"); 
                }
            });
        })
    </script>
    <!--------------------End of Scripts--------------->
    <!--End of Content-->
</body>
</html>