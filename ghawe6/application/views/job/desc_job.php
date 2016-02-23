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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <h1>Project Zero</h1>
                <p class="lead">
                    by <a href="#">Client Name</a>
                </p>

                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>
                
                <!-- Post Content -->
                <div class="panel panel-default">
                    <div class="panel-body">
                    <h3 class="lead">Detail</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4 class="lead">Client Activity on this Job</h4>
                            <!-- Kalau ini CLIENT nantinya redirect ke page "Lihat Proposal" -->
                            <a href="<?php echo site_url("client/proposals")?>">Proposals: 14</a>
                            <!-- Kalau ini FREELANCER ya link nya gabisa di klik -->
                            <p>Proposals: 14</p>
                            <p>Interviewing: 1</p>
                        </li>
                    </ul>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>
                            <a role="button" id="trigger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <span class="fui-triangle-down" id="ups" aria-hidden="true"></span> Proposals
                            </a>
                        </h4>
                        <div class="collapse" id="collapseExample">
                            <table class="table">
                                <thead>
                                    <th>Freelancer</th>
                                    <th>Proposal Date</th>
                                    <th>Initiated by</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Muraji</td>
                                        <td>9 days Ago</td>
                                        <td>Freelancer</td>
                                    </tr>
                                    <tr>
                                        <td>Khalifiza</td>
                                        <td>5 days Ago</td>
                                        <td>Freelancer</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="lead">Similar Jobs</h3>
                        <dl>
                            <dt><a href="#">WEB AND MOBILE DEVELOPMENT</a></dt>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                        </dl>
                        <dl>
                            <dt><a href="#">iOS Programmer Needed</a></dt>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                        </dl>
                        <dl>
                            <dt><a href="#">Translate Light Novel to English</a></dt>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                        </dl>
                    </div>
                </div>
            </div>


            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">
                <hr class="hidden-lg hidden-md">
                <div class="side-well" style="margin-right: 20px; margin-left: 20px;">
                    <div class="row" style="margin-top:20px;">
                        <a href="<?php echo site_url("job/proposal")?>" class="btn btn-embossed btn-primary btn-hg btn-block">Submit a Proposal</a>
                        <button type="button" class="btn btn-default btn-hg btn-block">Save to List</button>
                    </div>
                <hr>
                    <div class="row">
                        <h4>About the Client</h4>
                        <p>Client Name</p>
                    </div>
                    <div class="row">
                        <h4>1 Job Posted</h4>
                        <p>0% Hire Rate, 1 Open Job</p>
                    </div>
                    <div class="row">
                        <h4>Bandung</h4>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url("media")?>/dist/js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("media")?>/dist/js/flat-ui.min.js"></script>

    <script src="<?php echo base_url("media")?>/dist/js/application.js"></script>

    <script type="text/javascript">
    var bool = false;
    $("#trigger").on("click", function(){ 
        if (bool) {
            $("#ups").addClass("fui-triangle-down");
            $("#ups").removeClass("fui-triangle-up");    
        } else {
            $("#ups").removeClass("fui-triangle-down");
            $("#ups").addClass("fui-triangle-up");
        };
        bool = !bool;
    });
    </script>

</body>

</html>
