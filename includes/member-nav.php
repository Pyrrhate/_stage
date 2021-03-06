<nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation" id="nav-main-member">
  <div class="container">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand col-sm-3" href="index.php">Socitrad</a>
  
  <div id="nav-main-items">
    <div class="collapse navbar-collapse" id="nav-main">
      <!-- Split button -->
      <div class="btn-group navbar-btn navbar-right col-lg-2 col-sm-3">
        <div class="dropdown-toggle" data-toggle="dropdown">
          <button type="button" class="btn btn-default btn-block drop-item">
            <div class="col-lg-10 col-sm-10"><i class="fa fa-cog"></i><span>Membre</span></div>
            <div class="col-lg-2 col-sm-1 no-padding-left">
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
      <form class="navbar-form navbar-right col-xs-9 col-sm-6" role="search">
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

</nav>
<?php require_once('includes/modal-sign-in.php'); ?>	