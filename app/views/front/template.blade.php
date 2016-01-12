<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo Config::get('app.url');?>aset/main/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <title>Jeep Station Indonesia</title>
    <!-- // start:style for must include this page // -->    
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/jsi.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/simple-line-icons.css">    
    <link rel="stylesheet" type="text/css" href="<?php echo Config::get('app.url');?>aset/main/css/base.css">    
    <!-- // end:style for must include this page // -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .pagination > li > a, .pagination > li > span {
      color: #cccccc;
      background: #303030;
      border-color: #303030;
    }
    .product img {
      height: 200px;
    }
    .field-row {
      margin-bottom: 20px;
    }
    .order-info-item p, .form-order p {
      color: #888888!important;
    }
    .order-info-item {
      margin-bottom: 30px;
    }
    .borderless td,.borderless tr, .borderless th {
        border: 0px!important;
    }
    .product-desc p, .product-info p {
      color: #777777;
    }
    .owl-item .item img {
      max-width: 100%;
      height: 70px;
    }
    .owl-item .item.client img {
      max-width: 100%;
      height: 100%!important;
    }
    </style>
</head>
<!-- // end:head // -->
<body>
    <header id="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 slogan"><a href="<?php echo Config::get('app.url');?>public/">Jeep Station Indonesia</a></div>
                    <div class="col-md-6">
                        <ul class="topmenu">
                            <li><a href="<?php echo Config::get('app.url');?>public/register"><i class="icon-user-follow icons">&nbsp;</i> Register</a></li>
                            <li><a href="<?php echo Config::get('app.url');?>public/login"><i class="icon-login icons">&nbsp;</i> Login</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-basket icons">&nbsp;</i> Shopping Cart  <span class="caret"></span></a>
                            </li> -->
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="icon-basket icons">&nbsp;</i> Shopping Cart  <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-cart" role="menu">
                                  <li>
                                      <span class="item">
                                        <span class="item-left">
                                            <img src="<?php echo Config::get('app.url');?>aset/main/img/no-img.jpg" alt="" />
                                            <span class="item-info">
                                                <span>Item name</span>
                                                <span>23$</span>
                                            </span>
                                        </span>
                                        <span class="item-right">
                                            <button class="btn btn-xs btn-danger pull-right">x</button>
                                        </span>
                                    </span>
                                  </li>
                                  <li>
                                      <span class="item">
                                        <span class="item-left">
                                            <img src="<?php echo Config::get('app.url');?>aset/main/img/no-img.jpg" alt="" />
                                            <span class="item-info">
                                                <span>Item name</span>
                                                <span>23$</span>
                                            </span>
                                        </span>
                                        <span class="item-right">
                                            <button class="btn btn-xs btn-danger pull-right">x</button>
                                        </span>
                                    </span>
                                  </li>
                                  <li>
                                      <span class="item">
                                        <span class="item-left">
                                            <img src="<?php echo Config::get('app.url');?>aset/main/img/no-img.jpg" alt="" />
                                            <span class="item-info">
                                                <span>Item name</span>
                                                <span>23$</span>
                                            </span>
                                        </span>
                                        <span class="item-right">
                                            <button class="btn btn-xs btn-danger pull-right">x</button>
                                        </span>
                                    </span>
                                  </li>
                                  <li>
                                      <span class="item">
                                        <span class="item-left">
                                            <img src="<?php echo Config::get('app.url');?>aset/main/img/no-img.jpg" alt="" />
                                            <span class="item-info">
                                                <span>Item name</span>
                                                <span>23$</span>
                                            </span>
                                        </span>
                                        <span class="item-right">
                                            <button class="btn btn-xs btn-danger pull-right">x</button>
                                        </span>
                                    </span>
                                  </li>
                                  <li class="divider"></li>
                                  <li><a class="btn btn-warning col-md-12" href="<?php echo Config::get('app.url');?>public/check_out">View Cart</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-lg visible-xs" href="index.php"><img height="30" src="<?php echo Config::get('app.url');?>aset/main/img/logo.png" /></a>
          </div> 
          <div class="hidden-xs visible-lg">
              <div id="navbar" class="navbar-collapse collapse">
                <!-- Begin Menu -->
                  @yield('menu')
                <!-- End Menu -->
                <div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"></span>
						</form>
				</div>
              </div><!--/.nav-collapse -->
          </div>
          <div class="hidden-lg visible-xs">
            <div class="collapse navbar-collapse jsi-spmenu jsi-spmenu-vertical jsi-spmenu-right" id="primary-nav">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="index.php" class="pull-left"><img src="aset/img/logo.png" height="23" title="Jeep Station Indonesia" /></a>
                    <a href="#login.php" class="fusion-logout">Log In</a>
                    <div class="clearfix"></div>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo Config::get('app.url');?>public/product"><i class="fa fa-angle-right">&nbsp;</i> Categories</a></li>
                  <li><a href="<?php echo Config::get('app.url');?>public/about"><i class="fa fa-angle-right">&nbsp;</i> About Us</a></li> 
                  <li><a href="<?php echo Config::get('app.url');?>public/product"><i class="fa fa-angle-right">&nbsp;</i> Our Products</a></li> 
                  <li><a href="#"><i class="fa fa-angle-right">&nbsp;</i> JSI Community</a></li>
                  <li><a href="<?php echo Config::get('app.url');?>public/news"><i class="fa fa-angle-right">&nbsp;</i> News &amp; Events</a></li>
                  <li><a href="<?php echo Config::get('app.url');?>public/contact_us"><i class="fa fa-angle-right">&nbsp;</i> Contact Us</a></li>  
                  <li class="divider"></li>          
                </ul>
              </div>
          </div>
          <!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </header>

    <!-- content -->
    @yield('content')
    <!-- /content -->

    <footer>
      <div class="container">
        <div class="row clearfix">
          <div class="col-md-3 footer-block">
            <h5>original spareparts</h5>
            <div class="icons"><i class="icon-badge icons"></i></div>
            <p>Lorem ipsum dolor sit amet simpledummy text and awesome</p>
          </div>
          <div class="col-md-3 footer-block">
            <h5>secured payment</h5>
            <div class="icons"><i class="icon-lock icons"></i></div>
            <p>Lorem ipsum dolor sit amet simpledummy text and awesome</p>
          </div>
          <div class="col-md-3 footer-block">
            <h5>free to ask</h5>
            <div class="icons"><i class="icon-bubbles icons"></i></div>
            <p>Lorem ipsum dolor sit amet simpledummy text and awesome</p>
          </div>
          <div class="col-md-3 footer-block">
            <h5>keep me informed</h5>
            <div class="icons"><i class="icon-envelope icons"></i></div>
            <p>Lorem ipsum dolor sit amet simpledummy text and awesome</p>
          </div>
        </div>
      </div>
  </footer>
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6 footer-menu visible-lg hidden-xs">
          <ul>
            <li><a href="#">information</a></li>
            <li><a href="#">terms &amp; conditions</a></li>
            <li><a href="#">sitemap</a></li>
            <li><a href="#">disclaimer</a></li>
            <li><a href="#">contact us</a></li>
          </ul> 
        </div>
                <div class="col-md-6 footer-menu visible-xs hidden-lg">
          <ul>
            <li><a href="#">information</a></li>
            <li><a href="#">contact us</a></li>
          </ul> 
        </div>
        <div class="col-md-6 social-media">
          <ul>
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          </ul> 
        </div>
      </div>
    </div>
  </div>
  <div class="copyright text-center">&copy; 2015 Jeep Station Indonesia, All Rights Reserved.</div>

    <!-- // start:javascript // -->
    <script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/bootstrap.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/jPushMenu.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/v2p.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/owl.carousel.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/classie.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/main/js/uisearch.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      new UISearch( document.getElementById( 'sb-search' ) );
      $('.toggle-menu').jPushMenu({closeOnClickLink: false});
      $('.dropdown-toggle').dropdown();   
    });
    $(document).ready(function() {
        var owl = $("#owl-brands");     
        owl.owlCarousel({         
          itemsCustom : [
            [0, 1],
            [450, 2],
            [600, 3],
            [700, 4],
            [1000, 5],
            [1200, 5],
            [1400, 5],
            [1600, 5]
          ],
          navigation : false     
      });     
    });
    $(document).ready(function() {
        var owl = $("#owl-featured");     
        owl.owlCarousel({         
          items : 4, //10 items above 1000px browser width
          itemsDesktop : [1000,4], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,4], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          navigation : false,
          autoplay : true     
      });     
    });
    $(document).ready(function() {
 
      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
     
      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });
     
      sync2.owlCarousel({
        items : 4,
        itemsDesktop      : [1199,10],
        itemsDesktopSmall     : [979,10],
        itemsTablet       : [768,8],
        itemsMobile       : [479,4],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });
     
      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }
      }
     
      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });
     
      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }
     
        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
        
      }
     
    });
    </script>
</body>
</html>