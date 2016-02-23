<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ghawe! - Register</title>
    <meta name="description" content="Join Us and Create your free account now!"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- ............................................................................................ -->

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
        position: inherit;
      }

      .tile{
        background-color: #ffffff;
      }

      .progress{
        background: #ffffff;
      }
      </style>
  </head>
   <body>
    </style>
          <div class="row demo-row">
      </div> <!-- /row -->
      <center>
        <h1>Choose your Side!</h1>
      </center>  
    <div class="container"><br>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <img src="<?php echo base_url("media")?>/img/icons/svg/clipboard.svg" alt="Client" class="tile-image">
                <h3 class="tile-title">Client</h3>
                <p>Temukan orang-orang ahli untuk membantu pekerjaanmu!</p>
                <a class="btn btn-primary btn-large btn-block" href="<?php echo site_url("job/client")?>">Register</a>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <img src="<?php echo base_url("media")?>/img/icons/svg/clocks.svg" alt="Freelancer" class="tile-image">
                <h3 class="tile-title">Freelancer</h3>
                <p>Temukan berbagai pekerjaan yang cocok denganmu!</p>
                <a class="btn btn-primary btn-large btn-block" href="<?php echo site_url("job/register")?>">Register</a>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <img src="<?php echo base_url("media")?>/img/icons/svg/clipboard.svg" alt="Client" class="tile-image">
                <h3 class="tile-title">Client</h3>
                <p>Temukan orang-orang ahli untuk membantu pekerjaanmu!</p>
                <a class="btn btn-primary btn-large btn-block" href="<?php echo site_url("job/client")?>">Register</a>
              </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
              <div class="tile">
                <img src="<?php echo base_url("media")?>/img/icons/svg/clocks.svg" alt="Freelancer" class="tile-image">
                <h3 class="tile-title">Freelancer</h3>
                <p>Temukan berbagai pekerjaan yang cocok denganmu!</p>
                <a class="btn btn-primary btn-large btn-block" href="<?php echo site_url("job/register")?>">Register</a>
              </div>
            </div>            

            <h3 class="demo-panel-title">Profile Completion</h3>
            <div class="progress">
              <div class="progress-bar" style="width: 10%;"></div>
            </div>
          </div> <!-- /row -->
        </div>
      </div> <!-- /row -->
    </div><!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/vendor/video.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

  </body>
</html>