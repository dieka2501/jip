<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo Config::get('app.url');?>assets/main/img/favicon.ico">
    <title>JSI Community</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo Config::get('app.url');?>assets/main/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo Config::get('app.url');?>assets/main/css/proxima-webfontkit-stylesheet.css" rel="stylesheet">
    <link href="<?php echo Config::get('app.url');?>assets/main/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo Config::get('app.url');?>assets/main/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>assets/main/css/simple-line-icons.css">
    <link href="<?php echo Config::get('app.url');?>assets/main/css/font-awesome.min.css" rel="stylesheet">    
    <link href="<?php echo Config::get('app.url');?>assets/main/css/bootstrap-datetimepicker.css" rel="stylesheet">    
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>assets/main/css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link href="<?php echo Config::get('app.url');?>assets/main/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo Config::get('app.url');?>assets/main/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo Config::get('app.url');?>assets/main/css/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>assets/main/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>assets/main/css/tabstyles.css" />
    <script src="<?php echo Config::get('app.url');?>assets/main/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>assets/main/js/modernizr.custom.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo Config::get('app.url');?>assets/main/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    #news-list h3, #event-list h3, #video-gallery h3 {
      text-transform: none!important;
    }
    #slider1_container img {
      height: auto!important;
    }
    </style>

</head>
<body>    
<header id="header">
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="<?php echo Config::get('app.url');?>public/" class="navbar-brand logo main"><img src="<?php echo Config::get('app.url');?>assets/images/logo.png" alt="JSI Community" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="<?php echo Config::get('app.url');?>public/">Home</a></li>
                    <li><a href="<?php echo Config::get('app.url');?>public/news">News &amp; Event</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo Config::get('app.url');?>public/foto">Photo Gallery</a></li>
                        <li><a href="<?php echo Config::get('app.url');?>public/video">Video Gallery</a></li>
                      </ul>
                    </li>
                    <li><a class="smoothScroll" href="#footers">Contact</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo Config::get('app.url');?>public/register"class="btn btn-reg"><i class="icon-user-follow icons"></i> &nbsp;Register</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#LoginModal"  class="btn btn-login"><i class="icon-login icons"></i> &nbsp;Login</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav> 
        <div class="bg-hero">
            <div class="container"><div class="logo"><img src="<?php echo Config::get('app.url');?>assets/main/img/logo.png" class="img-responsive" alt="Jeep Station Community" /></div></div>
        </div>   
</header>
<!-- Modal Register -->
<div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
          <form id="register" method="POST" action="">
              <div class="row clearfix">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>  
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="row clearfix">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                </div>
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Login -->
<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
          <form id="login" method="POST" action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- CONTENT -->
@yield('content')
<!-- END CONTENT -->

<!--FOOTER-->
<footer id="footers">
    <div class="container">
        <div class="row">         
            <div class="col-md-5">
                <a href="#"><img src="<?php echo Config::get('app.url');?>assets/main/img/small-logo.png" alt="JSI Community" /></a><br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
            </div>   
            <div class="col-md-5">
                <h4>JSI Contact Info</h4>
                <p class="clearfix"><i class="icon-location-pin icons"></i><span>JL.Boulevard Gading Serpong blok MS no. 5 unit C2 Gading Serpong - Tangerang 15810</span></p>
                <p class="clearfix"><i class="icon-call-in icons"></i><span>021 - 93337889</span></p>
                <p class="clearfix"><i class="icon-envelope icons"></i><span>info@jsicommunity.com</span></p>
            </div>
            <div class="col-md-2 social-network text-right">
                <h4>Stay Connected</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>
<div class="copyright">&copy; 2015 JSI Community Powered by <a href="htttp://deasnet.com">Deasnet</a></div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Config::get('app.url');?>assets/main/js/jquery-1.9.1.min.js"></script>  
    <script src="<?php echo Config::get('app.url');?>assets/main/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php echo Config::get('app.url');?>assets/main/js/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?php echo Config::get('app.url');?>assets/main/js/jquery.fancybox-media.js?v=2.1.5"></script>
    <script src="<?php echo Config::get('app.url');?>assets/main/js/owl.carousel.js"></script>
    <script src="<?php echo Config::get('app.url');?>assets/main/js/moment.js" type="text/javascript"></script>
    <script src="<?php echo Config::get('app.url');?>assets/main/js/cbpFWTabs.js"></script>
    <script src="<?php echo Config::get('app.url');?>assets/main/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('app.url');?>assets/main/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('app.url');?>assets/main/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo Config::get('app.url');?>assets/main/js/scripts.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        $(function() {
          // This will select everything with the class smoothScroll
          // This should prevent problems with carousel, scrollspy, etc...
          $('.smoothScroll').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000); // The number here represents the speed of the scroll in milliseconds
                return false;
              }
            }
          });
        });

        $("#zoomin").fancybox({
          openEffect  : 'elastic',
          closeEffect : 'elastic',

          helpers : {
            title : {
              type : 'inside'
            }
          }
        });

        $('.fancybox-media').fancybox({
          openEffect  : 'none',
          closeEffect : 'none',
          helpers : {
            media : {}
          }
        });

      });
    </script>
  </body>
</html>