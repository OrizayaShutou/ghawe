<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer List</title>

<!-- .............................................CSS............................................ -->

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url("media")?>/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url("media")?>/dist/css/flat-ui.css" rel="stylesheet">

    <link rel="icon" href="<?=base_url()?>/gwe.ico" type="image/ico">

    <style type="text/css">
        .profile {
            max-width: 100%;
        }
    </style>

<!-- ............................................................................................ -->

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-4">
                <h4>Temukan Freelancers-mu!</h4>
            </div>
            <div class="col-lg-8" style="margin-top:10px;">
                <div class="input-group">
                  <span class="input-group-addon fui-search"></span>
                  <input type="text" class="form-control" placeholder="Search for Freelancers">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Search</button>
                  </span>
                </div>
            </div>
        </div>
        <div class="row">
        <br/>
          <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-md-4">
                          <select name="category" class="form-control" id="category">
                              <option>Any category</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select name="jobsuccess" class="form-control" id="jobsuccess">
                              <option>Any job success</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select name="hourly" class="form-control" id="hourly">
                              <option>Any hourly rate</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                              <option value="new">. . .</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>
                                    <img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive">
                                    </h3>
                                    <a href="#hire" class="btn btn-primary btn-block">Hire</a>
                                </div>
                                <div class="col-md-10">
                                    <p><b><h3><a href="#">Freelancer Name</a></h3></b></p>
                                    <h4 style="margin-top: 2px;">Freelancer TITLE - Bandung, Indonesia</h4>
                                    <p>
                                        <a href="#"><span class="label label-default">Translation</span></a>
                                        <a href="#"><span class="label label-default">Web Design</span></a>
                                        <a href="#"><span class="label label-default">Photoshop</span></a>
                                        <a href="#"><span class="label label-default">Corel DRAW</span></a>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste (...)</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>
                                    <img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive">
                                    </h3>
                                    <button class="btn btn-primary btn-block">Hire</button>
                                </div>
                                <div class="col-md-10">
                                    <p><b><h3><a href="#">Freelancer Name</a></h3></b></p>
                                    <h4 style="margin-top: 2px;">Freelancer TITLE - Bandung, Indonesia</h4>
                                    <p>
                                        <a href="#"><span class="label label-default">Translation</span></a>
                                        <a href="#"><span class="label label-default">Web Design</span></a>
                                        <a href="#"><span class="label label-default">Photoshop</span></a>
                                        <a href="#"><span class="label label-default">Corel DRAW</span></a>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste (...)</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3>
                                    <img src="<?php echo base_url("media")?>/img/user2-160x160.jpg" class="img-circle img-responsive">
                                    </h3>
                                    <button class="btn btn-primary btn-block">Hire</button>
                                </div>
                                <div class="col-md-10">
                                    <p><b><h3><a href="#">Freelancer Name</a></h3></b></p>
                                    <h4 style="margin-top: 2px;">Freelancer TITLE - Bandung, Indonesia</h4>
                                    <p>
                                        <a href="#"><span class="label label-default">Translation</span></a>
                                        <a href="#"><span class="label label-default">Web Design</span></a>
                                        <a href="#"><span class="label label-default">Photoshop</span></a>
                                        <a href="#"><span class="label label-default">Corel DRAW</span></a>
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste (...)</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
          </div>
        </div>

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
                    <div class="modal-body">
                        <form>
                            <legend>Send a Message!</legend>
                            <div class="form-group">
                              <input type="text" class="form-control" id="msg-title" placeholder="Title" value="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="messsage" placeholder="Write your message . . ." value="msg"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Send</button>
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
