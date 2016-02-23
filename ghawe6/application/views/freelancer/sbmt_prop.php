<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Job Description</title>

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

<!-- ............................................................................................ -->

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h1>Submit a Proposal</h1>
			
			<br/>

			<dl class="dl-horizontal">
				<dt>Job Posting</dt><br class="hidden-lg hidden-md">
				<dd>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
				</dd>
				<dt>Propose Terms</dt><br class="hidden-lg hidden-md">
				<dd>
					<div class="well form-group" style="max-width: 280px;">
						<table border="0">
							<tr>
								<td style="max-width: 150px; padding-right: 40px;">Billing rate this is what the client sees</td>
								<td>$ <input type="number" style="max-width: 50px; text-align: right;"></input> /hr</td>
							</tr>
						</table>
						<!-- <br/>
						<table border="0">
							<tr>
								<td style="max-width: 150px; padding-right: 40px;">You'll earn estimated</td>
								<td>$ <input type="number" style="max-width: 50px; text-align: right;"></input> /hr</td>
							</tr>
						</table> -->
					</div>
				</dd>
				<dt>Cover Letter</dt><br class="hidden-lg hidden-md">
				<dd>
					<div class="form-group">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</dd>
				<dt>
					Attachment<br/>
					<small>(optional)</small>
				</dt><br class="hidden-lg hidden-md">
				<dd>
					<div class="form-group">
						<input type="file" id="exampleInputFile">
    					<p class="help-block">File size should be less than 5MB. Include work samples or other documents to support your application.</p>
    				</div>
				</dd>
				<dt></dt>
				<dd>
					<button type="button" class="btn btn-primary">Accept and Submit a Proposal</button>
					<button type="button" class="btn btn-link">Cancel</button>
				</dd>
			</dl>

    		</div>
    	</div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url("media")?>/dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url("media")?>/dist/js/bootstrap.min.js"></script>

</body>
</html>