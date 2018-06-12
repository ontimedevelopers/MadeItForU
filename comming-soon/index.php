<?php if (!defined('URL_BASE')) {  require '../config/config.php'; } ?>
<?php if (!defined('URL_BASE')) {  require '../config/autoload.php'; } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Made It For U</title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/manifest.json">
    <link rel="shortcut icon" href="<?php echo URL_BASE; ?>comming-soon/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="<?php echo URL_BASE; ?>comming-soon/images/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="<?php echo URL_BASE; ?>comming-soon/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="<?php echo URL_BASE; ?>comming-soon/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontawesome -->
    <script src="https://use.fontawesome.com/3db7fc1628.js"></script>

    
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>

    <!-- custom css -->
    <link href="<?php echo URL_BASE; ?>comming-soon/css/custom.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <?php  ?>


  <body>
    <div class="se-pre-con"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-logo-wrapper">
            <!-- <img src="images/avion_logo.png" alt="avion" title="Avion Template" class="img-responsive center-block" /> -->
            <h2 class="text-center">MADE IT FOR U</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <h1 class="text-center">We will be with something awesome for you!</h1>
        <h3 class="text-center">Never will be small presents</h3>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12">
          <div id="counter_wrapper">
            <div class="text-center" id="counter"></div>
          </div>
        </div>
      </div>

      <div class="text-center subscribe-form-wrapper">
        <form action="#" class="form-inline">
          <div class="form-group">
           <label for="subscriberName">name</label>
           <input type="text" name="subscriberName" class="center-block form-control" placeholder="name" />
          </div>

          <div class="form-group">
            <label for="subscriberEmail">email</label>
            <input type="email" name="subscriberEmail" class="center-block form-control form-subs-email" placeholder="email" />
          </div>

          <button type="submit" class="btn btn-default">Subscribe</button>
        </form>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="social-media-wrapper text-center">
          <!-- <a href="#"><i class="fa fa-pinterest"></i></a> -->
          <a href="#"><i class="fa fa-facebook-official"></i></a>
          <!-- <a href="#"><i class="fa fa-google-plus-official"></i></a> -->
          <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
		  <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center copyright">Copyright &copy; <?php echo date('Y'); ?> Design by <a target="_blank" style="color:#fff;" href="https://www.behance.net/glendragon">Glen Dragon</a></div> 
      </div>
    </div>
    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo URL_BASE; ?>comming-soon/js/bootstrap.min.js"></script>

    <!-- fit text -->
    <script type="text/javascript" src="<?php echo URL_BASE; ?>comming-soon/js/jquery.fittext.js"></script>

    <!-- jquery countdown -->
    <script type="text/javascript" src="<?php echo URL_BASE; ?>comming-soon/js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="<?php echo URL_BASE; ?>comming-soon/js/jquery.countdown.js"></script>

    <!--placeholder -->
    <script type="text/javascript" src="<?php echo URL_BASE; ?>comming-soon/js/jquery.placeholder.js"></script>

    <script type="text/javascript" src="<?php echo URL_BASE; ?>comming-soon/js/scripts.js"></script>
  </body>
</html>