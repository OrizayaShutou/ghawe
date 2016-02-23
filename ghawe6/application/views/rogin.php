<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ghawe! - Log in</title>
    <meta name="description" content="Log in to your account and Start ghawe! now."/>

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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>

      <center>
        <h1>GHAWE - Log in</h1>
      </center>
      <center>
       <div class="login" style="width:600px;">
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
            <a class="login-link" href="#">Forgot your fucking password?</a>
          </div>
        </div>
      </center>


    <script src="<?php echo base_url("media")?>/dist/js/jquery.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/video.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>