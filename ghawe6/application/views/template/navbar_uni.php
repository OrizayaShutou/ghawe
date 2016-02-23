    <nav class="navbar navbar-inverse" role="navigation" style="border-radius: 0;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo site_url()?>">
            <img alt="Brand" src="<?php echo base_url("media")?>/img/ghaweLOGO.png" style="max-height: 150%;max-width: 150%; margin: -8px 0px;">
          </a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-3">
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
          <ul class="nav navbar-nav">
            <!-- <li><a href="#">Messages<span class="navbar-unread">1</span></a></li> -->
            <li><a href="<?php echo site_url("job")?>">Find Works</a></li>
            <li><a href="<?php echo site_url("job")?>">My Jobs</a></li>
           </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a class="navbar-brand" href="#">
                <img class="img-circle img-responsive" alt="Brand" src="<?php echo base_url("media")?>/img/user2-160x160.jpg" style="max-height: 150%;max-width: 150%; margin: -6px 0px;">
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Katou Megumi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url("profile")?>">My Profile</a></li>
                <li><a href="<?php echo site_url("profile/proposal")?>">My Proposals</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url("profile/edit")?>"><span class="visible-sm visible-xs">Settings<span class="fui-gear"></span></span><span class="visible-md visible-lg"><span class="fui-gear"></span></span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
