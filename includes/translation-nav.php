<nav class="navbar navbar-default navbar-fixed-top navbar-static-top" role="navigation" id="nav-main-member">
  <div id="navbar-main">
  <div class="container">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand  col-sm-3" href="index.php">Socitrad</a>
  
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
  <ul class="nav navbar-nav col-lg-8 col-sm-8">
    <li class="col-lg-8 col-sm-9 infos-project">
      <a href="#" class="pull-left col-lg-9 col-sm-9">
        <span class="col-lg-9 title-project">Titre du projet</span>
      </a>
      <a href="#" class="pull-left col-lg-3 col-sm-3 no-padding">
        <span class="text-right pull-left no-padding">FR > EN</span>
      </a>      
    </li>
    <li class="col-lg-2 col-sm-3 nb-segments no-padding" data-toggle="tooltip" title="nombre de segments traduits"><a href="#">240<i> / </i>600</a></li>
  </ul>
  <div id="next-empty-segment" class="visible-sm col-sm-2 no-padding"><a href="#next-seg"><i>Next</i><i class="fa fa-angle-down"></i></a></div>

  <ul class="nav navbar-nav navbar-right friends-avatars col-lg-4 col-sm-2 no-padding">
    <div class="pull-right nav navbar-nav">
      <li class="show-friends visible-sm">
        <a href="#">
          <i class="fa fa-angle-left"></i>
        </a> 
      </li>
      <li>
       <!-- data-toggle="modal" data-target="#collegue-modal" -->
       <a href="#"><img src="" alt"" class=""></a>
     </li>
     <li>
       <!-- data-toggle="modal" data-target="#collegue-modal" -->
       <a href="#"><img src="" alt"" class="hidden-sm hidden-xs"></a>
     </li>
     <li>
       <!-- data-toggle="modal" data-target="#collegue-modal" -->
       <a href="#"><img src="" alt"" class="offline hidden-sm hidden-xs"></a>
     </li>
     <li>
       <!-- data-toggle="modal" data-target="#collegue-modal" -->
       <a href="#"><img src="" alt"" class="offline hidden-sm hidden-xs"></a>
     </li>
     <li><a href="#" data-toggle="modal" data-target="#add-collegue-modal"><i class="fa fa-plus primary" data-toggle="tooltip" title="ajouter un collégue"></i></a></li>
   </div>
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
<?php require_once('includes/modal-collegue.php'); ?>  
<?php require_once('includes/modal-add-collegue.php'); ?>  


