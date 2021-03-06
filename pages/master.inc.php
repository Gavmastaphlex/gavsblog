<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blog <?php if($page_title) echo "- ". $page_title ?></title>

    <meta name="description" content="<?php if($page_desc) echo $page_desc ?>">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gav's Blog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php if($page === "home"): ?>class="active" <?php endif; ?>><a href=".\">Home</a></li>
            <li <?php if($page === "blog"): ?>class="active" <?php endif; ?>><a href=".\?page=blog">Blog</a></li>
            <li <?php if($page === "about"): ?>class="active" <?php endif; ?>><a href=".\?page=about">About</a></li>
            <li <?php if($page === "contact"): ?>class="active" <?php endif; ?>><a href=".\?page=contact">Contact</a></li>
          </ul>

          <!-- Add login and register pages!! -->

          <?php if (! static::$auth->check()):  ?>

          <ul class="nav navbar-nav navbar-right">
            <li <?php if($page === "login"): ?>class="active" <?php endif; ?>><a href=".\?page=login">Login</a></li>
            <li <?php if($page === "register"): ?>class="active" <?php endif; ?>><a href=".\?page=register">Register</a></li>




          <?php else: ?>

            <li><?= static::$auth->user()->email; ?></li>
            <li><a href=".\?page=logout">Logout</a></li>


          <?php endif; ?>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- This is where we want our content to go -->

    <div class="container">
      <?php $this->content(); ?>
      
    </div>

    <footer>
      <p>&copy; Copyright <?php echo date("Y") ?></p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>