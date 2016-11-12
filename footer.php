    <footer class="footer">
        <div class="container">
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4 col-xs-offset-1 col-xs-5 first-footer">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 nopadding">
                            <img class="img-responsive" id="footerlogo" src="images/De-Charles--footer.png" alt="De Charles">
                        </div>
                        <div class="row">
                            <div class=" col-lg-12 col-md-10 col-xs-12">
                                <p class="footer-text">We build products, strategies and ideas for 
                                    forward-thinking entities in Africa's tech sectors.</p>
                                <p class="footer-text hidden-xs">We&#8217;re committed to fusing impact and profit and 
                                    bettering global perceptions of Africa.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p id="footercopy">&copy; 2016 De-Charles LLP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-0 col-xs-3 col-xs-offset-1 second-footer">
                    <div class="row hidden-sm hidden-xs">
                        <div class="col-lg-12 col-lg-offset-2 col-xs-12">
                            <a href="contact.php"><p class="footer-links">Get In Touch</p></a>
                            <a href="contact.php"><p class="footer-links">London + Lagos</p></a>
                            <a href="legal#" class="simple"><p class="footer-links">Legal Information</p></a>
                        </div>
                    </div>
                    <div class="row" id="social-sm-row">
                        <div class="col-lg-12 col-lg-offset-2 hidden-sm hidden-xs">
                            <a href="https://www.facebook.com/decharlesllp/" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Fb_Warm.png" alt="Facebook"></a>
                            <a href="https://twitter.com/decharlesllp" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Twit_Warm.png" alt="Twitter"></a>
                            <a href="https://www.linkedin.com/company/decharlesllp" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_In_Warm.png" alt="LinkedIn"></a>
                            <a href="https://vimeo.com/decharles" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Vimeo_Warm.png" alt="Vimeo"></a>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 col-xs-12 hidden-lg hidden-md">
                            <a href="https://www.facebook.com/decharlesllp/" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Fb_Warm.png" alt="Facebook"></a>
                            <a href="https://twitter.com/decharlesllp" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Twit_Warm.png" alt="Twitter"></a>
                        </div>
                    </div>
                    <div class="row hidden-lg hidden-md">
                        <div class="col-sm-9 col-sm-offset-3 col-xs-12">
                            <a href="https://www.linkedin.com/company/decharlesllp" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_In_Warm.png" alt="LinkedIn"></a>
                            <a href="https://vimeo.com/decharles" target="_blank"><img class="img-responsive footersocial_sm" src="images/Icon_Vimeo_Warm.png" alt="Vimeo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-offset-1 col-md-4 hidden-sm hidden-xs third-footer">
                    <?php include 'subscribe-msg.php'?> <!-- Important php message inclusion-->
                    <form action="subscribe-action.php" method="post">
                        <input class="input-footer input-font" type="text" name="fullname" placeholder="Full Name" maxlength="30"> <!--separate first and last name by finding space-->
                        <input class="input-footer input-font" type="text" name="email" placeholder="Email" maxlength="50">
                        <input type="submit" name="subscribe" class="subscribe-btn">
                    </form>
                </div>
            </div>
            <div class="row hidden-md hidden-lg" id="footer-xs-btm-row" style="padding-bottom: 30px; padding-top: 30px">
                <div class="col-xs-4 col-xs-offset-1" style="padding-left: 0px">
                    <a href="contact.php"><p class="footer-links">Get In Touch</p></a>
                    <a href="contact.php"><p class="footer-links">London + Lagos</p></a>
                    <a href="legal#"><p class="footer-links">Legal Information</p></a>
                </div>
                <div class="col-xs-4 col-xs-offset-1" id="footer-xs-btm-row">
                    <?php include 'subscribe-msg.php'?> <!-- Important php message inclusion-->
                    <form action="subscribe-action.php" method="post">
                    <input class="input-footer input-font" type="text" name="fullname" placeholder="Full Name" maxlength="30"> <!--separate first and last name by finding space-->
                    <input class="input-footer input-font" type="text" name="email" placeholder="Email" maxlength="50">
                    <input type="submit" name="subscribe" class="subscribe-btn">
                </form>
                </div>
            </div>
        </div>
    </footer>