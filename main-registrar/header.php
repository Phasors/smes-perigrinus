<?php include 'db.php' ?>
<?php include 'session.php' ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="img/logo-site.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Perigrinus School</title>

    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="components/style.css">
</head>

<body>

    <div class="wrapper">

        <!-- MAIN SIDEBAR -->
        <?php include 'components/sidebar.php'; ?>

        <!-- Page Content  -->
        <div id="content">

            <!-- TOPBAR -->
            <?php include 'components/topbar.php'; ?>