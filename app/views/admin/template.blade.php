<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JSI Admin</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/dist/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .kat-height {
      height: 105px!important;
    }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <a href="index2.html" class="logo">
          <span class="logo-mini"><img src="<?php echo Config::get('app.url');?>aset/admin/dist/img/logo.png"></span>
          <span class="logo-lg"><img src="<?php echo Config::get('app.url');?>aset/admin/dist/img/logo.png"></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo Config::get('app.url');?>aset/admin/dist/img/logo.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="<?php echo Config::get('app.url');?>aset/admin/dist/img/logo.jpg" class="img-circle" alt="User Image">
                    <p>
                      Administrator - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{Config::get('app.url')}}public/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>

          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/admin">
                <i class="fa fa-bar-chart-o"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{Config::get('app.url')}}public/admin/category">
                <i class="fa fa-tag"></i> <span>Master Kategori</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{Config::get('app.url')}}public/admin/brand">
                <i class="fa fa-leaf"></i> <span>Master Brand</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_pelanggan">
                <i class="fa fa-smile-o"></i> <span>Master Pelanggan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{Config::get('app.url')}}public/admin/product">
                <i class="fa fa-shopping-cart"></i> <span>Master Produk</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_group_pelanggan">
                <i class="fa fa-users"></i> <span>Group Pelanggan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_sales">
                <i class="fa fa-money"></i> <span>Sales</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_news_events">
                <i class="fa fa-bookmark"></i> <span>News &amp; Events</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_promo">
                <i class="fa fa-gift"></i> <span>Promo</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_voucher">
                <i class="fa fa-list-alt"></i> <span>Voucher</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo Config::get('app.url');?>public/adm_group">
                <i class="fa fa-list"></i> <span>Group</span>
              </a>
            </li>
            <li class="treeview">
              <a href=" echo Config::get('app.url');?>public/adm_user">
                <i class="fa fa-user"></i> <span>User</span>
              </a>
            </li>
          </ul>
          <div class="user-panel" style="border-top:1px solid #1A2226;">
            <div class="pull-left image">
              <img src="<?php echo Config::get('app.url');?>aset/admin/dist/img/logo.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Deasnet Panel Admin</p>
              <a href="#"><i class="fa fa-envelope text-warning"></i> info@deasnet.com</a>
            </div>
          </div>
        </section>
      </aside>

      <div class="content-wrapper">
        @yield('content')
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2015 <a href="http://deasnet.com">Deasnet</a>.</strong> All rights reserved.
      </footer>

      <div class="control-sidebar-bg"></div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/select2/select2.full.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/fastclick/fastclick.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/dist/js/app.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/dist/js/demo.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        $(".textarea").wysihtml5();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>