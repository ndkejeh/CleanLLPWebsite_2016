<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!---Metadata!!!--->
    <meta property="og:title" content="Our Services" />
    <meta property="og:image" content="http://decharles.com/images/Services-Banner.png" />   
    <meta name="description" content="We work with organisations scaling Africa's challenging and impactful tech sectors."/>
    <meta property="og:description" content="We work with organisations scaling Africa's challenging and impactful tech sectors." />
    <!---Above the generic included metadata should be any page specific metadata---->
    <?php include_once("metadata-generic.php") ?>
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
    
    <title>De Charles | Services</title>
    <link rel="icon" href="images/BlockFavicon_Large.jpg"> 
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Icons-->
</head>
<body>
    <!-- Start of Google Analytics Code -->
    <?php include_once("analyticstracking.php") ?>
    <!-- End of Google Analytics Code -->
 <!-- Start of reponsive Nav bar -->
	<?php include 'navbar.php'; ?>
 <!-- end of Nav menu container -->
    <div class="container">
        <div class="row">
             <div class="col-xs-12 nopadding">
                <div class="banner-container">
                    <img class="img-responsive" src="images/Services-Banner.png">
                    <div class="banner-overlay" style="background: rgba(0,0,0,0)">
                        <p class="about-page-headlines" id="services-main-headline">We work with 
                        entities scaling Africa&#8217;s challenging tech sectors</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Narratives-->
        <a class="simple-link" href="strategy.php">
            <div class="row main-services-row" id="main-services-row-1"> 
                <div class="col-xs-5 col-xs-offset-1">
                    <div class="row">
                        <div class="col-xs-11 nopadding">
                            <p class="services-main-title" id="services-height-bench">Product Narratives</p>
                        </div>
                        <div class="col-xs-1 nopadding"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-xs nopadding">
                            <p class="services-blurb" id="services-text-id">We work with clients to unearth the powerful
                                stories behind their products that move the global community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <!--<p class="services-blurb" id="services-text-id">We work with clients to unearth the powerful
                                stories behind their products that move the global community.</p>-->
                    <img class="img-responsive services-main-icon" src="images/Vector-Smart-Object.png">
                </div>
                <div class="col-xs-1 nopadding"></div>
            </div>
        </a>
        <!--Software Delivery-->
        <a class="simple-link" href="design.php">
            <div class="row main-services-row" id="main-services-row-2">
                <div class="col-xs-5 col-xs-offset-1">
                    <div class="row">
                        <div class="col-xs-11 nopadding">
                            <p class="services-main-title">Software Delivery</p>
                        </div>
                        <div class="col-xs-1 nopadding"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-xs nopadding">
                            <p class="services-blurb" id="services-text-id">We help companies design and build digital
                                    footprints and processes in a continent revolutionsied by mobile &amp; internet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <!--<p class="services-blurb" id="services-text-id">We help companies design and build digital
                                    footprints and processes in a continent revolutionsied by mobile &amp; internet.</p>-->
                    <img class="img-responsive services-main-icon" id="design-icon" src="images/Vector-Smart-Object1.png">
                </div>
                <div class="col-xs-1 nopadding"></div>
            </div>
        </a>    
        <!--Hardware Delivery-->
        <a class="simple-link" href="delivery.php">
            <div class="row main-services-row" id="main-services-row-3">
                <div class="col-xs-5 col-xs-offset-1">
                    <div class="row">
                        <div class="col-xs-11 nopadding">
                            <p class="services-main-title">Hardware Delivery</p>
                        </div>
                        <div class="col-xs-1 nopadding"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-xs nopadding">
                            <p class="services-blurb" id="services-text-id">We work with clients to take their hardware
                                    ideas from conception through to commercialisation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <!--<p class="services-blurb" id="services-text-id">We work with clients to take their hardware
                                    ideas from conception through to commercialisation.</p>-->
                    <img class="img-responsive services-main-icon" src="images/Vector-Smart-Object2.png">
                </div>
                <div class="col-xs-1 nopadding"></div>
            </div>
        </a>
    </div>
    <!--End of Container-->
		 <?php include 'footer.php';?>
    <!--Start of Footer-->
    <!--------------------Start of Scripts--------------->
    <script src="js/LLPSite_2016.js"></script>
    <script>
        $(document).ready(function(){
            //Initialize the heights//
            if (window.innerWidth <= 768) {
                $(".main-services-row").css('height', ($("#services-height-bench").height()+ 60));
            } else {  //else remove attributes so it doesn't affect larger pages
                $(".main-services-row").removeAttr("style");
            };
            
           //dynamic height adjustments//
            $(window).resize(function(){
                 if (window.innerWidth <= 768) {
                     $(".main-services-row").css('height', ($("#services-height-bench").height()+ 60));
                 }
                else {  //else remove attributes so it doesn't affect larger pages
                    $(".main-services-row").removeAttr("style");
                };
            });
            
        });
    </script>
    <!--------------------End of Scripts--------------->
    <!--End of Content-->
</body>
</html>