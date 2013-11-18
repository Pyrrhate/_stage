
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

  <section id="home-slide" class="home-page">
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
            <img src="data/pictures/01.png" alt="...">
            <div class="carousel-caption">
              <h3>picture 1</h3>
            </div>
          </div>
          <div class="item">
            <img src="data/pictures/02.png" alt="...">
            <div class="carousel-caption">
              <h3>picture 2</h3>
            </div>
          </div>
          <div class="item">
            <img src="data/pictures/03.png" alt="...">
            <div class="carousel-caption">
              <h3>picture 3</h3>
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
  </section>
  <section id="home-services">
    <div class="container">
      <div class="page-header text-center">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit !</p>
      </div>
        <div class="row">
          <div class="col-md-4">
            <div class="glyphicon glyphicon-globe"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, doloremque eaque possimus delectus dignissimos accusamus ipsam aut illo. Tenetur, odit deleniti minima velit aperiam ut obcaecati consectetur voluptatum beatae explicabo.</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glyphicon glyphicon-cog"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, quaerat perspiciatis incidunt recusandae architecto ut iusto totam excepturi laudantium. Deserunt, officiis blanditiis ea impedit asperiores laborum eveniet aliquid numquam perferendis.</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glyphicon glyphicon-pencil"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, ipsum qui molestiae voluptates hic tenetur laboriosam assumenda magni dolor id? Voluptates, quaerat atque saepe pariatur tempore ipsam eveniet obcaecati blanditiis?</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="glyphicon glyphicon-file"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, reiciendis, nobis vel nesciunt praesentium voluptatem recusandae sint possimus ex amet consectetur quidem exercitationem labore blanditiis iste maiores rerum minus doloremque.</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glyphicon glyphicon-folder-open"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, corrupti eligendi ea iste nulla placeat aperiam maxime. Quisquam, cumque error est amet recusandae neque harum distinctio laudantium. Nesciunt, optio, quasi.</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="glyphicon glyphicon-briefcase"></div>
            <div class="caption">
              <h3>Lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, ipsa, at repellat ducimus officiis omnis consectetur ea nesciunt alias inventore eaque quibusdam nostrum tenetur nam provident voluptatibus sequi ratione atque.</p>
              <p>
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-body text-center">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </div>
      </div>
  </section>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
	<script src="js/custom/main.js"></script>

</body>
</html>