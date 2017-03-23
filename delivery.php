<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!---Metadata!!!--->
    <meta property="og:title" content="Product Delivery" />
    <meta property="og:image" content="http://decharles.com/images/DeliveryBanner.png" />
    <meta name="description" content="We partner with clients to assist them realise novel technologies and reach new customers on the continent."/>
    <meta property="og:description" content="We partner with clients to assist them realise novel technologies and reach new customers on the continent." />
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
    
    <title>Product Delivery</title>
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
                <img class="img-responsive" src="images/HardwareBanner.png" alt="Hardware Banner">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="body-frame">
                    <p class="services-body">We work with clients to form their hardware
                    ideas at conception, and take them from
                        prototype through to commercialisation.</p><p class="services-body">
                    Historically known for its lack of physical
                    infrastructure and distribution channels,
                    in this century Africa has shifted the focus of
                    many to its rapid adoption of new technology.
                    This characteristic has made the continent and
                    certain countries within it to be seen as
                    relatively low entry barriers for creative
                    hardware, particularly those aimed at Africa’s
                    burgeoning, predominantly youthful, and tech
                    hungry consumers.</p><p class="services-body">
                    The De Charles team was initially founded on
                    hardware engineering talent, which built
                    impactful products for Africa contexts.</p>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Prod-Dev.png" alt="Product Design">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Design</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We translate client’s
                        ideas into visual representations,
                        appropriate for the contemporary African
                        consumer.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 nopadding">
                <img class="img-responsive services-icon" src="images/Manufacture.png" style="padding-left: 10px" alt="Product Development">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Dev</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">Using our expertise
                        across disciplines of engineering and science,
                        we build prototypes and commercial versions
                        of clients’ ideas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Content-Delivery.png" alt="Product Shaping">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Shaping</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We help clients adapt
                        their existing products for new African
                        consumers and environments.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-1">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Prod-Dev.png" alt="Product Design">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Design</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We translate client’s
                ideas into visual representations,
                appropriate for the contemporary African
                consumer.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-2">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Manufacture.png" alt="Product Development">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Dev</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">Using our expertise
                across disciplines of engineering and science,
                we build prototypes and commercial versions
                of clients’ ideas.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-3">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Content-Delivery.png" alt="Product Shaping">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Shaping</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We help clients adapt
                their existing products for new African
                consumers and environments.</p>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-xs-12 nopadding">
                <p class="divider divider-text">Related Projects</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 nopadding">
                <a href="work/flyeyeball.php"><img class="img-responsive slide-over" src="work/images/Preview/FeB_Img_400.png"></a>
                <p class="img-info">Fly Eye Ball</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/africaprize.php"><img class="img-responsive slide-over" src="work/images/Preview/RAE_Img_400.png"></a>
                <p class="img-info">The Africa Prize</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/futureafrica.php"><img class="img-responsive slide-over" src="work/images/Preview/MIAF_Img_400.png"></a>
                <p class="img-info">Made in Africa</p>
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