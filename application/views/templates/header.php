<html>
        <head>
                <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
                <title>Jims PHP Site</title>
                <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url('/index.php/Home'); ?>">Jim Clark</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">        
        <li><a href="<?php echo base_url('/index.php/news'); ?>">News</a></li>
        <li><a href="<?php echo base_url('/index.php/About'); ?>">About</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </head>
        <body>

                <h2><?php echo $title ?></h2>