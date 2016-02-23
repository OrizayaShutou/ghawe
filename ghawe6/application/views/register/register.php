<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ghawe! - Register</title>
    <meta name="description" content="Join Us and Create your free account now!"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <style type="text/css">
    body {
      padding-top: 120px;
    }
    </style>

<!-- ............................................................................................ -->

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->

    <style>
      input[type='date']:after {
        content: attr(placeholder)
        }
    </style>

  </head>
  <body>

      <center>
        <h1>Freelancer - Register</h1>
      </center>

      <center>
       <div class="login" style="width:600px; color:#1abc9c; text-align:left;">
          <div class="login-form">
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Full Name" id="login-name" />
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Email" id="login-mail" />
              <label class="login-field-icon fui-mail" for="login-mail"></label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>
            <div class="form-group">
              <input type="date" class="form-control login-field" value="" id="date" placeholder="Your Birthday"/>
    
            </div>            
            <div class="form-group">
             <label class="radio">
                <input type="radio" data-toggle="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-radiocheck-toggle="radio" required>
                Male
              </label>
              <label class="radio">
                <input type="radio" data-toggle="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-radiocheck-toggle="radio" checked="">
                Female
              </label>
            </div>
            <div class="form-group">
              <div class="btn-group">
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Choose your Location <span class="caret"></span></button>
                  <ul role="menu" class="dropdown-menu">
                    <li class="dropdown-header" role="presentation">Location</li>
                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Jakarta</a></li>
                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Bandung</a></li>
                    <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Surabaya</a></li>
                  </ul>
              </div>
            </div><!-- /btn-group -->
            <div class="form-group">
              <label for="exampleInputFile">Upload your Photo Profile</label>
              <input type="file" id="exampleInputFile" accept="image/x-png, image/gif, image/jpeg" >
              <p class="help-block">File must be lower than 1MB (jpg, png, bmp)</p>
            </div>            
            <a class="btn btn-primary btn-lg btn-block" href="<?php echo site_url("register/regnext")?>">Sign Up</a>
          </div>
        </div>
      </center>

      <div id="popover-head" style="display: none;">
        <b style="color:#2C3E50;">Please Log In . . .</b>
      </div>
      <div id="popover-content" style="display: none;">
          <form id="mainForm" name="mainForm" method="post" action="" style="margin:5px 0;">
            <div class="login-form">
                <div class="form-group">
                  <input type="text" class="form-control login-field" value="" placeholder="Username/Email" id="login-name" />
                  <label class="login-field-icon fui-mail" for="login-name"></label>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
                  <label class="login-field-icon fui-lock" for="login-pass"></label>
                </div>
                <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
                <a class="login-link" href="#">Forgot your password?</a>
              </div>
          </form>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/vendor/video.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

    <script type="text/javascript">
    $('a[rel=popover]').popover({
      html: true,
      placement: 'bottom',
      title: function() {
        return $('#popover-head').html();
      },
      content: function() {
        return $('#popover-content').html();
      }
    });
    </script>

    </body>
</html>