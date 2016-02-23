<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Postings</title>

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- ............................................................................................ -->

    <style type="text/css">
        #rd-big-1, 
        #rd-big-2, 
        #rd-big-3,
        #rd-pay-1,
        #rd-pay-2  {
            cursor: pointer;
            outline: 1px solid #1abc9c;
            transition: all 250ms ease;
            height: 32%;
        }
        #rd-big-1:hover, 
        #rd-big-2:hover, 
        #rd-big-3:hover,
        #rd-pay-1:hover,
        #rd-pay-2:hover  {
            box-shadow: 0 0 9px #148f77;
        }
        .on {
            outline: 3px solid #1abc9c;
            box-shadow: 0 0 10px #eee;
            border-bottom: 10px solid #1abc9c;
        }
        .logo {
            font-size: 24pt;
        }
    </style>

    </head>

<body>
    <div class="container">
            <h1>Post a Job</h1>
                <!-- Panel NONE -->
                <div class="panel-none">
                    <div class="panel-body">
                        <form role="form">
                            <legend>Pilih Kategori</legend>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select name="kategoriJob" class="form-control" id="kategoriJob">
                                            <option value="category-1">Kategori 1</option>
                                            <option value="category-2">Kategori 2</option>
                                            <option value="category-3">Kategori 3</option>
                                            <option value="category-4">Kategori 4</option>
                                            <option value="category-5">Kategori 5</option>
                                            <option value="category-6">Kategori 6</option>
                                            <option value="category-7">Kategori 7</option>
                                            <option value="category-8">Kategori 8</option>
                                            <option value="category-9">Kategori 9</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select name="sub-kategoriJob" class="form-control" id="sub-kategoriJob" disabled>
                                            <option value="category-1">Kategori 1</option>
                                            <option value="category-2">Kategori 2</option>
                                            <option value="category-3">Kategori 3</option>
                                            <option value="category-4">Kategori 4</option>
                                            <option value="category-5">Kategori 5</option>
                                            <option value="category-6">Kategori 6</option>
                                            <option value="category-7">Kategori 7</option>
                                            <option value="category-8">Kategori 8</option>
                                            <option value="category-9">Kategori 9</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

              <div class="row">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">
                          <form>
                            <div class="form-group">
                              <legend>Describe the Job</legend>
                              <label for="nameJob" class="control-label">Name your Job Posting</label>
                              <input type="text" id="jobName" class="form-control">
                              <span id="helpBlock" class="help-block">This is the first thing contractosr see, so keep it succint and descriptive</span>
                            </div>
                            <div class="form-group">
                              <label for="describeJob">Describe the work to be done</label>
                              <textarea class="form-control" id="describeJob"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="freelancerSum" class="control-label">Berapa banyak Freelancer yang ingin kamu sewa untuk pekerjaan ini?</label>
                              <label class="radio" for="radio4a">
                                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="radio4a" required checked>
                                Saya hanya membutuhkan satu orang Freelancer
                              </label>
                              <label class="radio" for="radio4b">
                                <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="radio4b" required>
                                Saya membutuhkan lebih dari satu orang Freelancer
                                <input type="number" class="form-control input-sm" name="freelancerSum" value="many" style="max-width:70px; text-align:right; margin-top:10px" disabled>
                              </label>
                            </div>
                            <div class="form-group">
                              <label for="skillNeeded" class="control-label">Masukkan skill yang dibutuhkan <small>(optional)</small></label>
                              <div class="tagsinput-primary">
                                <input name="tagsinput-02" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" />
                              </div>
                            </div>
                          </form>
                        </li>
                        <li class="list-group-item">
                          <form>
                              <legend>Rate and Availabillity</legend>
                              <div class="form-group">
                                <label for="experienceLvl">Desired Experience Level</label>
                                  <div class="row" style="margin: 10px 0px;">
                                    <div id="rd-big-1" class="col-md-4">
                                        <input name="optionRadio" type="radio" id="rd-1" class="hidden">
                                        <center style="margin-top:25px;">
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <h6>ENTRY LEVEL</h6>
                                            <small>I am looking for freelancer with the lowest rates</small>
                                        </center>
                                    </div>
                                    <div id="rd-big-2" class="col-md-4">
                                        <input name="optionRadio" type="radio" id="rd-2" class="hidden">
                                        <center style="margin-top:25px;">
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <h6>INTERMEDIATE</h6>
                                            <small>I am looking for a mix of experience and value</small>
                                        </center>
                                    </div>
                                    <div id="rd-big-3" class="col-md-4">
                                        <input name="optionRadio" type="radio" id="rd-3" class="hidden">
                                        <center style="margin-top:25px;">
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <span class="glyphicon glyphicon-usd logo"></span>
                                            <h6>EXPERT</h6>
                                            <small>I am willing to pay higher rates for the most experienced freelancers</small>
                                        </center>
                                    </div>
                                  </div>
                              </div>
                          </form>
                        </li>
                    </ul>
                </div>
              </div>

            <button type="button" class="btn btn-primary">Post Job</button>
            <button type="button" class="btn btn-link">Preview</button>

            <footer>
                <div class="row" style="padding:20px;">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

    <script type="text/javascript">
        $("#rd-big-1").on('click', function() {
            $("#rd-1").prop("checked", true);
            $("#rd-big-1").addClass("on");
            $("#rd-big-2").removeClass("on");
            $("#rd-big-3").removeClass("on");
        });
        $("#rd-big-2").on('click', function() {
            $("#rd-2").prop("checked", true);
            $("#rd-big-2").addClass("on");
            $("#rd-big-1").removeClass("on");
            $("#rd-big-3").removeClass("on");
        });
        $("#rd-big-3").on('click', function() {
            $("#rd-3").prop("checked", true);
            $("#rd-big-3").addClass("on");
            $("#rd-big-2").removeClass("on");
            $("#rd-big-1").removeClass("on");
        });
    </script>

    <script type="text/javascript">
        $("#rd-pay-1").on('click', function() {
            $("#rd-1").prop("checked", true);
            $("#rd-pay-1").addClass("on");
            $("#rd-pay-2").removeClass("on");
        });
        $("#rd-pay-2").on('click', function() {
            $("#rd-2").prop("checked", true);
            $("#rd-pay-2").addClass("on");
            $("#rd-pay-1").removeClass("on");
        });
    </script>
    
</body>
</html>