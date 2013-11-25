<nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation" id="nav-main-member">
  <div class="container">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="index.php">Socitrad</a>
  
  <div id="nav-main-items">
    <div class="collapse navbar-collapse" id="nav-main">
      <!-- Split button -->
      <div class="btn-group navbar-btn navbar-right col-lg-2">
        <div class="dropdown-toggle" data-toggle="dropdown">
          <button type="button" class="btn btn-default btn-block drop-item">
            <div class="col-lg-10"><i class="fa fa-cog"></i><span>Membre</span></div>
            <div class="col-lg-2 no-padding-left">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </div>
          </button>
        </div>
        <ul class="dropdown-menu" role="menu">
          <li class="drop-item"><a href="#"><i class="fa fa-user"></i><span>Profil</span></a></li>
          <li class="divider"></li>
          <li data-toggle="modal" data-target="#signout-modal"><a href="#">Se déconnecter</a></li>
        </ul>
      </div>
      <!-- Search bar -->
      <form class="navbar-form navbar-right col-xs-9" role="search">
        <div class="form-group">
          <label for="search" class="sr-only">Search bar</label>
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Ok</button>
      </form>
      <!-- / search bar -->
    </div>
  </div>
    <!-- <form class="navbar-form navbar-right" role="search">
      <div class="form-group navbar-left" >
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <span class="input-group-btn navbar-left">
        <button type="submit" class="btn btn-default">Ok</button>
      </span>
    </form> -->
  </div>



  <nav class="navbar navbar-default navbar-inverse row no-margin" role="navigation" id="nav-subnav-member">
    <!-- Brand and toggle get grouped for better mobile display -->
 <!--  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
 </div> -->

 <!--  <div class="col-lg-3">
   <ul class="nav navbar-nav">
     <li class="active"><a href="#">Link</a></li>
     <li><a href="#">Link</a></li>
   </ul>
 </div>/.navbar-collapse -->
 <div class="col-lg-8 col-lg-offset-2">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#"><span class="col-lg-10">Titre du projet</span><span class="col-lg-2"><i class="fa fa-cog"></i></span></a></li>
    <!-- <li><a href="#"><span class="col-lg-10">FR</span></i><span class="col-lg-2"><i class="fa fa-cog"></i><span>EN</span></a></li> -->
    <li><a href="#">240<i> / </i>600</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right friends-avatars">
    <li>
      <div></div>
      <a href="#"><img src="" alt"" class=""></a>
    </li>
    <li>
      <a href="#"><img src="" alt"" class=""></a>
    </li>
    <li>
      <a href="#"><img src="" alt"" class="offline"></a>
    </li>
    <li>
      <a href="#"><img src="" alt"" class="offline"></a>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
  <!-- <div class="col-lg-3">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
    </ul>
  </div>/.navbar-collapse -->
</nav>

</nav>
<?php require_once('includes/modal-sign-in.php'); ?>  


