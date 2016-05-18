<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="<?php echo $currentAppr ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>#بكره_يستاهل</title>

        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
        <?php
        if ($currentLanguage == "arabic")
        {
            ?>
            <link href="<?php echo base_url(); ?>css/arfix.css" rel="stylesheet">
            <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
            <?php
        }
        ?>

        <link href="<?php echo base_url(); ?>js/bxslider/jquery.bxslider.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="centerMainWrapper" class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a> <img class="img-responsive"  src="<?php echo base_url(); ?>images/headerLogo.png"></a>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div  id="centerNavWrapper" >
                                <ul>
                                    <li class="float-left"><a  href='http://mynestle.com.eg/en/welcome' >HOME</a></li>
                                    <li class="float-left"><a  href='http://mynestle.com.eg/en/contact_us'>CONTACT US</a></li>
                                    <li class="float-left"><a href='../bokra/index.php' >AR</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div id="SecNavWrapper">
                                <ul>
                                    <li class=""><a  class="btn"  href='http://mynestle.com.eg/en/welcome' >UPLOAD YOUR VIDEO</a></li>
                                    <li class=""><a  class="btn" href='http://mynestle.com.eg/en/contact_us'>UPLOAD YOUR PHOTO</a></li>                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transparent-v-sep"></div>

            <div  class="row">
                <div class="col-xs-12 col-lg-8  ">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="700" height="410" src="https://www.youtube.com/embed/NY48cGx0ewA?rel=0" frameborder="0" allowfullscreen></iframe>                        
                    </div>
                    <div>Rate Here</div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="comments-wrapper">
                        <h4 class="color-blue">#بكره_يستاهل</h4>
                        <div class="comments-body">
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                            <div class="comment-wrapper">
                                <h5 class="color-blue">Ahmed Makki</h5>
                                <p>Just a random test</p>
                            </div>
                        </div>
                        <div class="comments-form">
                            <div  class="row">
                                <div class="col-xs-6">Share Here</div>
                                <div class="col-xs-6">Rate Here</div>
                            </div>
                            <div  class="row">
                                <div class="col-xs-12 no-spaces">
                                    <input type="text" class="text-input" name="comment-name" placeholder="Enter your name here..." />                                    
                                </div>                                
                            </div>
                            <div  class="row">
                                <div class="col-xs-12 no-spaces">
                                    <input type="text" class="text-input" name="comment-message" placeholder="Enter your comment here..." />
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transparent-v-sep"></div>

            <div class="section-title-wrapper">
                <div class="title">Videos</div>
            </div>
            <div class="section-wrapper">
            </div>

            <div class="transparent-v-sep"></div>

            <div class="section-title-wrapper">
                <div class="title">Photos</div>
            </div>
            <div class="section-wrapper">
            </div>

            <div class="transparent-v-sep"></div>

            <footer class="footer footer-gray">

                <div class="row">

                    <div class="col-md-3 imgfoot"><img src="<?php echo base_url(); ?>images/footerLogo.png"></div>

                    <div class="col-md-3 txtfoot2">Nestlé is the leading Nutrition, Health and Wellness Company</div>

                    <div class="col-md-3 txtfoot">Privacy Note - Your personal information is held in accordance with our Privacy Policy which is available at www.mynestle.com.eg.</div>

                    <div class="col-md-3 txtfoot">Nestlé has committed to not collect any data from children under the age of 15. If you are under the age of 15 please contact us on 16180.</div>

                </div>

                <div class="row footer_wrapper ">

                    <div class="col-md-8">

                        2016 © All Intellectual Property Rights are reserved to Société des Produits Nestlé S. A. Vevey – Switzerland – Trademarks Owner

                    </div>

                    <div class="col-md-4">

                        <a href="https://mynestle.com.eg/en/welcome" class="footer_item float_left margin_left_10 dir">Home</a>

                        <a href="https://mynestle.com.eg/en/contact_us" class="footer_item float_left margin_left_10 dir">Contact Us</a>

                        <a href="https://mynestle.com.eg/en/terms_conditions" class="footer_item float_left margin_left_10 dir">Terms &amp; Conditions</a>

                        <a href="https://mynestle.com.eg/en/privacy_policy" class="footer_item float_left margin_left_10 dir">Privacy Policy</a>

                        <a href="https://mynestle.com.eg/en/faq" class="footer_item float_left margin_left_10 dir">FAQ</a>

                    </div><!-- End of inner -->

                </div>

            </footer>

        </div><!-- #centerMainWrapper-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready(function()
            {
                var commentScroller = $(".comments-body").niceScroll({cursorborder: "", cursorcolor: "#7e7979", boxzoom: false, autohidemode: false});
            });
        </script>
    </body>
</html>