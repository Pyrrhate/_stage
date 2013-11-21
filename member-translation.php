<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="copyright" content="tous droits réservés" >

  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/custom/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/custom/styles-responsive.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <title>member - Translation</title>
</head>
<body id="page-listing">
  <a class="sr-only" href="#content">Skip to main content</a>

  <?php require_once('includes/member-nav.php'); ?>
  <section class="section" id="member-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">  
          <?php require_once('includes/translation-document.php'); ?>
        </div>
        <div class="col-lg-6">
          <?php require_once('includes/avatar.php'); ?>
        </div>
      </div>
    </div>
  </section>
<!--   <div class="wrapper">
  <div class="content-main">...</div>
  <div class="content-secondary">...</div>
</div> -->

<?php require_once('includes/footer.php'); ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom/main.js"></script>

</body>
</html>