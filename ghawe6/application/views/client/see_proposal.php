<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Jobs</title>

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
                <div class="col-md-3">
                    <!-- Post Content -->
                    <div class="panel-none">
                        <div class="panel-body" style="margin-top:35px;">
                            <h4 style="font-style: italic; text-align: right;">Proposals for...</h4>
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
        <div class="row">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5><img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive"></h5>
                                </div>
                                <div class="col-md-10">
                                    <h5><a href="#hire" data-toggle="modal">Freelancer Name</a></h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5><img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive"></h5>
                                </div>
                                <div class="col-md-10">
                                    <h5><a href="#hire" data-toggle="modal">Freelancer Name</a></h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h5><img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive"></h5>
                                </div>
                                <div class="col-md-10">
                                    <h5><a href="#hire" data-toggle="modal">Freelancer Name</a></h5>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</small>
                                </div>
                            </div>
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
    </div>
    <!-- /.container -->

    <!-- Modal -->
    <div class="modal fade" id="hire" tabindex="-1" role="dialog" aria-labelledby="Hire">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="TitleModal">Hire this Freelancer?</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive">
                        </div>
                        <div class="col-sm-8">
                            <h6><b>Freelancer Name</b></h6>
                            <p>
                                <a href="#"><span class="label label-default">Translation</span></a>
                                <a href="#"><span class="label label-default">Web Design</span></a>
                                <a href="#"><span class="label label-default">Photoshop</span></a>
                                <a href="#"><span class="label label-default">Corel DRAW</span></a>
                            </p>
                            <!-- Cover Letter Proposalnya -->
                            <p>Lorom ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos istrerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="lead">Attachment</h6>
                            <!-- Kalo pas nge submit proposalnya disertai gambar masukkin disini -->
                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                            <br/>
                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                            <br/>
                            <img src="<?php echo base_url("media")?>/img/demo/portfolio-1.jpg" alt="img01" class="img-responsive" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p><b>Freelancer Bid :<i style="float: right; font-size: 3em;">$ 5.0</i></b></p>
                        </div>
                        <div class="col-sm-6">
                            <p><b>Payment Method</b></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" type="button" class="btn btn-primary btn-block">PayPal</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" type="button" class="btn btn-default btn-block">Rekening</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

    <script type="text/javascript">
        $('#hire').on('show.bs.modal', function (event) {
          var a = $(event.relatedTarget)
          var button = $(event.relatedTarget) // Button that triggered the modal
          //var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Hire this Freelancer?')
        })
    </script>

</body>

</html>
