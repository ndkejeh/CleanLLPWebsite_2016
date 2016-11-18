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
    
    <title>De Charles | Get in Touch</title>
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
                    <img class="img-responsive" src="images/Contact-Banner.png">
                    <div class="banner-overlay" style=" background: rgba(0,0,0,0)">
                        <p class="contact-headline">Get in Touch</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6" id="contact-orange">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4 col-xs-10 col-xs-offset-2 office-blk">
                        <p class="contact-city">London</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4 col-xs-10 col-xs-offset-2 office-blk">
                        <p class="contact-address">The Bloomsbury Building<br>
                        Holborn<br>
                        London <br>
                        WC1A 2SL<br>
                        United Kingdom</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6" id="contact-yellow">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4 col-xs-10 col-xs-offset-2 office-blk">
                        <p class="contact-city" style="color: B97A2B">Lagos</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4 col-xs-10 col-xs-offset-2 office-blk">
                        <p class="contact-address" style="color: B97A2B">203 Ikorodu Road<br>
                        Obanikoro<br>
                        Lagos<br>
                        Nigeria</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row white-bg">
            <div class="col-xs-8 col-xs-offset-2">
                <form class="contact-form" action="contactllp.php" method="post" id="llp-contact">
                    <div class="row contact-row">
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="fullname">Full Name<span style="color: #b24026">*</span></label><br>
                            <input class="input-contact input-font" type="text" name="fullname" id="fullname" maxlength="30" required>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="email">Email<span style="color: #b24026">*</span></label><br>
                            <input class="input-contact input-font" type="text" name="email" id="email" maxlength="30" required>
                        </div>
                    </div>
                    <div class="row contact-row">
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="company">Company<span style="color: #b24026">*</span></label><br>
                            <input class="input-contact input-font" type="text" name="company" id="company" maxlength="30" required>
                        </div>
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="position">Position<span style="color: #b24026">*</span></label><br>
                            <input class="input-contact input-font" type="text" name="position" id="position" maxlength="30" required>
                        </div>
                    </div>
                    <div class="row contact-row">
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="sector">Sector</label><br>
                            <input class="input-contact input-font" type="text" name="sector" id="sector" maxlength="30">
                        </div>
                        <div class="col-sm-6 nopadding">
                            <label class="label-contact" for="country">Country<span style="color: #b24026">*</span></label><br>
                            <input class="input-contact input-font" type="text" name="country" id="country" maxlength="30" required>
                        </div>
                    </div>
                    <div class="row contact-row">
                        <div class="col-sm-6 nopadding">
                            <?php include 'status-msg-body.php'?> <!-- Important php message inclusion-->
                            <label class="label-contact">Message<span style="color: #b24026">*</span></label><br>
                            <textarea class="message-contact input-font" name="message" form="llp-contact" style="resize: none" maxlength="1000" required></textarea>
                        </div>
                    </div>
                    <div class="row contact-row">
                        <div class=" col-md-1 col-sm-2 col-xs-2 nopadding">
                            <input type="submit" value="Send" class="contact-btn">
                        </div>
                    </div>
                </form>
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