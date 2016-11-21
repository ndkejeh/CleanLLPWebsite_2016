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
    
    <title>Product Design</title>
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
                <img class="img-responsive" src="images/DesignBanner.png" alt="Design Banner">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="body-frame">
                    <p class="services-body">We work with clients to create
                        meaningful innovations that can be
                        impactful in their African contexts, and
                        technologies that can increase their
                        effectiveness and relevance on the
                        continent.
                        We operate on both sides of the fence:
                        we understand clients’ overall business
                        objectives and strategies using our
                        commercial expertise, and with our
                        engineering and design knowledge
                        conceive products that move customers,
                        brands, and society.</p>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/ProdDesign.png" alt="Product Design">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Design</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">The development of products&#8217; 
                        context, function, design, 
                        renders and specification.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 nopadding">
                <img class="img-responsive services-icon" src="images/Engr-Design.png" alt="Prototype Design">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Prototype Build</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">Building models and 
                        designing modules, 
                        schematics, and pseudocode 
                        of hardware/software.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Produ-Shaping.png" alt="Product Shaping">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Shaping</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">Adapting clients&#8217; existing 
                        products for their new African 
                        consumer and environment.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-1">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/ProdDesign.png" alt="Product Design">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Design</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">The development of 
                products&#8217; context, 
                function, design, renders 
                and specification.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-2">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/Engr-Design.png" alt="Prototype Build">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Prototype Build</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">Building models and 
                designing modules, 
                schematics, and 
                pseudocode of 
                hardware/software.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-3">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/Produ-Shaping.png" alt="Product Shaping">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Shaping</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">Adapting clients&#8217; existing 
                products for their new 
                African consumer and 
                environment.</p>
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