<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!---Metadata!!!--->
    <meta property="og:title" content="Product Design" />
    <meta property="og:image" content="http://decharles.com/images/DesignBanner.png" />
    <meta name="description" content="We work with clients to create meaningful innovations that can be impactful in their African contexts."/>
    <meta property="og:description" content="We work with clients to create meaningful innovations that can be impactful in their African contexts." />
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
    
    <title>Product Design</title>
    <link rel="icon" href="images/BlockFavicon_Large.jpg"> 
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Icons-->
</head>
<body>
    <!-- Start of Google Analytics Code -->
    <?php include_once("analyticstracking.php") ?>
    <!-- End of Google Analytics Code -->
 <!-- Start of reponsive Nav bar -->
	<?php include 'navbar.php';?>
 <!-- end of Nav menu container -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 nopadding">
                <img class="img-responsive" src="images/SoftwareBanner.png" alt="Software Banner">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="body-frame">
                    <p class="services-body">We help companies design and build digital
                    footprints and processes in a continent where
                    the internet and mobile telephony has
                    revolutionised industry, practices and society
                        since the turn of the century.</p><p class="services-body">
                    An exponential rate of change across regions
                    at various levels has made the African software
                    space truly dynamic. Based on a company’s
                    objectives and target consumer, a product
                    could have drastically different constraints
                    with regards to speed, complexity, data
                    demand and front-end visualisation.</p><p class="services-body">
                    We formed our software expertise with agility
                    in mind. Having both developers and
                    computer scientists, we are keen to work with
                    clients to create digital presences and the
                    algorithms behind the software that will shape
                    Africa’s coming decades.</p>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" id="icon-rem" src="images/ProdDesign.png" alt="Applications">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Applications</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We help clients build
                        representations of their proposition on
                        modern digital platforms, including
                        mobile and the web.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <img style="padding-left: 20px" id="icon-rem" class="img-responsive services-icon" src="images/Engr-Design2.png" alt="Processes">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Processes</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We work with clients to create for
                        them truly innovative systems, which sharpen
                        their processes, increase effciency and grow
                        their capabilities and propositions.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" id="icon-rem" src="images/Produ-Shaping.png" alt="Product Shaping">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Algorithms</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We research the untested, and
                        code solutions to the cutting-edge problems
                        faced by ambitious clients, using the
                        expertise of our scientists and engineers.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-1">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/ProdDesign.png" alt="Product Design">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="small-service-title">Apps</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We help clients represent themselves on 
                modern digital platforms, including
                mobile and the web.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-2">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Engr-Design.png" alt="Prototype Build">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="small-service-title">Flows</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We build processes that increase clients' effciencies and grow
                their propositions.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-3">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Produ-Shaping.png" alt="Product Shaping">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="small-service-title">Algos</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We code over barriers by creating models 
                that find solutions to client's biggest problems.
                </p>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-xs-12 nopadding">
                <p class="divider divider-text">Related Projects</p>
            </div>
        </div>
         <div class="row">
            <div class="col-xs-3 nopadding">
                <a href="work/getquip.php"><img class="img-responsive slide-over" src="work/images/Preview/Quip_Img_400.png"></a>
                <p class="img-info">Quip</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/caribconnect.php"><img class="img-responsive slide-over" src="work/images/Preview/Carib_Img_400.png"></a>
                <p class="img-info">Carib Connect</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/solis.php"><img class="img-responsive slide-over" src="work/images/Preview/Solis_Img.jpg"></a>
                <p class="img-info">Solis</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="contact.php"><img class="img-responsive" src="images/GetinTouchSq.png"></a>
            </div>
        </div>
    </div>
    <!--End of Container-->
		<?php include 'footer.php';?>
    <!--Start of Footer-->

    <!--------------------Start of Scripts--------------->
    <script src="js/LLPSite_2016.js"></script>
    <!--------------------End of Scripts--------------->
    <!--End of Content-->
</body>
</html>