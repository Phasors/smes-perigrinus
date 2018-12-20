<nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light nav-cst" id="footer">
    <div class="container-fluid">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav d-block mx-auto">

                <a href="announcement.php"><img src="img/announcement-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="grade.php"><img src="img/grade-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="schedule.php"><img src="img/sched-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="record.php"><img src="img/record-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="myprofile.php"><img src="img/profile-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="library.php"><img src="img/library-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="registrar.php"><img src="img/registration-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
                <a href="request.php"><img src="img/request-icon.png" class="icon-navbar-btm block-navbar-btm"></a>
            </ul>
        </div>
       <!--  <ul class="nav navbar-nav ml-auto">
            <li class="nav-item menu-right">
                <a href="#logout" class="btn btn-info btn-darkgreen-ctm">
                    <span>logout</span>
                </a>
                <a href="../main-student" class="btn btn-info btn-darkgreen-ctm">
                    <span>HOME</span>
                </a>
            </li>
        </ul> -->


        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item menu-right">
                <h4 style="color:white;"><?php echo $_SESSION['username']?></h4><br>
                <h6 style="color:white; margin-top: -30px; float: right;">2018-00000-MN-0</h6>
            </li>
        </ul>
    </div>
</nav>

<div class="home">
    <a href="../main-student" class="btn btn-success">
        <i class="fa fa-home"></i>
    </a>
</div>

<div class="logout">
    <a href="logout.php" class="btn btn-success">
        <i class="fa fa-sign-out"></i>
    </a>
</div>