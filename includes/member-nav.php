<nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation" id="nav-main-member">
  <div class="container">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main-items">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Socitrad</a>
  
  <!-- Split button -->
  <div class="btn-group navbar-btn margin-xs-left navbar-right  col-lg-4">
    <button type="button" class="btn btn-default drop-item col-lg-4"><i class="fa fa-cog"></i><span>Member</span></button>
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li class="drop-item"><a href="#"><i class="fa fa-cog"></i><span>Profil</span></a></li>
      <li class="divider"></li>
      <li data-toggle="modal" data-target="#signout-modal"><a href="#">Sign Out</a></li>
    </ul>
  </div>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group navbar-left" >
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <span class="input-group-btn navbar-left">
        <button type="submit" class="btn btn-default">Ok</button>
      </span>
    </form>
</div>
</nav>
<?php require_once('includes/modal-sign-in.php'); ?>	