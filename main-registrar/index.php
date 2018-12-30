<?php
if(!isset($_SESSION)){
    session_start();
}
include("db.php");
if(!isset($_SESSION['error'])){
    $_SESSION['error'] = "";
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pword = mysqli_real_escape_string($conn, $_POST['pword']); 

    $sql = "SELECT * FROM users WHERE username = '$username' AND pswrd = '$pword' AND active=0 ";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_array($result)){
        if( $row['type']== "1"){
            $_SESSION['username'] = $row['username'];
            header("location: index-main.php");
        }
        else{
            $_SESSION['error'] = "Restricted Site";
        }               
    }
    else{
        $_SESSION['error'] = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="../img/logo-site.png">
    <title>Login Student - Perigrinus School</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../components/style.css">
    <link rel="stylesheet" href="../main.css">
</head>
<body>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 form-box" >
            <div class="form-bottom">
                <form action="" method="post">
                    <div class="form-label-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-label-group">
                        <label for="pword">Password</label>
                        <input type="password" name="pword" placeholder="Password" class="form-control" required>
                    </div>
                    <center>
                        <input type="submit" class="btn btn-success" value= "Login" style="width:50%;" >
                    </center>
                </form>
                <center>
                    <div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
                </center>
            </div>
        </div>
    </div>
</body>

</html>