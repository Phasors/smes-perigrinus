  <nav class="navbar navbar-expand-md navbar-light bd-light" id="topbar-home"> 
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> 
        <img src="../img/logo-site.png" id="logo">

      </a>     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../student-iapply/admission.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Faculty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about/about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact Us</a>
          </li>
        <ul class="navbar-nav  ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="login">
      <div class="modal-dialog modal-dialog-centered"">
        <div class="modal-content">
          <div class="modal-header">
            <img src="../img/logo-site.png" width="80px" height="80px" >
            <h2 class="modal-title">LOGIN</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="row">
                <div class="col-sm-12">
                  <input type="text" name="" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <input type="password" name="" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <input type="submit" name="" class="btn btn-outline-light d-block mx-auto">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!--------------------
    MODAL CONTACT US 
    --------------------->
    <div class="modal fade" id="contact">
      <div class="modal-dialog modal-dialog-centered"">
        <div class="modal-content">
          <div class="modal-header">
            <img src="../img/logo-site.png" width="80px" height="80px" >
            <h2 class="modal-title">Contact Us</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <h4 style="color:white; text-align: center;">Keep in Touch</h4>
              <div class="col-md-3 mb-md-0 mb-3">
                <i class="fa fa-facebook-official"></i>
                <i class="fa fa-twitter-square"></i>
                <i class="fa fa-instagram"></i>
              <br><br>
              <h4 style="color:white;">Contact</h4>
              <br>
              <p style="color:white;">Phone:</p>
              <p style="color:white;">Email:</p>
            </div>
          </div>
        </div>
      </div>
    </div>