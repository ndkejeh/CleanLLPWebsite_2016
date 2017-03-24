<?php include 'subscribe-session.php'; ?> <!-- Very Important place above everything else!!-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!---Metadata!!!--->
    <meta property="og:title" content="Product Strategy" />
    <meta property="og:image" content="http://decharles.com/images/StrategyBanner.png" />   
    <meta name="description" content="We help clients identify and capture new opportunities, increase their footprint and impact across the continent, and use technology to overcome their specific barriers to growth in Africa."/>
    <meta property="og:description" content="We help clients identify and capture new opportunities, increase their footprint and impact across the continent, and use technology to overcome their specific barriers to growth in Africa." />
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
                <img class="img-responsive" src="images/NarrativesBanner.png" alt="Narratives Banner">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="body-frame">
                    <p class="services-body">We work with clients to unearth powerful
                        narratives that make lasting impressions,
                        broaden the size and demographic of their
                        consumer base, and put their company on
                        thought trajectories more conducive to
                        innovating in Africa.</p><p class="services-body">
                        We realise that consumers today want to
                        engage with products on many levels. Good
                        interactions on the physical and functional
                        level are necessary, but even before a purchase
                        people want to be drawn in by the message
                        behind the company and its products.</p><p class="services-body">
                        Africa is currently in one of the most exciting
                        periods in its modern era, which we believe
                        puts forward-thinking companies on the
                        continent at an innovation advantage – both
                        technologically and with regards to narrative.</p>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Narrative-Icon.png" alt="Narratives">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Narratives</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We create stirring concepts
                        that lead to well-positioned, relevant and
                        engaging companies and products.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 ">
                <img class="img-responsive services-icon" src="images/Impact-Icon.png" alt="Profitable Impact">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Profitable Impact</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">Merging technical, and
                        commercial expertise, we help entities build
                        ventures that marry profit and social good.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Go2mrkt-Icon.png" alt="New Ventures">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">New Ventures</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We help clients articulate
                        and launch new ideas that may be complex
                        in their model, story, and focus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-1">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Narrative-Icon.png" alt="Narratives">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Stories</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We create stirring concepts
                        that lead to well-positioned, relevant and
                        engaging companies and products.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-2">
            <div class="col-xs-3 ">
                <img class="img-responsive services-icon" src="images/Impact-Icon2.png" alt="Profitable Impact">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Profit &amp; Impact</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">Merging technical, and
                commercial expertise, we help entities build
                ventures that marry profit and social good.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-3">
            <div class="col-xs-3">
                <img class="img-responsive services-icon" src="images/Go2mrkt-Icon2.png" alt="New Ventures">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">New Ventures</p>
            </div>
            <div class="col-xs-5 nopadding">
                <p class="services-blurb">We help clients articulate
                and launch new ideas that may be complex
                in their model, story, and focus.</p>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-xs-12 nopadding">
                <p class="divider divider-text">Related Projects</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3 nopadding">
                <a href="work/africa50.php"><img class="img-responsive slide-over" src="work/images/Preview/Africa50_Img.png"></a>
                <p class="img-info">Africa50</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/tina.php"><img class="img-responsive slide-over" src="work/images/Preview/TINA_Img.jpg"></a>
                <p class="img-info">This is New Africa</p>
            </div>
            <div class="col-xs-3 nopadding">
                <a href="work/flemmings.php"><img class="img-responsive slide-over" src="work/images/Preview/JHF_Img_400.png"></a>
                <p class="img-info">J.H. Flemmings</p>
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