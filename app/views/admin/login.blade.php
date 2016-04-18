<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/admin/dist/css/skins/_all-skins.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b> JSI Online Shop</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="#" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email" name="username" id='username'>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" id='password'>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  
                </label>
              </div>
            </div>
            <div class="col-xs-4">
              <button type="button" class="btn btn-primary btn-block btn-flat" id="btn-login">Sign In</button>
            </div>
          </div>
        </form>

      </div>
    </div>

    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Config::get('app.url');?>aset/admin/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    <script type="text/javascript">
      function login(username,password){
          $.post('<?php echo Config::get("app.url")?>public/admin/login',{
            'email_login':username,
            'password':password
          },function(data){

            //var json = eval('('+data+')');
            //alert(json.alert);
            if(data.login){
              $('#notip').html(data.alert);
              $('#notip').css('color',' #e6efc2');
              $('#notip').css('text-align','center');
              window.location="<?php echo Config::get('app.url')?>public/admin/dashboard";
            }else{
              $('#notip').html(data.alert).show().fadeOut(5000);
              $('#notip').css('color','#f4bec0');
              $('#notip').css('text-align','center');
              $('#notip').css('font-size','22px');
            }
          });
      }
      $(document).ready(function(){
              $(this).ajaxStart(function(){
                $('#btn-login').html('Loading.......');
              }).ajaxStop(function(){
                $('#btn-login').html('Sign In');
              })
        });

      $(document).ready(function(){
        //alert('aaaa');
        $('#btn-login').click(function(){
          var username = $('#username').val();
          var password = $('#password').val();
          login(username,password);
        });
        $(this).keypress(function(event){
          if(event.which==13){
            var username = $('#username').val();
            var password = $('#password').val();
            login(username,password); 
          }
        });
      });
    </script>
  </body>
</html>
