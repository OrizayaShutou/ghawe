<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Desc</title>

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- ............................................................................................ -->

    <style type="text/css">
    	.edit-badge, 
    	.add-badge {
    		transition: all 250ms ease;
    		opacity: 0;
    	}
    	h4:hover > .edit-badge,
    	h6:hover > .add-badge,
    	h2:hover > .add-badge,
    	p:hover > .add-badge
    	{
    		opacity: 1;
    		cursor: pointer;
    	}
    	.profile {
    		max-width: 120px;
    		margin-top: 20px;
    	}
    </style>

</head>

<body>
	<div class="container">
	  <div class="row">
			<div class="col-md-9">
			  <div class="row">
			  	<div class="panel-none">
			  		<div class="panel-body" style="padding-top:0px;">
			  			<h4>My Profile</h4>
						<div class="col-md-2 col-xs-3">
							<h3><img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive"></h3>
						</div>
						<div class="col-md-10 col-xs-9">
							<h3>
								Katou Megumi
							</h3>
							<h6>Just an ordinary girl, nothing special <span class="glyphicon glyphicon-pencil add-badge" data-toggle="modal" data-target="#titleModal" data-whatever="@title"></span></h6>
							<h6><span class="glyphicon glyphicon-map-marker"></span> Bandung, Indonesia</h6>
							<p>1:24 PM Local Time</p>
							<p>
								<a href="#"><span class="label label-default">Translation</span></a>
								<a href="#"><span class="label label-default">Web Design</span></a>
								<a href="#"><span class="label label-default">Photoshop</span></a>
								<a href="#"><span class="label label-default">Corel DRAW</span></a>
								<span class="glyphicon glyphicon-pencil add-badge" data-toggle="modal" data-target="#skillModal" data-whatever="@skill"> </span>
							</p>

						</div>
					</div>
				</div>
			  </div>

			  <div class="row">
			  	<div class="panel-none">
			  		<div class="panel-body">
			  			<h4>
			  				Overview 
							<span class="glyphicon glyphicon-pencil edit-badge" data-toggle="modal" data-target="#overviewModal" data-whatever="@overview"></span>
			  			</h4><br/>
						<p>I can do some drawing and illustration. Most recently I've been working to do some illustration for logos, brochure, banner, and anything else look alike.</p>
						<p>I also had an experience with Web Programming. I usually do the design for the Web and finally do the HTML. You could call it 'slicing' yes I would refer it like that.</p>
						<p>And finally I can do some translation work too. Like from English to Indonesian and the other way.</p>
						<p>Oh, and one more thing if you have some Manga-scanlation job to do feel free to contact me. I'd love to join your project.</p>
						<p>Thanks for your credence</p>
						<br/>
					</div>
				</div>
			  </div>

			  <div class="row">
			  	<div class="panel panel-default">
			  		<div class="panel-body">
			  			<h4>Work History and Feedback
						  <div style="float: right;">
						  	<select name="history-kerja" class="form-control" id="history-kerja">
                		  	  <option value="new">Newest first</option>
                		  	  <option value="old">Oldest first</option>
                		  	</select>
                		  </div>
						</h4><br/><br/>
						<div class="row" style="margin: 0px 10px;">
							<div style="float: left">
								<p>Jul 2015 - Present</p>
								<p>Small Business</p>
							</div>
							<div style="float: right">
								<p>9 hours</p>
								<p>$3.50 / hr</p>
								<p>$31.50 earned</p>
							</div>
						</div>
			  		</div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="panel panel-default">
			  		<div class="panel-body">
			  			<h4>
			  				Portfolio
								<span class="glyphicon glyphicon-plus edit-badge" data-toggle="modal" data-target="#portfolioModal" data-whatever="portfolio">
								</span>
			  			</h4><br/>
			  			<p>No items to display</p>
			  		</div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="panel panel-default">
			  		<div class="panel-body">
			  			<h4>
			  				Employment History
								<span class="glyphicon glyphicon-plus edit-badge" data-toggle="modal" data-target="#employmentModal" data-whatever="employment">
								</span>
			  			</h4><br/>
			  			<p>No items to display</p>
			  		</div>
			  	</div>
			  </div>

			  <div class="row">
			  	<div class="panel panel-default">
			  		<div class="panel-body">
			  			<h4>
			  				Education
								<span class="glyphicon glyphicon-plus edit-badge" data-toggle="modal" data-target="#educationModal" data-whatever="education">
								</span>
			  			</h4><br/>
			  			<p><b>Software Engineering | Vocational High School 4 Bandung</b></p>
			  			<p>2013-2016</p>
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
                        <li><a href="#">How do I pay?</a></li>
                        <li><a href="#">How do I get started</a></li>
                    </ul>
                </div>
			</div>
		</div>
	  </div>

	<div class="modal fade" id="titleModal" tabindex="-1" role="dialog" aria-labelledby="TitleModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="TitleModal">Edit Name & Title</h4>
	      </div>
	      <div class="modal-body">
	      	<form>
	      	  <label for="skill" class="control-label">Name</label>
	      	  <div class="form-group">
	      		<label class="radio">
              	  <input type="radio" data-toggle="radio" name="optionsRadios" id="optionsRadios1" value="option1" data-radiocheck-toggle="radio" checked="">
              	  Show my full name (e.g. Levi Ackerman)
              	</label>
              	<label class="radio">
              	  <input type="radio" data-toggle="radio" name="optionsRadios" id="optionsRadios2" value="option1" data-radiocheck-toggle="radio" required>
              	  Show only my first name and last inisial (e.g. Levi A.)
              	</label>
	      	  </div>
	      	  <div class="form-group">
	      	  	<label for="my-title" class="control-label">Title (optional)</label>
	      	  	<input type="text" class="form-control" id="my-title" value="Professional Weaboo with Excellent Japanese Skills">
	      	  </div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	      	<input type="submit" class="btn btn-primary" value="Save">
	      	<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="SkillModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="SkillModal">Skill Saya</h4>
	      </div>
	      <div class="modal-body">
	      	  <form>
	      	  	<div class="form-group">
                  <label for="skillNeeded" class="control-label">Masukkan skill yang dibutuhkan <small>(optional)</small></label>
                  <div class="tagsinput-primary">
                    <input name="tagsinput-02" class="tagsinput" data-role="tagsinput" value="Translation, Web Design, Photoshop, Corel DRAW" />
                  </div>
                </div>
	      	  </form>
	      	  <p>Add up to 10 skills. Remove skills by deleting tags or press backspace key to remove the last tag</p>
	      </div>
	      <div class="modal-footer">
	      	<input type="submit" class="btn btn-primary" value="Save">
	      	<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="overviewModal" tabindex="-1" role="dialog" aria-labelledby="OverviewModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="OverviewModal">Overview</h4>
	      </div>
	      <div class="modal-body">
	        <form>
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
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="PortfolioModal">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="PortfolioModal">Proyek Saya</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	        <form>
	          <div class="col-md-6">
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
	          </div>
	          <div class="col-md-6">
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
	          </div>
	        </form>
	        </div>
	        <div>
	        	<center>Make sure you have copyright permissions to any work you add to this project</center>
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Publish Project</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="EducationModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="EducationModal">Add Education</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      	  <div class="col-md-12">
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
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="employmentModal" tabindex="-1" role="dialog" aria-labelledby="EmploymentModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="EmploymentModal">Add Employment</h4>
	      </div>
	      <div class="modal-body">
	      	<div class="row">
	      	  <div class="col-md-12">
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
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- jQuery -->
    <script src="<?php echo base_url("media")?>/dist/js/jquery.js"></script>
    <script type="text/javascript">
    	$('#titleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Edit Name & Title')
		})
    	$('#skillModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var recipient = button.data('whatever')

		  var modal = $(this)
		  modal.find('.modal-title').text('My Skill')
		})
    	$('#overviewModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var recipient = button.data('whatever')

		  var modal = $(this)
		  modal.find('.modal-title').text('Overview')
		})
		$('#portfolioModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var recipient = button.data('whatever')

		  var modal = $(this)
		  modal.find('.modal-title').text('Proyek Saya')
		})
		$('#employmentModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var recipient = button.data('whatever')

		  var modal = $(this)
		  modal.find('.modal-title').text('Add Employment')
		})
		$('#educationModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget)
		  var recipient = button.data('whatever')

		  var modal = $(this)
		  modal.find('.modal-title').text('Add Education')
		})
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>
	
</body>
</html>