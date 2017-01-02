<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!---Metadata!!!--->
    <meta property="og:title" content="De Charles | Tech + Africa" />
    <meta property="og:description" content="Tech + Africa | We build products, strategies and ideas for forward-thinking entities in Africa's tech sectors. We're committed to fusing impact and profit and bettering global perceptions of Africa." />
    <meta name="description" content="Tech + Africa | We build products, strategies and ideas for forward-thinking entities in Africa's tech sectors. We're committed to fusing impact and profit and bettering global perceptions of Africa."/>
    <!---Above the generic included metadata should be any page specific metadata---->
    <?php include_once("metadata-generic.php") ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

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

    <link rel="icon" href="images/BlockFavicon_Large.jpg">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Icons-->
    <title>De Charles LLP</title>
    <link href="css/style.css" rel="stylesheet">
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
                    <img class="img-responsive" src="images/IndexBanner.jpg">
                    <div class="banner-overlay" style="background: rgba(0,0,0,0);">
                        <p class="work-headline" id="home-headline">We build products, strategies &amp; ideas for entities in Africa's tech sectors.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <a href="perspectives.php"><img class="img-responsive" src="images/OurPerspectiveSq.png" alt="Our Perspectives"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 nopadding">
                        <a href="work/getquip.php"><img class="img-responsive slide-over" src="images/GetQuip300x600.png" alt="Get Quip"></a>
                        <p class="img-info">Quip</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                <div class="row">
                    <div class="col-xs-4 nopadding hidden-md hidden-lg">
                        <a href="work/africa50.php"><img class="img-responsive slide-over" src="images/Africa50_600.jpg" alt="Africa50"></a>
                        <p class="img-info">Africa 50</p>
                    </div>
                    <div class="col-xs-4 nopadding hidden-md hidden-lg">
                        <img class="img-responsive" src="images/ThinkingSMog600.jpg" alt="Thinking">
                    </div>
                    <div class="col-xs-4 nopadding hidden-md hidden-lg">
                        <a href="perspectives.php"><img class="img-responsive" src="images/OurPerspectiveSq.png" alt="Our Perspectives"></a>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-12 nopadding">
                                <a href="work/solis.php"><img class="img-responsive slide-over" src="images/Solis1200.png" alt="Solis"></a>
                                <p class="img-info">Solis</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 nopadding">
                                <a href="work/africa50.php"><img class="img-responsive slide-over" src="images/Africa50_600.jpg" alt="Africa 50"></a>
                                 <p class="img-info">Africa 50</p>
                            </div>
                            <div class="col-md-6 nopadding">
                                <a href="perceptions.php"><img class="img-responsive" src="images/OurPerceptionsSq.jpg" alt="Our Perceptions"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding  hidden-sm hidden-xs">
                        <a href="work/okiki.php"><img class="img-responsive slide-over" src="images/Okiki300x600.png" alt="Okiki App"></a>
                        <p class="img-info">Okiki Apps</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 nopadding hidden-md hidden-lg">
                        <a href="work/solis.php"><img class="img-responsive slide-over" src="images/Solis1200.png" alt="Solis"></a>
                        <p class="img-info">Solis</p>
                    </div>
                    <div class="col-md-4 nopadding hidden-sm hidden-xs">
                        <a href="services.php"><img class="img-responsive slide-over" src="images/Services_600sq.jpg" alt="Our Services"></a>
                    </div>
                    <div class="col-md-8 nopadding hidden-sm hidden-xs">
                        <a href="work/flemmings.php"><img class="img-responsive slide-over" src="images/JHF1200.png" alt="J.H. Flemmings"></a>
                        <p class="img-info">J.H. Flemmings</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-8 col-xs-push-4 col-md-push-0 nopadding">
                <a href="work/caribconnect.php"><img class="img-responsive slide-over" src="images/CaribConnect600.jpg" alt="Carib Connect"></a>
                <p class="img-info">Carib Connect</p>
            </div>
            <div class="col-md-6 col-xs-4 col-xs-pull-8 col-md-pull-0">
                <div class="row">
                    <div class="col-md-6 col-xs-12 nopadding ">
                        <a href="Thinking#"><img class="img-responsive" src="images/OurThinkingSq.png" alt="Our Thinking"></a>
                    </div>
                    <div class="col-md-6 nopadding hidden-sm hidden-xs">
                        <img class="img-responsive" src="images/Rectangle-5.png" alt="LLP Orange">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 nopadding hidden-sm hidden-xs">
                        <a href="Thinking#"><img class="img-responsive" src="images/ThinkingSMog600.jpg" alt="Thinking Cartoon"></a>
                    </div>
                    <div class="col-md-6 nopadding hidden-sm hidden-xs">
                        <a href="contact.php"><img class="img-responsive" src="images/GetinTouchSq.png" alt="Get in Touch"></a>
                    </div>
                    <div class="col-xs-12 hidden-md hidden-lg nopadding">
                        <a href="perceptions.php"><img class="img-responsive" src="images/OurPerceptionsSq.jpg" alt="Perceptions"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hidden-md hidden-lg">
            <div class="col-xs-8 nopadding">
                <a href="work/flemmings.php"><img class="img-responsive slide-over" src="images/JHF_Img.jpg" alt="J.H. Flemmings"></a>
                <p class="img-info">J.H. Flemmings</p>
            </div>
            <div class="col-xs-4 nopadding">
                <a href="contact.php"><img class="img-responsive" src="images/GetinTouchSq.png" alt="Get in Touch"></a>
            </div> 
        </div>
    </div>
    <!--End of Container-->
    <!--Start of Footer-->
		<?php include 'footer.php';?>
    <!--------------------Start of Scripts--------------->
    <script src="js/LLPSite_2016.js"></script>
    <!--------------------End of Scripts--------------->
    <!--End of Content-->
</body>
</html>