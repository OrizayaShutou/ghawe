<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url()?>">
        <img class="nav-brand" alt="Brand" src="<?php echo base_url("media")?>/img/ghaweLOGO.png">
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-3">
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-3">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <p>Already have a Ghawe! account? <br/>
          <a type="button" style="cursor:pointer;" rel="popover" active><span class="fui-exit"></span> Log in</a></p>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
  <!-- <div id="popover-content" style="display: none;">
    <form id="mainForm" name="mainForm" method="post" action="" style="margin:0;">
      <div class="login-form">
          <div class="form-group">
            <input type="text" class="form-control login-field" value="" placeholder="Username/Email" id="login-name" />
            <label class="login-field-icon fui-mail" for="login-name"></label>
          </div>
          <div class="form-group">
            <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
            <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
          <a class="btn btn-primary btn-lg btn-block" href="#">Log in</a>
          <a class="login-link" href="#">Forgot your fucking password?</a>
        </div>
    </form>
  </div> -->
</nav>

<script type="text/javascript">
// $('a[rel=popover]').popover({
//   html: true,
//   placement: 'right',
//   content: function() {
//     return $('#popover-content').html();
//   }
// });
</script>