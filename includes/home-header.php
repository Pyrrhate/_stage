<section id="home-header" class="home-page margin-xl-top">
  <div class="container">
    <div class="jumbotron">
      <h1>Hello World !</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In explicabo neque ipsa itaque accusantium eaque molestiae sequi voluptates repellat quidem. Aliquam, eveniet, iure dolor tenetur vero modi nostrum veritatis possimus!</p>
      <h2><a class="btn btn-primary btn-warning btn-lg btn-inscription" href="#" data-toggle="modal" data-target="#inscription-modal">S'inscrire</a></h2>
    </div>
  </div>

  <!-- modal Inscription -->
  <div class="modal fade" id="inscription-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-title text-center" id="myModalLabel">Sign Up</h1>

        </div>
        <div class="modal-body">

          <form role="form" id="form-sign-up">
            <div class="form-group">
              <label for="name-sign-up">Name</label>
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="name-sign-up" placeholder="Enter name">
              </div>
            </div><!-- /.form-group -->
            <div class="form-group">
              <label for="email-sign-up">Email address</label>
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control" id="email-sign-up" placeholder="Enter email">
              </div>
            </div><!-- /.form-group -->
            <div class="form-group">
              <label for="password-sign-up">Password</label>
              <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                <input type="password" class="form-control" id="password-sign-up" placeholder="Enter password">
              </div>
            </div><!-- /.form-group -->
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg btn-block">Valider</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --> 

</section>