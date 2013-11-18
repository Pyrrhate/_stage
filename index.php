
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="copyright" content="tous droits réservés" >

  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom/main.css">

	<title>TEST BOOTSTRAP</title>
</head>
<body>
  <a class="sr-only" href="#content">Skip to main content</a>
	<?php require_once('includes/nav.php');?>
	<section id="home-header" class="home-page">
  	<div class="container">
  		<div class="jumbotron">
          <h1>Hello World !</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In explicabo neque ipsa itaque accusantium eaque molestiae sequi voluptates repellat quidem. Aliquam, eveniet, iure dolor tenetur vero modi nostrum veritatis possimus!</p>
          <h2><a class="btn btn-primary btn-warning btn-lg" href="#">S'inscrire</a></h2>
      </div>
  	</div>
  </section>
  <section class="navbar navbar-default home-page" id="clients-banner">
      <div class="container">
        <ul class="row">
          <li class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail partner">
              <img class="" data-src="holder.js/100%x180" alt="..." src="data/pictures/">
            </a>
          </li>
          <li class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail partner">
              <img class="" data-src="holder.js/100%x180" alt="..." src="data/pictures/">
            </a>
          </li>
          <li class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail partner">
              <img class="" data-src="holder.js/100%x180" alt="..." src="data/pictures/">
            </a>
          </li>
          <li class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail partner">
              <img class="" data-src="holder.js/100%x180" alt="..." src="data/pictures/">
            </a>
          </li>
        </ul>
      <div>
  </section>

  <section id="home-slide" class="home-page container">
      <div class="">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="data/pictures/01.jpg" alt="...">
        <div class="carousel-caption">
          <h3>Justine</h3>
          <small><cite title="Source Title">by Canva Guillaume</cite></small>
        </div>
      </div>
      <div class="item">
        <img src="data/pictures/02.jpg" alt="...">
        <div class="carousel-caption">
          <h3>Mushrooms</h3>
          <small><cite title="Source Title">by Canva Guillaume</cite></small>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
    </div>
  </section>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
	<script src="js/custom/main.js"></script>

</body>
</html>