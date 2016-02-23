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

    <style type="text/css">
    body {
      padding-top: 120px;
    }
    </style>

<!-- ............................................................................................ -->

    <link rel="shortcut icon" href="gwe.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <div class="container">
    <center>
      <h1>Complete your profile...</h1>
    </center><br>
    <div class="row">
      <div class="col-md-9">   
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4>
                Cover Letter 
              </h4><br/>
              <form class="role">
                <p>Use this space to show clients you have the skills and experience they're looking for.</p>
                <ul>
                  <li>Describe your strengths and skills</li>
                  <li>Highlight projects, accomplishments and education</li>
                  <li>Keep it short and make sure error-free</li>
                </ul>
                <div class="form-group">
                  <textarea class="form-control" id="overview" value=""></textarea>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4>
                Portfolio
                </span>
              </h4><br/>
              <form class="role">
                  <div class="form-group">
                    <label for="project-title" class="control-label">Judul Proyek</label>
                    <input type="text" class="form-control" id="project-title">
                  </div>
                  <div class="form-group">
                    <label for="project-overview" class="control-label">Overview Proyek</label>
                    <textarea class="form-control" id="project-overview"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="thumbnail-image" class="control-label">Gambar Thumbnail</label>
                    <div class="well">
                      <p><a href="#" type="file" id="exampleInputFile">upload</a> project thumbnail</p>
                      <input type="file" id="inputThumb">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="project-files" class="control-label">File Proyek</label>
                    <div class="well">
                      <p><a href="#">upload</a> project files</p>
                      <input type="file" id="inputFile">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ghawe-credit" class="control-label">Apakah proyek ini diselesaikan menggunakan Ghawe?</label>
                    <select name="ghawe-credit" class="form-control" id="ghawe-credit">
                        <option value="new">Select a contract</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="category" class="control-label">Kategori</label>
                    <select name="category" class="form-control" id="category">
                        <option value="new">Select a category</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                      </select><br/>
                      <select name="sub-category" class="form-control" id="sub-category" disabled="disabled">
                        <option value="new">Select category</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                        <option value="new">SHIT</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="project-url" class="control-label">URL Proyek(optional)</label>
                    <input type="text" class="form-control" id="project-url">
                  </div>
                  <div class="form-group">
                    <label for="completion-date" class="control-label">Tanggal Selesai(optional)</label>
                    <input type="date" class="form-control" id="completion-date">
                  </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4>
                Employment History
                </span>
              </h4><br/>
              <form>
              <div class="form-group">
                <label for="company" class="control-label">Perusahaan</label>
                <input type="text" class="form-control" id="company">
              </div>
              <div class="form-group">
                <label for="location" class="control-label">Lokasi</label>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" id="city" placeholder="Kota">
                  </div>
                  <div class="col-md-6">
                    <select name="province" class="form-control" id="province">
                    <option value="">Provinsi</option>
                    <option value="date">West Java</option>
                    <option value="date">Middle Java</option>
                    <option value="date">East Java</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="title" class="control-label">Gelar</label>
                <input type="text" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="role" class="control-label">Peran</label>
                <select name="role" class="form-control" id="role">
                  <option>Please select...</option>
                  <option value="new">Slave</option>
                  <option value="new">Slave</option>
                  <option value="new">Slave</option>
                  <option value="new">Slave</option>
                </select>
              </div>
              <div class="form-group">
                <label for="period" class="control-label">Jangka Waktu</label>
                <div class="row">
                  <div class="col-md-6">
                    <select name="month-from" class="form-control" id="month-from">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <select name="year-from" class="form-control" id="year-from">
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                    </select>
                  </div>
                <center style="margin-top: 5px; margin-bottom: 5px;">sampai</center>
                  <div class="col-md-6">
                    <select name="month-to" class="form-control" id="month-to">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <select name="year-to" class="form-control" id="year-to">
                      <option value="2016">2016</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="checkbox" for="checkbox1">
                    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox1" required>
                    Saya masih bekerja disini
                  </label>
              </div>
              <div class="form-group">
                <label for="description" class="control-label">Description (optional)</label>
                <textarea class="form-control" id="description"></textarea>
              </div>
             </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <h4>
                Education
                </span>
              </h4><br/>
              <form>
              <div class="form-group">
                <label for="school" class="control-label">Sekolah</label>
                <input type="text" class="form-control" id="school">
              </div>
              <div class="form-group">
                <label for="school" class="control-label">Dates Attended</label>
                <div class="row">
                  <div class="col-md-6">
                  <select name="date-from" class="form-control" id="date-from">
                    <option value="date">From</option>
                    <option value="date">SHEEET</option>
                    <option value="date">SHEEET</option>
                    <option value="date">SHEEET</option>
                  </select>
                  </div>
                  <div class="col-md-6">
                    <select name="date-to" class="form-control" id="date-to">
                    <option value="date">To (or expected graduation year)</option>
                    <option value="date">SHEEET</option>
                    <option value="date">SHEEET</option>
                    <option value="date">SHEEET</option>
                  </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="degree" class="control-label">Degree</label>
                <input type="text" class="form-control" id="degree">
              </div>
              <div class="form-group">
                <label for="areaofstudy" class="control-label">Area of study (optional)</label>
                <input type="text" class="form-control" id="areaofstudy">
              </div>
              <div class="form-group">
                <label for="description" class="control-label">Description (optional)</label>
                <textarea class="form-control" id="description"></textarea>
              </div>
             </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="well">
            <legend>Questions</legend>
            <ul class="list-unstyled">
                <li><a href="#">What can I get done on Ghawe?</a></li>
                <li><a href="#">How do I know I'm protected</a></li>
                <li><a href="#">How do I get started</a></li>
            </ul>
        </div>
      </div>

    </div>

      <div class="row">
        <div class="col-md-12">
          <center>
            <p>
              <button type="button" class="btn btn-default btn-hg">Skip</button>
              &nbsp;&nbsp;&nbsp;
              <a type="button" href="<?php echo site_url("register/daftar")?>" class="btn btn-primary btn-hg">Save</a>
            </p>
          </center>
        </div>
      </div>

</div>

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
  

    <!-- jQuery -->
    <script src="<?php echo base_url("media")?>/dist/js/jquery.js"></script>   

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