<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job List</title>

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- ............................................................................................ -->


</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-md-9">
          	<div class="panel panel-default">
                <div class="panel-body">
                  <div class="row">
                  	<center>
                  		<div class="col-md-10 col-md-offset-1">
                  			<br/>
                  			<img src="<?php echo base_url("media")?>/img/CHOOSE.png" style="width:100%; margin-bottom:45px;">
                			<a href="<?php echo site_url("job/create")?>" type="button" class="btn btn-primary btn-lg" style="width:35%; margin-right:10px;">Mere Gawe</a>
                			atau
                			<a href="<?php echo site_url("client/browse")?>" type="button" class="btn btn-default btn-lg" style="width:35%; margin-left:10px;">Nyari nu dek Gawe</a>
                            <p style="margin-top:20px;"><b>Posting is Free!</p>
                		</div>
                	</center>
                  </div>
            	</div>
            </div>
            	<br/>
            	<h3 class="lead-bold">Posted Jobs</h3>
			         <div class="panel panel-default">
      				<ul class="list-group">
                        <li class="list-group-item">
                        	<h5><a href="<?php echo site_url("job/desc")?>">Project Zero</a></h5>
            				<p><b>Fixed Price - Est Budget: Rp. 10.000 - Posted 3 days ago</b></p>
            				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                        </li>
                        <li class="list-group-item">
                        	<h5><a href="<?php echo site_url("job/desc")?>">Project Zero</a></h5>
            				<p><b>Fixed Price - Est Budget: Rp. 10.000 - Posted 3 days ago</b></p>
            				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                        </li>
                        <li class="list-group-item">
                        	<h5><a href="<?php echo site_url("job/desc")?>">Project Zero</a></h5>
            				<p><b>Fixed Price - Est Budget: Rp. 10.000 - Posted 3 days ago</b></p>
            				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                        </li>
                        <li class="list-group-item">
                        	<h5><a href="<?php echo site_url("job/desc")?>">Project Zero</a></h5>
            				<p><b>Fixed Price - Est Budget: Rp. 10.000 - Posted 3 days ago</b></p>
            				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                        </li>
                    </ul>
                <div class="panel-body">
      				<!-- Pagination -->
      				<div class="row text-center">
      				    <div class="col-lg-12">
      				        <ul class="pagination">
      				            <li>
      				                <a href="#">&laquo;</a>
      				            </li>
      				            <li class="active">
      				                <a href="#">1</a>
      				            </li>
      				            <li>
      				                <a href="#">2</a>
      				            </li>
      				            <li>
      				                <a href="#">3</a>
      				            </li>
      				            <li>
      				                <a href="#">4</a>
      				            </li>
      				            <li>
      				                <a href="#">5</a>
      				            </li>
      				            <li>
      				                <a href="#">&raquo;</a>
      				            </li>
      				        </ul>
      				    </div>
      				</div>
      			</div>
    		</div>
    	  </div>

    	  <div class="col-md-3">
                <hr class="hidden-lg hidden-md">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

</body>
</html>