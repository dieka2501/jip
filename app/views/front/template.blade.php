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
.navbar,.sb-search-input{min-height:40px!important}.pagination>li>a,.pagination>li>span{color:#ccc;background:#303030;border-color:#303030}#sync1 .item,#sync2 .item,#sync2 .synced .item{background:#fff!important}.product{margin-bottom:40px!important}.product h3{height:40px}.pro-tags a{color:#999!important}.product img{height:200px}.field-row{margin-bottom:20px}.form-order p,.order-info-item p{color:#888!important}.order-info-item{margin-bottom:30px}.borderless td,.borderless th,.borderless tr{border:0!important}.product-desc p,.product-info p{color:#777}#sync1 .owl-item .item img{width: 100%;height: 400px;object-fit: cover;}#sync1 .item{padding:0!important;border:0 solid #ddd}#sync2 .owl-item .item img{max-width:100%;height:70px}.owl-item .item.client img{max-width:100%;height:100%!important}#sync2 .item{padding:0!important;border:1px solid #ddd}#sync2 .synced .item{border-color:#999!important}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{background-color:#FF9500!important;border-color:#FF9500!important}.sb-search-input{height:40px!important}.nav>li>a{padding:10px 30px!important}.topbar{padding-top:5px;padding-bottom:5px}.sb-search{margin-top:2px!important;margin-bottom:2px!important;height:38px!important}.sb-icon-search,.sb-search-submit{line-height:40px!important;font-size:18px!important}.menu-large{position:static!important}.megamenu{padding:20px 0;width:auto;background:#333333;}.dropdown-menu.megamenu{left:auto}.megamenu>li>ul{padding:0;margin:0}.megamenu>li>ul>li{list-style:none}.dropdown-menu.megamenu .divider {background: #444444!important;}.megamenu>li>ul>li>a{display:block;padding:3px 20px;clear:both;font-weight:400;line-height:1.428571429;color:#bbbbbb;white-space:normal}.megamenu>li ul>li>a:focus,.megamenu>li ul>li>a:hover{text-decoration:none;color:#262626;background-color:#f5f5f5}.megamenu.disabled>a,.megamenu.disabled>a:focus,.megamenu.disabled>a:hover{color:#999}.megamenu.disabled>a:focus,.megamenu.disabled>a:hover{text-decoration:none;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);cursor:not-allowed}.megamenu.dropdown-header{color:#428bca;font-size:18px}@media (max-width:768px){.megamenu{margin-left:0;margin-right:0}.megamenu>li{margin-bottom:30px}.megamenu>li:last-child{margin-bottom:0}.megamenu.dropdown-header{padding:3px 15px!important}.navbar-nav .open .dropdown-menu .dropdown-header{color:#fff}}
  img.featured-prod.center-block.img-responsive {
    height: 200px;
    object-fit: cover;
  }
  .navbar-nav > li > .dropdown-menu {
      border-radius: 0 !important;
      width: 83.5%;
  }
  .topmenu {
    padding-top: 35px;
  }
  .slogan img {
    height: 80px;
  }
  /*modal*/
  .product-price {
    font-family: Arial!important;
  }
  .modal-cont {
    color: #666666!important;
  }
  .modal-cont .form-control {
    font-size: 12px!important;
  }

  .modal-cont .form-group {
    margin-bottom: 0px;
  }

  .modal-cont .lead {
    background-color: #ffffff!important;
    color: #666!important;
    /*margin-top: 40px;*/
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #666;
    margin-top: 15px;
            margin-bottom: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #f5f5f5;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  /*new lagi*/
  ul.dropdown-cart {
    right: 0;
    left: inherit!important;
    min-width: 310px!important;
  }
  .table > tbody > tr > td {
      vertical-align: middle!important;
  }
    .form-pengiriman {
      border: 1px solid #e0e0e0;
      padding: 20px;
      margin-bottom: 20px
    }
    .form-pengiriman table {
      font-size: 12px;
      margin-bottom: 0px;
    }
    .form-pengiriman h4 {
      margin-top: 0px;
      padding-bottom: 20px;
      border-bottom:1px solid #e0e0e0;
      margin-bottom: 30px;
      font-family: Arial;
      font-size: 15px;
      font-weight: bold;
    }
    .form-pengiriman .alert {
      font-family: Arial;
    }
    .form-pengiriman .alert input[type="radio"] {
      margin-top: 1px;
    }
    .form-pengiriman .alert .radio {
      margin-bottom: 7px;
    }
    .form-control {
      border-radius: 0px!important;
    }
    .address_wrapper {
      margin-bottom: 30px;
      margin-left: 15px;
    }
    .address_wrapper .radio_check {
        float: left;
        margin-right: 15px;
        padding-top: 1px;
    }

    .address_wrapper .address p {
      color: #444;
      margin-bottom: 0px;
      font-size: 12px;
    }
    .address_wrapper .address p.ch-head {
      font-weight: bold;
      font-size: 14px;
      font-family: arial;
    }
    .bayar-cod {
      padding: 50px 20px;
    }
    .bayar-cod p {
      color: #444;
      font-family: arial;
    }
    .box-pengirim p {
      color: #666666;
      font-family: arial;
      font-size: 12px;
      margin-bottom: 0px;
      line-height: 20px;
    }
</style>
</head>
<!-- // end:head // -->
<body>
    <header id="header">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 slogan"><a href="<?php echo Config::get('app.url');?>public/"><img src="<?php echo Config::get('app.url');?>logo/jhl.png"></a></div>
                    <div class="col-md-6">
                        <ul class="topmenu">
                            @if(Session::get('login') != true)
                            <!-- <li><a href="<?php echo Config::get('app.url');?>public/register"><i class="icon-user-follow icons">&nbsp;</i> Register</a></li> -->
                            <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><i class="icon-user-follow icons">&nbsp;</i>Login or Register</a></li>
                            <!-- <li><a href="<?php echo Config::get('app.url');?>public/login"><i class="icon-login icons">&nbsp;</i> Login</a></li> -->
                            @else
                            <li><a href="{{Config::get('app.url')}}public/member/{{Session::get('id')}}"><i class="icon-user-follow icons">&nbsp;Hi! </i> {{Session::get('first_name')}} {{Session::get('last_name')}}</a></li>
                            <li><a href="<?php echo Config::get('app.url');?>public/logout"><i class="icon-login icons">&nbsp;</i> Logout</a></li>
                            @endif
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-basket icons">&nbsp;</i> Shopping Cart  <span class="caret"></span></a> -->
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="icon-basket icons">&nbsp;</i> Shopping Cart  <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-cart" role="menu">
                                  <?php 

                                  $carttemplate = DB::table('cart')
                                                ->join('product','cart.product_id','=','product.id_product')
                                                ->join('brand','product.brand_id','=','brand.id_brand')
                                                ->where('cart.session',Session::get('_token'))
                                                ->get();
                                ?>
                                  @foreach($carttemplate as $carttemplates)
                                  <li>
                                    <div class="media">
                                    <div class="media-left">
                                    <a href="#">
                                    <img src="<?php echo Config::get('app.url');?>aset/upload/{{$carttemplates->main_image}}" alt="" style="width: 40px; height: 40px;" />
                                    </a>
                                    </div>
                                    <div class="media-body">
                                    <h5 class="media-heading">{{$carttemplates->name_product}}</h5> 
                                    <p class="pull-left">Rp. {{number_format($carttemplates->price_product)}}</p><p class="pull-right"><a href="{{Config::get('app.url')}}public/cart/delete?id={{$carttemplates->id_cart}}"><i class="fa fa-times"></i></a></p>
                                    </div>
                                    </div>
                                  </li>
                                  @endforeach
                                  
                                  <li class="divider"></li>
                                  <li><a class="btn btn-warning col-md-12" href="<?php echo Config::get('app.url');?>public/cart">View Cart</a></li>
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
                    <a href="index.php" class="pull-left"><img src="<?php echo Config::get('app.url');?>aset/img/logo.png" height="23" title="Jeep Station Indonesia" /></a>
                    <a href="#login.php" class="fusion-logout">Log In</a>
                    <div class="clearfix"></div>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo Config::get('app.url');?>public/product"><i class="fa fa-angle-right">&nbsp;</i> Categories</a></li>
                  <li><a href="<?php echo Config::get('app.url');?>public/about"><i class="fa fa-angle-right">&nbsp;</i> About Us</a></li> 
                  <li><a href="<?php echo Config::get('app.url');?>public/product"><i class="fa fa-angle-right">&nbsp;</i> Our Products</a></li> 
                  <!-- <li><a href="#"><i class="fa fa-angle-right">&nbsp;</i> JSI Community</a></li> -->
                  <li><a href="<?php echo Config::get('app.url');?>public/news"><i class="fa fa-angle-right">&nbsp;</i> News &amp; Events</a></li>
                  <li><a href="<?php echo Config::get('app.url');?>public/contact"><i class="fa fa-angle-right">&nbsp;</i> Contact Us</a></li>  
                  <li><a href="<?php echo Config::get('app.url');?>public/payment"><i class="fa fa-angle-right">&nbsp;</i> Confirm Payment</a></li>  
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
<!-- modal -->
<div class="modal fade modal-cont" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login or Register</h4>
            </div>
            <div class="modal-body">

                <!-- tabs -->
            <div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content" style="padding-top: 30px;">
                <div role="tabpanel" class="tab-pane active" id="login">
                  <div class="row">
                  <div class="col-xs-7">
                      <div class="well">
                      <form class="form-signin" method="POST" action="{{Config::get('app.url')}}public/login" style="padding:0px;">
                      <input type="text" class="form-control" placeholder="Email" required="" name="email" autofocus="">
                      <input type="password" class="form-control" placeholder="Password" name="password" required="">
                      <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
                      <a href="#" class="pull-right need-help">Forgot Password!</a><span class="clearfix"></span>
                      </form>

                      <!-- <div class="login-or">
                          <hr class="hr-or">
                          <span class="span-or">or</span>
                      </div> -->

                      <!-- <div class="row">
                          <div class="col-xs-6 col-sm-6 col-md-6">
                              <a href="#" class="btn btn-lg btn-primary btn-sm btn-block"><i class="fa fa-facebook"></i> Facebook</a>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6">
                              <a href="#" class="btn btn-lg btn-info btn-sm btn-block"><i class="fa fa-google-plus"></i> Google</a>
                          </div>
                      </div> -->
                      </div>
                  </div>
                  <div class="col-xs-5">
                  <p class="lead">Login now for <span class="text-success">FREE</span></p>
                  <ul class="list-unstyled" style="line-height: 2">
                  <li><span class="fa fa-check text-success"></span> See all your orders</li>
                  <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                  <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                  <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                  <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                  </ul>
                  </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="register">
                  <div class="row">
                <div class="col-xs-7">
                    <div class="well">
                    <form class="form-signin" method="POST" action="{{Config::get('app.url')}}public/register" style="max-width: 100%;padding:0px;">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" value="">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        <input type="password" class="form-control" name="repassword" placeholder="Ulangi Password" required="">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="" value="">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required="" value="">
                        <input type="text" class="form-control" name="date_birth" placeholder="Date Birth" value="" id='date_birth'>
                        <button class="btn btn-lg btn-warning btn-block" type="submit">Register</button>
                    </form>

                    <!-- <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                    </div> -->

                    <!-- <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-primary btn-sm btn-block"><i class="fa fa-facebook"></i> Facebook</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-info btn-sm btn-block"><i class="fa fa-google-plus"></i> Google</a>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="col-xs-5">
                <p class="lead">Register now for <span class="text-success">FREE</span></p>
                <ul class="list-unstyled" style="line-height: 2">
                <li><span class="fa fa-check text-success"></span> See all your orders</li>
                <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                </ul>
                </div>
                </div>
                </div>
              </div>

            </div>

            </div>
        </div>
    </div>
</div>

<!-- /modal -->
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
    <script src="<?php echo Config::get('app.url');?>aset/main/js/jquery-ui-1.10.3.min.js"></script>
    
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
    <script type="text/javascript">
      $(document).ready(function(){
          $('#date_birth').datepicker();
      });
      
    </script>
</body>
</html>