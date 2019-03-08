<?php
    require_once 'db.php';
    $acc->set_sess();
    $acc->persist();
    if (isset($_POST['username']))
        $acc->authenticate($_POST['username'], $_POST['pswrd']);
?>

<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/login.css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="assets/js/popper.min.js"></script>
<!-- ---- Include the above in your HEAD tag -------- -->

<div class="sidenav">
 <div class="login-main-text">
    <h2>Perigrinus<br>Accounting System</h2>
    <p>Login or register from here to access.</p>
 </div>
</div>
<div class="main">
 <div class="col-md-6 col-sm-12">
    <div class="login-form">
       <form method="post">
          <div class="form-group">
             <label>User Name</label>
             <input type="text" name="username" class="form-control" placeholder="User Name">
          </div>
          <div class="form-group">
             <label>Password</label>
             <input type="password" name="pswrd" class="form-control" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-black">Login</button>
          <button type="submit" class="btn btn-secondary">Register</button>
       </form>
    </div>
 </div>
</div>
