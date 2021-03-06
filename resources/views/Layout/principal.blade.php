<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Minha Biblia Diária.</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Styles -->
    <link type="text/css" rel="stylesheet" href="css/css/bootstrap.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="css/css/font-awesome.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="css/css/et-line.css" media="screen">
    <!-- Css Styles -->
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/style-portfolio.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/pro-bars.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/css/animate.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="css/css/rotator.css" media="screen">
    <!-- Google Font Styles -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

</head>
<body id="custom">

    <div class="animationload">
    <div class="loader">Loading...</div>
    </div>

    <div class="makeborder-top"></div>
    <div class="makeborder-bottom"></div>
    <div class="makeborder-left"></div>
    <div class="makeborder-right"></div>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="searchform" role="form">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <input type="text" class="form-control" placeholder="What you are looking for?">
                </form>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <div class="container">
            <header id="Home" class="header">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar navbar-default" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-bars fa-2x"></i>
                                </button>
                                <a id="brand" class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Law"></a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right" id="nav">
                                    <li class="current"><a href="#Home" title="">Home</a></li>
                                    <li><a href="#Practice_Area" title="">Practice Area</a></li>
                                    <li><a href="#faq" title="">FAQ</a></li>
                                    <li><a href="#Case_Area" title="">Case Area</a></li>
                                    <li><a href="#team" title="">Lawyers</a></li>
                                    <li><a href="#contact" title="">Contact</a></li>
                                </ul>
                            </div><!-- end navbar-collapse collapse -->
                        </div><!-- nav -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </header><!-- end header -->
        </div><!-- end container -->
        <div id="page_header">
            <div id="parallax" class="parallax bgback bg" style="background-image: url('images/biblia4.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20"></div>


            <div class="container text-center header-part">
                <h2 class="header-text">A <span class="rotate">Um servo, Um seguidor </span> fiel sempre carrega consigo sua <span class="rotate"> Biblia, Espada </span></h2>

                <div class="angle-down">
                    <a href="#Practice_Area">
                      <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown" data-wow-iteration="infinite" ></i>
                    </a>
                </div>
            </div>
        </div><!-- end page_header -->

        <div class="white-wrapper">
        <div class="container">
              @yield('conteudo')

        </div>
        <!-- End of Team -->
        <!-- Contact -->

            <div id="contact">
                <div class="title text-center">
                    <h3 class="title-text">Entre em contato conosco</h3>

                    <em class="lead">For better service , you're bound to contact us.</em>
                    <hr>
                </div>
            </div>
            <div class="wow animated zoomIn" data-wow-delay="1s" style="margin-bottom: -8px;">
                <iframe class="maps " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.664063521107!2d91.83379900000003!3d24.909437999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e0!3m2!1sen!2sbd!4v1422512775544"  height="350" style="border:0"></iframe>
            </div>

            <footer class="footer">
                <div class="container">
                    <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="title">
                            <h3>About <span>Attorney</span></h3>
                        </div>
                        <br>
                        <p>Attorney-Template  is a clean, minimal, stylish Bootstrap theme for showcasing your Law firm. </p>
                        <p>On the other hand, we denounce with rious indignation and dislike men who are so be guiled and demoralized by the charms that they cannot foresee the pain</p>
                    </div><!-- end widget -->

                    <div class="widget col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="title">
                            <h3>Contact Us.</h3>
                        </div>
                        <div class="contact_widget row">
                            <div id="message"></div>
                            <form id="contactform" action="contact.php" name="contactform" method="post">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" required="required" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" required="required" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" required="required" class="form-control" placeholder="Subject">
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" required="required" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary">SEND</button>
                                </div>
                            </form>
                        </div> <!-- end contact_widget -->
                    </div><!-- end widget -->

                    <div class="widget col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="title">
                            <h3>Keep in Touch.</h3>
                        </div>
                        <ul class="contact_details">
                            <li><i class="fa fa-map-marker"></i> <span>15 Springfield Way Hythe</span></li>
                            <li><i class="fa fa-mobile-phone"></i> <span>(+ 00) 1-714-252-0026</span></li>
                            <li><i class="fa fa-envelope"></i> <span>support@law.com</span></li>
                        </ul>
                        <div class="social pull-left">
                            <span><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                            <span><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                            <span><a title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                            <span><a title="Skype" href="#"><i class="fa fa-skype"></i></a></span>
                            <span><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                            <span><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a></span>
                            <span><a title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></span>
                        </div><!-- end social -->
                    </div><!-- end widget -->
                </div><!-- end container -->
            </footer><!-- end footer -->

            <div class="copyrights">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="title left">
                                <h5 class="title-footer">Copyrights © 2014. All Rights Reserved by <a href="#">Your Website Link</a></h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="title right">
                                <h5 class="title-footer">Theme by <a href="#">Minha Biblia</a></h5>
                            </div>
                        </div><!-- end col-lg-4 -->
                    </div>
                </div><!-- end container -->
            </div><!-- end copyrights -->
        </div>
    </div>

            <!-- Main Scripts-->
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/custom.js"></script>
            <script src="js/jquery.nav.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/rotator.js"></script>


            <script type="text/javascript">
                          $('a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $.attr(this, 'href') ).offset().top
                        }, 500);
                        return false;
                    });
            </script>
            <script>
                $(document).ready(function() {
                  $('#nav').onePageNav();

                  $('.do').click(function(e) {
                    $('#section-4').append('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
                    e.preventDefault();
                  });
                });
            </script>
            <script type="text/javascript">$(document).on('click', '.panel-heading span.clickable', function (e) {
                var $this = $(this);
                if (!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                }
            });
            $(document).on('click', '.panel div.clickable', function (e) {
                var $this = $(this);
                if (!$this.hasClass('panel-collapsed')) {
                    $this.parents('.panel').find('.panel-body').slideUp();
                    $this.addClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
                } else {
                    $this.parents('.panel').find('.panel-body').slideDown();
                    $this.removeClass('panel-collapsed');
                    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                }
            });
            $(document).ready(function () {
                $('.panel-heading span.clickable').click();
                $('.panel div.clickable').click();
            });
        </script>
        <script>
            new WOW().init();
        </script>
        <script type="text/javascript">
            $(".rotate").textrotator({
            animation: "flip", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
            separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
            speed: 3000 // How many milliseconds until the next word show.
            });
        </script>
        <script type="text/javascript">
          // Close the navbar if collapsed (small screen) when clicking on a menu link
          // From edit 2 on
          // http://stackoverflow.com/questions/14203279/bootstrap-close-responsive-menu-on-click/23171593#23171593
          $(function () {
            $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function () {
              $('.navbar-toggle:visible').click();
            });
          });
        </script>
</body>
</html>
