
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
	<meta name="copyright" content="tous droits réservés" >

  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom/main.css">

	<title>TEST BOOTSTRAP</title>
</head>
<body>
  <a class="sr-only" href="#content">Skip to main content</a>

	<?php require_once('includes/nav.php');?>

	<section id="home-header" class="home-page margin-xl-top">
  	<div class="container">
  		<div class="jumbotron">
          <h1>Hello World !</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In explicabo neque ipsa itaque accusantium eaque molestiae sequi voluptates repellat quidem. Aliquam, eveniet, iure dolor tenetur vero modi nostrum veritatis possimus!</p>
          <h2><a class="btn btn-primary btn-warning btn-lg btn-inscription" href="#">S'inscrire</a></h2>
      </div>
  	</div>
  </section>

  <?php require_once('includes/home-clients-banner.php'); ?>
  <?php require_once('includes/home-slide.php'); ?>
  <?php require_once('includes/home-services.php'); ?>

  <section class="margin-xs-bottom">
    
  </section>

  <?php require_once('includes/footer.php'); ?>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
	<script src="js/custom/main.js"></script>

</body>
</html>