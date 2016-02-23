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
    .col-0-gutter {
    	padding-left: 0;
    	padding-right: 0;
    }

    .link {
    	float: right;
    	font-size: 16px;
    }
    #rd-big-1, 
    #rd-big-2, 
    #rd-big-3  {
    	cursor: pointer;
        outline: 1px solid #1abc9c;
        transition: all 250ms ease;
        height: 25%;
    }
    #rd-big-1:hover, 
    #rd-big-2:hover, 
    #rd-big-3:hover  {
    	box-shadow: 0 0 9px #148f77;
    }
    .on {
    	outline: 3px solid #1abc9c;
        box-shadow: 0 0 10px #eee;
        border-bottom: 10px solid #1abc9c;
    }
    </style>

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul id="sidePill" class="nav nav-pills nav-stacked" role="tablist">
				 	<li role="presentation">
  					  <a href="#profile" aria-controls="profile" role="tab" data-toggle="pill">Profile Settings</a>
  					</li>
				 	<li role="presentation" class="active">
				 	  <a href="#details" aria-controls="details" role="tab" data-toggle="pill">Contact Info</a>
				 	</li>
				</ul>
			</div>
			<div class="col-md-8">
			  <div id="sidePillContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="profile" aria-labelledby="profile-tab">
			  	 <div class="panel panel-default">
				  <div class="panel-heading">
				    <h1 class="panel-title ">Profile Settings</h1>
				  </div>
				  <ul class="list-group">
  				    <li class="list-group-item">
  				    	<form class="form-horizontal">
  				    		<legend>My Account Summary</legend>
				    		<div class="form-group ">
				    			<label for="InputNameFirst" class="col-sm-3 control-label">Personal Email</label>
				    			<div class="col-sm-7">
    							  <input type="text" id="mail-addr-edit" class="form-control hidden" value="email@example.com">
    							  <p id="mail-addr" class="form-control-static">email@example.com <a href="#" id="mail-addr-change">(change)</a></p>
    							</div>
				    		</div>
				    		<div>
				    		<div class="form-group ">
				    		  <label for="inputPassword" class="col-sm-3 control-label">Username</label>
  							  <div class="col-sm-7">
  							    <input type="text" class="form-control" id="inputUsername" placeholder="Username" value="orizayashutou">
  							  </div>
				    		</div>
				    		<div class="form-group ">
  							  <label for="inputPassword" class="col-sm-3 control-label">Password</label>
  							  <div class="col-sm-7">
  							    <input type="password" class="form-control" id="inputPassword" placeholder="Password" value="orizayashutou">
  							  </div>
  							</div>
				    	</form>
  				    </li>
  				    <li class="list-group-item">
  				    	<form>
  				    		<legend>Experience Level</legend>
				    		<div class="form-group ">
				    			<div class="row">
				    				<div id="rd-big-1" class="col-md-4">
				    					<input name="optionRadio" type="radio" id="rd-1" class="hidden">
				    					<center><h6><b>ENTRY LEVEL</b></h6></center>
				    					<p>Option one is this and that&mdash;be sure to include why it's great</p>
				    				</div>
				    				<div id="rd-big-2" class="col-md-4">
				    					<input name="optionRadio" type="radio" id="rd-2" class="hidden">
				    					<center><h6><b>INTERMEDIATE</b></h6></center>
				    					<p>Option one is this and that&mdash;be sure to include why it's great</p>
				    				</div>
				    				<div id="rd-big-3" class="col-md-4">
				    					<input name="optionRadio" type="radio" id="rd-3" class="hidden">
				    					<center><h6><b>EXPERT</b></h6></center>
				    					<p>Option one is this and that&mdash;be sure to include why it's great</p>
				    				</div>
				    			</div>
				    		</div>
				    	</form>
  				    </li>
  				    <li class="list-group-item">
  				    	<div>
  				    		<legend>
  				    			Kategori
  				    			<em>
  				    				<a href="#kategoriModal" data-toggle="modal" ata-whatever="kategori" class="lead  link">Add or edit</a>
  				    			</em>
  				    		</legend>
  				    	</div>
				    	<div class="form-group ">
				    	  <div class="row">
				    		<table class="table table-hover table-responsive col-lg-12" style="font-size:15px;">
				    			<thead>
				    				<th>Main Category</th>
				    				<th>Sub Categories</th>
					    		</thead>
					    		<tbody>
					    			<tr>
				    					<td>Web, Mobile & Software Development</td>
				    					<td>SHET, SHET, SHET, SHET, SHET, SHET, </td>
				    				</tr>
				    				<tr>
				    					<td>Design & Creative</td>
				    					<td>SHET, SHET, SHET, SHET, SHET, SHET, </td>
				    				</tr>
				    				<tr>
				    					<td>Writing</td>
				    					<td>SHET, SHET, SHET, SHET, SHET, SHET, </td>
						    		</tr>
						    	</tbody>
				    		</table>
				    	  </div>
				    	</div>
  				    </li>
  				  </ul>
				  <div class="panel-footer">
				  	<h4><a href="#" class="btn btn-primary "><b>Save Settings</b></a></h4>
				  </div>
				 </div>
			  	</div>
			  	<div role="tabpanel" class="tab-pane fade in active" id="details" aria-labelledby="detail-tab">
				 <div class="panel panel-default">
				  <div class="panel-heading">
				    <h1 class="panel-title">Contact Info</h1>
				  </div>
				  <ul class="list-group">
  				    <li class="list-group-item">
  				    	<form>
				    		<div class="form-group ">
				    			<legend>Nama Lengkap</legend>
				    			<div class="row">
				    				<div class="col-md-6 col-xs-6">
				    					<label for="InputNameFirst">Nama Depan</label>
    									<input type="text" class="form-control" id="InputNameFirst" placeholder="Nama Depan">
    								</div>
    								<div class="col-md-6 col-xs-6">
    									<label for="InputNameLast">Nama Belakang</label>
    									<input type="text" class="form-control" id="InputNameLast" placeholder="Nama Belakang">
    								</div>
    							</div>
				    		</div>
				    	</form>
  				    </li>
  				    <li class="list-group-item">
  				    	<form>
				    		<div class="form-group ">
				    			<legend>Alamat</legend>
				    			<div class="row">
				    				<div class="col-md-12">
				    					<label for="InputAddress">Alamat</label>
				    					<input type="text" class="form-control" id="InputAddress" placeholder="Alamat"><br/>
				    					<input type="text" class="form-control" id="InputAddress"><br/>
				    					<label for="InputCity">Kota</label>
				    					<input type="text" class="form-control" id="InputCity" placeholder="Kota"><br/>
				    				</div>
				    				<div class="col-md-6 col-xs-6">
				    					<label for="InputZipCode">Kode Pos</label>
    									<input type="text" class="form-control" id="InputZipCode" placeholder="Kode Pos">
				    				</div>
				    				<div class="col-md-6 col-xs-6">
				    					<label for="InputProvince">Provinsi</label>
    									<input type="text" class="form-control" id="InputProvince" placeholder="Provinsi"><br/>
				    				</div>
				    				<div class="col-md-12">
				    					<label for="InputCompany">Perusahaan</label>
				    					<input type="text" class="form-control" id="InputCompany" placeholder="Perusahaan"><br/>
				    				</div>
				    			</div>
				    		</div>
				    	</form>
  				    </li>
              <li class="list-group-item">
                <form>
                  <div class="form-group ">
                    <legend>Pembayaran</legend>
                    
                  </div>
                </form>
              </li>
  				  </ul>
				  <div class="panel-footer">
				  	<h4><a href="#" class="btn btn-primary "><b>Save Settings</b></a></h4>
				  </div>
				 </div>
				</div>
			  </div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="kategoriModal" tabindex="-1" role="dialog" aria-labelledby="KategoriModal">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="KategoriModal">Kategori mana Skill kamu??</h4>
	      </div>
	      <div class="modal-body">
	      	<p>Select categories that match your professional experience. Chosing carefully helps client find you in the marketplace</p>
	      	<div class="row">
	      		<div class="col-md-4">
	      		  <label><b>Accounting &amp; Consulting</b></label>
                    <form role="form">
            			<div class="form-group">
            			  <label class="checkbox" for="checkbox1">
            			    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox1">
            			    Accounting
            			  </label>
            			  <label class="checkbox" for="checkbox2">
            			    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox2">
            			    Financial Planning
            			  </label>
            			  <label class="checkbox" for="checkbox3">
            			    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox3">
            			    Human Resources
            			  </label>
            			  <label class="checkbox" for="checkbox4">
            			    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox4">
            			    Management Consulting
            			  </label>            
            			</div>
          			</form>
                  <label><b>Engineering &amp; Architecture</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox18">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox18">
                          3D Modelling and CAD
                        </label>
                        <label class="checkbox" for="checkbox19">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox19">
                          Architecture
                        </label>
                        <label class="checkbox" for="checkbox20">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox20">
                          Chemical Engineering
                        </label>
                        <label class="checkbox" for="checkbox21">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox21">
                          Civil and Structural Engineering
                        </label>
                        <label class="checkbox" for="checkbox22">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox22">
                          Contract Manufacturing
                        </label>
                        <label class="checkbox" for="checkbox23">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox23">
                          Electrical Engineering
                        </label>
                        <label class="checkbox" for="checkbox24">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox24">
                          Interior Design
                        </label>
                        <label class="checkbox" for="checkbox25">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox25">
                          Mechanical Engineering
                        </label>
                        <label class="checkbox" for="checkbox26">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox26">
                          Product Design
                        </label>
                      </div>
                    </form>
                  <label><b>Writing</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox45">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox45">
                          Academic Writing / Research
                        </label>
                        <label class="checkbox" for="checkbox46">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox46">
                          Article and Blog Writing
                        </label>
                        <label class="checkbox" for="checkbox47">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox47">
                          Copywriting
                        </label>
                        <label class="checkbox" for="checkbox48">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox48">
                          Creative Writing
                        </label>
                        <label class="checkbox" for="checkbox49">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox49">
                          Editing &amp; Proofreading
                        </label>
                        <label class="checkbox" for="checkbox50">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox50">
                          Grant Writing
                        </label>
                        <label class="checkbox" for="checkbox51">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox51">
                          Resumes and Cover Letters
                        </label>
                        <label class="checkbox" for="checkbox52">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox52">
                          Technical Writing
                        </label>
                        <label class="checkbox" for="checkbox53">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox53">
                          Web Content
                        </label>
                      </div>
                    </form>
	      		</div>
	      		<div class="col-md-4">
                    <label><b>Admin Support</b></label>
	      			<form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox5">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox5">
                          Data Entry
                        </label>
                        <label class="checkbox" for="checkbox6">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox6">
                          Personal / Virtual Assistant
                        </label>
                        <label class="checkbox" for="checkbox7">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox7">
                          Project Management
                        </label>
                        <label class="checkbox" for="checkbox8">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox8">
                          Transcription
                        </label>
                        <label class="checkbox" for="checkbox9">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox9">
                          Web Research
                        </label>              
                      </div>
                    </form>
                    <label><b>IT &amp; Networking</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox27">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox27">
                          Database Administrator
                        </label>
                        <label class="checkbox" for="checkbox28">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox28">
                          ERP / CRM Software
                        </label>
                        <label class="checkbox" for="checkbox29">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox29">
                          Information Security
                        </label>
                        <label class="checkbox" for="checkbox30">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox30">
                          Network &amp; System Administrator
                        </label>
                      </div>
                    </form>
                  <label><b>Sales &amp; Marketing</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox35">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox35">
                          Display Advertising
                        </label>
                        <label class="checkbox" for="checkbox36">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox36">
                          E-Mail &amp; Marketing Automation
                        </label>
                        <label class="checkbox" for="checkbox37">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox37">
                          Lead Generation
                        </label>
                        <label class="checkbox" for="checkbox38">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox38">
                          Market &amp; Customer Research
                        </label>
                        <label class="checkbox" for="checkbox39">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox39">
                          Marketing Strategy
                        </label>
                        <label class="checkbox" for="checkbox40">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox40">
                          Public Relations
                        </label>
                        <label class="checkbox" for="checkbox41">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox41">
                          Search Engine Marketing - SEM
                        </label>
                        <label class="checkbox" for="checkbox42">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox42">
                          Search Engine Optimization - SEO
                        </label>
                        <label class="checkbox" for="checkbox43">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox43">
                          Search Media Marketing - SMM
                        </label>
                        <label class="checkbox" for="checkbox44">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox44">
                          Telemarketing &amp; Telesales
                        </label>
                      </div>
                    </form>
	      		</div>
	      		<div class="col-md-4">
	      		  <label><b>Design &amp; Creative</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox10">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox10">
                          Animation
                        </label>
                        <label class="checkbox" for="checkbox11">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox11">
                          Audio Production
                        </label>
                        <label class="checkbox" for="checkbox12">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox12">
                          Graphic Design
                        </label>
                        <label class="checkbox" for="checkbox13">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox13">
                          Illustration
                        </label>
                        <label class="checkbox" for="checkbox14">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox14">
                          Logo Design &amp; Branding
                        </label>
                        <label class="checkbox" for="checkbox15">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox15">
                          Photography
                        </label>
                        <label class="checkbox" for="checkbox16">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox16">
                          Video Production
                        </label>
                        <label class="checkbox" for="checkbox17">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox17">
                          Voice Talent
                        </label>
                      </div>
                    </form>
                  <label><b>Translation</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox31">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox31">
                          General Translation
                        </label>
                        <label class="checkbox" for="checkbox32">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox32">
                          Legal Translation
                        </label>
                        <label class="checkbox" for="checkbox33">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox33">
                          Medical Translation
                        </label>
                        <label class="checkbox" for="checkbox34">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox34">
                          Technical Translation
                        </label>
                      </div>
                    </form>
                  <label><b>Web, Mobile &amp; Software Development</b></label>
                    <form role="form">
                      <div class="form-group">
                        <label class="checkbox" for="checkbox54">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox54">
                          Desktop Software Development
                        </label>
                        <label class="checkbox" for="checkbox55">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox55">
                          E-Commerce Development
                        </label>
                        <label class="checkbox" for="checkbox56">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox56">
                          Mobile Development
                        </label>
                        <label class="checkbox" for="checkbox57">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox57">
                          QA &amp; Testing
                        </label>
                        <label class="checkbox" for="checkbox58">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox58">
                          Scripts &amp; Utilities
                        </label>
                        <label class="checkbox" for="checkbox59">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox59">
                          Web Development
                        </label>
                        <label class="checkbox" for="checkbox60">
                          <input type="checkbox" data-toggle="checkbox" value="" id="checkbox60">
                          Web &amp; Mobile Design
                        </label>
                      </div>
                    </form>
	      		</div>
	      	</div>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary">Save Categories</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

	<script type="text/javascript">
	$('#sidePill a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	$('#sidePill a[href="#details"]').tab('show');
	$('#sidePill a[href="#profile"]').tab('show');
	</script>

	<script type="text/javascript">
		$('#mail-addr-change').on('click',function(e) {
			e.preventDefault();
			$('#mail-addr').addClass("hidden");
			$('#mail-addr-edit').removeClass("hidden");
		});
    	$('#kategoriModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('Kategori mana Skill kamu??')
		})
    </script>

    <script type="text/javascript">
    	$("#rd-big-1").on('click', function() {
    		$("#rd-1").prop("checked", true);
    		$("#rd-big-1").addClass("on");
    		$("#rd-big-2").removeClass("on");
    		$("#rd-big-3").removeClass("on");
    	})
    	$("#rd-big-2").on('click', function() {
    		$("#rd-2").prop("checked", true);
    		$("#rd-big-2").addClass("on");
    		$("#rd-big-1").removeClass("on");
    		$("#rd-big-3").removeClass("on");
    	})
    	$("#rd-big-3").on('click', function() {
    		$("#rd-3").prop("checked", true);
    		$("#rd-big-3").addClass("on");
    		$("#rd-big-2").removeClass("on");
    		$("#rd-big-1").removeClass("on");
    	})
    </script>
</body>
</html>