<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Proposal</title>

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

        <div class="row row-0-gutter">
            <div class="col-md-12">
                <h1>My Proposal</h1>
                <br/>
                <div class="row row-0-gutter">
                <!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Dean & Letter</h2>
								<p>Branding, Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Startup Framework</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Lamp & Velvet</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-3">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
			</div>
			<div class="row row-0-gutter">
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Smart Name</h2>
								<p>Branding, Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-4">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Fast People</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-5">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- end portfolio item -->
				<!-- start portfolio item -->
				<div class="col-md-4 col-0-gutter">
					<div class="ot-portfolio-item">
						<figure class="effect-bubba">
							<img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
							<figcaption>
								<h2>Kites & Stars</h2>
								<p>Branding, Web Design</p>
								<a href="#" data-toggle="modal" data-target="#Modal-2">View more</a>
							</figcaption>
						</figure>
					</div>
				</div>
            </div>
        </div>
    </div>

    <!-- Modal for portfolio item 1 -->
        <div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="Modal-label-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="Modal-label-1">Dean & Letter</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url("profile/details")?>" type="button" class="btn btn-primary">See Proposal</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for portfolio item 2 -->
        <div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="Modal-label-2">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="Modal-label-2">Startup Framework</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url("profile/details")?>" type="button" class="btn btn-primary">See Proposal</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for portfolio item 3 -->
        <div class="modal fade" id="Modal-3" tabindex="-1" role="dialog" aria-labelledby="Modal-label-3">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="Modal-label-3">Lamp & Velvet</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-3.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url("profile/details")?>" type="button" class="btn btn-primary">See Proposal</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for portfolio item 4 -->
        <div class="modal fade" id="Modal-4" tabindex="-1" role="dialog" aria-labelledby="Modal-label-4">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="Modal-label-4">Smart Name</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-4.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url("profile/details")?>" type="button" class="btn btn-primary">See Proposal</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for portfolio item 5 -->
        <div class="modal fade" id="Modal-5" tabindex="-1" role="dialog" aria-labelledby="Modal-label-5">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="Modal-label-5">Fast People</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-5.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo site_url("profile/details")?>" type="button" class="btn btn-primary">See Proposal</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js2/owl.carousel.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js2/cbpAnimatedHeader.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js2/jquery.appear.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js2/SmoothScroll.min.js"></script>
    <script src="<?php echo base_url("media")?>/dist/js2/mooz.themes.scripts.js"></script>

</body>
</html>