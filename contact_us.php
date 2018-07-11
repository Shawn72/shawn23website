<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>23DynastyCo - A web development Nairobi based software provider</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta name="google-site-verification" content="-xxwigIGmBDm3cg9KcFVmtu44XGs2cUMfu5B905lzNA" /> -->
    <meta name="keywords" content="Most highest 23DynastyCo, top most 23SouthernDynastyCo company, highest Shawn23DynastyCo, most Southern23DynastyCo">
    <meta name="description" content="23DynastyCo in Nairobi, based in Nairobi offers web development services" >

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/tstcss.css" rel="stylesheet">
            <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">  
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <div class="culmn"> 
            <?php include('headers.php'); ?>
        <br/>
  <main id="main">
       <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="form">
          <div id="sendmessage" style="width:100%; height:100%; ">Your feedback message successfully sent!</div>
          <div id="errormessage" style="width:100%; height:100%;">Error Sending Feedback, try again later!</div>
            <!--<div id="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;">-->
            <!--<img src='img/demo_wait.gif' width="64" height="64" /><br>Sending...wait!</div>-->
            <div class="wait overlay">
            	<div class="modal"></div>
            </div>
          <form action="send_Email.php" method="post" role="form" class="contactForm" id="submitmyASS">
           
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <a href="privacy_policy.php">Our Privacy Policy</a>
                <div class="validation"></div>
                <div class="help-block with-errors"></div>
              </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:8" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group" ng-app="checkboxApp" ng-controller="checkboxCtrl">
                <input type="checkbox" ng-model="chkselct" ng-click="checkvalidation();" id="chkMyASS" onclick="myCheckedBox()">Agreed to Terms and Conditions of our privacy policy <br />
                <span style="color:red;" ng-show="validationmsg">Please Agree to our privacy policy first</span><br />
            </div>
            <div class="text-center"><button type="submit" id="btnsubmit" ng-hide="hiddenButton" style="display:none">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_footer">
                                <div class="row">

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="copyright_text">
                                            <p class=" wow fadeInRight" data-wow-duration="1s">Copyright &copy <a href="https://www.linkedin.com/in/shawn-andre-mbuvi-02062682/"> &#160;&nbsp;Southern 23DynastyCo.</a>&#160;- <?php echo date("Y"); ?>.&nbsp; All Rights Reserved</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>
  <!-- #footer -->
        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script>
            var $i = jQuery.noConflict();
        </script> 
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>        
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.masonry.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>

        <script>
        function showmap() {
            var mapOptions = {
                zoom: 8,
                scrollwheel: false,
                center: new google.maps.LatLng(-34.397, 150.644),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        }
        </script>
    <script>
    // $(".nav li a").click(function(){   
    // var Q = document.getElementById('svc').href;
    // alert(Q);
    ///$('#abt').addClass('activeX');    
    //});
    </script>
    <script>
        function getLinkAddhm(){
            //var hRL = document.getElementById('hme').getAttribute("href");
            $('#hme').addClass('activeX');
            $('#abt').removeClass('activeX');
            $('#svc').removeClass('activeX');
            $('#cntct').removeClass('activeX');
            //alert(hRL);
            return false;
        }
        function getLinkAddsv(){
           // var hRL = document.getElementById('svc').getAttribute("href");
            $('#svc').addClass('activeX');
            $('#hme').removeClass('activeX');
            $('#abt').removeClass('activeX');
            $('#cntct').removeClass('activeX');
           // alert(hRL);
            return false;
        }
        function getLinkAddabt(){
            //var hRL = document.getElementById('abt').getAttribute("href");
            $('#abt').addClass('activeX');
            $('#svc').removeClass('activeX');
            $('#hme').removeClass('activeX');
            $('#cntct').removeClass('activeX');
           // alert(hRL);
            return false;
        }
        function getLinkAddcnt(){
            //var hRL = document.getElementById('abt').getAttribute("href");
            $('#cntct').addClass('activeX');
            $('#svc').removeClass('activeX');
            $('#hme').removeClass('activeX');
            $('#abt').removeClass('activeX');
           // alert(hRL);
            return false;
        }
    </script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/form.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>
