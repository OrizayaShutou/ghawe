<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Details Proposal</title>

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
            <h1>Proposal Name</h1><br/>
              <div class="row">
                <div class="col-md-3">
                    <!-- Post Content -->
                    <div class="panel-none">
                        <div class="panel-body" style="margin-top:35px;">
                            <h4 style="font-style: italic; text-align: right;">Applied for job...</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <blockquote>
                        <h5><a href="<?php echo site_url("job/desc")?>">Project Zero</a></h5>
                        <p><b>Fixed Price - Est Budget: Rp. 10.000 - Posted 3 days ago</b></p>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                    </blockquote>
                </div>
              </div>
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4 class="lead">Cover Letter</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                        </li>
                        <li class="list-group-item">
                            <h4 class="lead">Attachment</h4>
                            <div class="row">
                                <div class="col-md-4" style="padding-bottom:15px;">
                                    <div class="ot-portfolio-item">
                                        <figure class="effect-bubba">
                                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
                                            <figcaption>
                                                <a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-bottom:15px;">
                                    <div class="ot-portfolio-item">
                                        <figure class="effect-bubba">
                                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
                                            <figcaption>
                                                <a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-bottom:15px;">
                                    <div class="ot-portfolio-item">
                                        <figure class="effect-bubba">
                                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-2.jpg" alt="img02" class="img-responsive" />
                                            <figcaption>
                                                <a href="#" data-toggle="modal" data-target="#Modal-1">View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
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
                        <h4 class="modal-title" id="Modal-label-1">Attachment</h4>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                        <br/>
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                        <br/>
                        <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                        <div class="modal-works"><span>Branding</span><span>Web Design</span></div>
                    </div>
                    <div class="modal-footer">
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