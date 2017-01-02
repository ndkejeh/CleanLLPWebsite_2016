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
                <img class="img-responsive" src="images/DeliveryBanner.png" alt="Delivery Banner">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 nopadding">
                <div class="body-frame">
                    <p class="services-body">We partner with clients to assist them
                        realise novel technologies and
                        reach new customers on the
                        continent.</p>
                    <p class="services-body">
                        We use our experience and expertise
                        in engineering, computer science and
                        product development, as well as our
                        experience delivering our own award
                        winning propositions to the continent,
                        to assist companies through the process
                        of realisation and delivery to market.
                        We use our global network to assist
                        with building a robust supply-chain with
                        credible partners, and take the hassle
                        away from the establishing of
                        manufacturing and logistics partners
                        and routes respectively.</p>
                    <p class="services-body">
                        We can continue to support your
                        activities post-delivery, managing the
                        flow of product supplies and planning
                        for eventual growth.</p>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Prod-Dev.png" alt="Product Development">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Build</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">Using our engineering 
                        expertise, we realise clients&#8217; 
                        hardware/software vision.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 nopadding">
                <img class="img-responsive services-icon" src="images/Manufacture.png" style="padding-left: 10px" alt="Product Manufacture">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Product Scale</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We manage the 
                        manufacturing and testing 
                        process to ensure 
                        high-fidelity product output.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row hidden-xs">
            <div class="col-sm-2 col-md-offset-2 col-sm-offset-1">
                <img class="img-responsive services-icon" src="images/Content-Delivery.png" alt="Content Delivery">
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-title">Content Delivery</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 nopadding">
                        <p class="services-blurb">We can assist with sourcing 
                        logistics partners, and current
                        and future delivery strategies.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-1">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/Prod-Dev.png" alt="Product Design">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Build</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">Using our engineering 
                expertise, we realise clients&#8217; 
                hardware/software vision.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-2">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/Manufacture.png" alt="Product Manufacture">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Product Scale</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">We manage the 
                manufacturing and testing 
                process to ensure 
                high-fidelity product output.</p>
            </div>
        </div>
        <div class="row services-row-small hidden-md hidden-sm hidden-lg" id="services-row-small-3">
            <div class="col-xs-3 col-xs-offset-1">
                <img class="img-responsive services-icon" src="images/Content-Delivery.png" alt="Content Delivery">
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-title">Content Delivery</p>
            </div>
            <div class="col-xs-4 nopadding">
                <p class="services-blurb">We can assist with sourcing 
                logistics partners, and current
                and future delivery strategies.</p>
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