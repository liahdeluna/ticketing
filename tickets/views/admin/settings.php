<?php
  session_start();
  if(!$_SESSION['UserId']){
  header("Location: ../../userlogin.php");
  }

include("../../connect/connect.php");

    $UserIDs = mysqli_real_escape_string($conn,$_SESSION['UserId']);
    $select_post =  "SELECT User_type FROM user WHERE User_ID = '$UserIDs'";
    $run_posts = $conn->query($select_post);

    if ($run_posts->num_rows > 0) {
        while($row = $run_posts->fetch_assoc()){
            $post_Usertype = $row['User_type'];
            if($post_Usertype == "User"){
                header("location:../users/index.php");   
            }
        }
    }
?>
<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Settings</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../../assets/img/#">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Systems Plus College Foundation
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="userprofiles.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profiles</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ticket.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Create Ticket</p>
                        </a>
                    </li>
                    <li  class="nav-item active">
                        <a class="nav-link" href="settings.php">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <?php
                        include("../../connect/connect.php");            
                        $UserIDs = mysqli_real_escape_string($conn,$_SESSION['UserId']);
                        $select_post =  "SELECT User_Fname FROM user WHERE User_ID = '$UserIDs'";
                        $run_posts = $conn->query($select_post);

                            if ($run_posts->num_rows > 0) {
                                while($row = $run_posts->fetch_assoc()){
                                    $post_UserName = $row['User_Fname'];
                                    echo '<a class="navbar-brand" href=#'.$post_UserName.'>'.$post_UserName."</a></p>";
                                }
                            }   
                     ?>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                           <li class="form-control dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>   DROPDOWN AND ACCOUNT LINK -->
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content"><!-- Start of Content -->
                <div class="container-fluid">
                    <div class="row">
                            <!--Start of Change Password-->
                                <div id="Cpass" class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Change Password</h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" class="form" action="settings.php">
                                                <div class="row">
                                                    <div class="col-md-10 px-2">
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <input type="Password" class="form-control" placeholder="Old Password" name="Oldpass" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 px-2">
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <input type="Password" class="form-control" placeholder="New Password" name="pass1" required>
                                                        </div>
                                                    </div>
                                                </div>                <div class="row">
                                                    <div class="col-md-10 px-2">
                                                        <div class="form-group">
                                                            <label>Re-enter Password</label>
                                                            <input type="Password" class="form-control" placeholder="Re-enter Password" name="pass2" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Change Password</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        include("../../connect/connect.php");
                                        if(isset($_POST['submit'])){ 
                                            $Old =  md5(mysqli_real_escape_string($conn,$_POST["Oldpass"]));
                                            $New1 =  mysqli_real_escape_string($conn,$_POST["pass1"]);
                                            $New2 =  mysqli_real_escape_string($conn,$_POST["pass2"]);
                                            $Password = md5($New1);

                                            $select_post = "SELECT * FROM user WHERE User_Id = '$UserIDs'";
                                            $run_posts = $conn->query($select_post);
                                            if ($run_posts->num_rows > 0) {
                                                while($row = $run_posts->fetch_assoc()){
                                                    $post_Pass = $row['User_Pass'];
                                                    if ($post_Pass===$Old){
                                                        If($New1===$New2){
                                                            $sql = "UPDATE user SET User_Pass = '$Password' WHERE User_ID = '$UserIDs'";
                                                            if($conn->query($sql) === TRUE){
                                                                    echo"<script>alert('SUCCESFULLY CHANGED PASSWORD')</script>";
                                                                    echo "<script>window.open('settings.php','_SELF')</script>";
                                                             }
                                                        }
                                                        else
                                                        {
                                                            echo"<script>alert('Newly Entered Password Does not Match!')</script>";
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo"<script>alert('Incorrect Old Password')</script>";
                                                    }
                                                    }
                                            }
                                            else{
                                                               
                                            } 
                                        }   
                                ?>
                            <!--End of Change Password-->
                            <!--Start of Update Info-->
                            <!--End of Update Info-->
                        </div>
                    </div>
                </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">SPCF</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            </div>
        </div>
    </div>
   
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ --><!--  Notifications Plugin    -->
<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

</html>
