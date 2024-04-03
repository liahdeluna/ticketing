<?php
  session_start();
  if(!$_SESSION['AdminId']){
  header("Location: ..\..\login.php");
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
    <title>User Profiles</title>
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
                        <a class="nav-link" href="a64asd1a631ds84.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="12kjibas1315table.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Ticket List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-bag"></i>
                            <p>Ticket Archives</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ticketcreationforuser.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Create Ticket - User</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
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

                            $AdminID = mysqli_real_escape_string($conn,$_SESSION['AdminId']);
                            $sql =  "SELECT Admin_ID,Admin_Fname FROM admin WHERE Admin_ID = '$AdminID'";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                    echo '<a class="navbar-brand" href="#'.$row["Admin_Fname"].'">'.$row["Admin_Fname"]. '</a>';
                              }
                              }else{
                                        session_destroy();
                                        header("location:../../login.php");
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
                           <li class="nav-item dropdown">
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ADD NEW USER</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" class="form" action="asd654198ZXoi.php">
                                        <div class="row">
                                            <div class="col-md-3 px-2">
                                                <div class="form-group">
                                                    <label>User Type</label>
                                                    <Select type="text" class="form-control"  name="Utype" required>
                                                            <option value="Admin">ADMIN</option>
                                                            <option value="User">USER</option>
                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-2">
                                                <div class="form-group">
                                                    <label>Employee ID</label>
                                                    <input type="text" class="form-control" placeholder="EMP0001" name="EmpID" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-2">
                                                <div class="form-group">
                                                    <label>First name</label>
                                                    <input type="text" class="form-control" placeholder="Juanito" name="FName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 px2">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Dela Cruz" name="Lname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-2">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nickname</label>
                                                    <input type="text" class="form-control" placeholder="Juan" name="Nick" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-2">
                                                <div class="form-group">
                                                    <label>password</label>
                                                    <input type="password" class="form-control" placeholder="****" name="pass" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2 px-2">
                                                <div class="form-group">
                                                    <label>Number</label>
                                                    <input type="number" class="form-control" placeholder="09123456789" name="Mnumber" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-2">
                                                <div class="form-group">
                                                    <label>Department</label>
                                                    <input type="text" class="form-control" name="Dept" placeholder="ITS Department" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-2">
                                                <div class="form-group">
                                                    <label>Job title</label>
                                                    <input type="text" class="form-control" name="job" placeholder="Senior IT Support">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Create User</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                                include("../../connect/connect.php");
                                if(isset($_POST['submit'])){
                                        $Usertype = mysqli_real_escape_string($conn,$_POST["Utype"]);
                                        $EID =  mysqli_real_escape_string($conn,$_POST["EmpID"]);
                                        $FirstName = mysqli_real_escape_string($conn,$_POST["FName"]);
                                        $Lastname =  mysqli_real_escape_string($conn,$_POST["Lname"]);
                                        $Nickname = mysqli_real_escape_string($conn,$_POST["Nick"]);
                                        $Password =  mysqli_real_escape_string($conn,$_POST["pass"]);
                                        $Password = md5($Password);
                                        $Mobile = mysqli_real_escape_string($conn,$_POST["Mnumber"]);
                                        $Department =  mysqli_real_escape_string($conn,$_POST["Dept"]);
                                        $Jobdesc = mysqli_real_escape_string($conn,$_POST["job"]);

                                        $check_user = "SELECT User_ID FROM user WHERE BINARY User_ID = '$EID'";
                                        $run = mysqli_query($conn,$check_user);
                                              
                                            if(mysqli_num_rows($run)>0){
                                                        echo"<script>alert('EMPLOYEE ID IS ALREADY TAKEN!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($EID)){
                                                        echo "<script>alert('Employee ID should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#.\*&<>])/", $EID)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#\*.&<>])/", $FirstName)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($FirstName)){
                                                        echo "<script>alert('First name should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#.\*&<>])/", $Lastname)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($Lastname)){
                                                        echo "<script>alert('Lastname should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#\.*&<>])/", $Nickname)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($Nickname)){
                                                        echo "<script>alert('Nickname should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($Department)){
                                                        echo "<script>alert('Department should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#\*.&<>])/", $Department)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            elseif(ctype_space($Jobdesc)){
                                                        echo "<script>alert('Job Title should not be blank!')</script>";
                                                            die();
                                            }
                                            elseif(preg_match("/([%\$#\*.&<>])/", $Jobdesc)){
                                                        echo "<script>alert('No special characters!')</script>";
                                                            die();
                                            }
                                            else{
                                                    $sql = "INSERT INTO user (User_ID, user_Fname,User_Lname,User_MobileNum, User_Dept, User_JobDesc, User_Pass, User_Nickname, User_type) VALUES ('$EID','$FirstName','$Lastname','$Mobile','$Department','$Jobdesc','$Password','$Nickname','$Usertype')";
                                                            if($conn->query($sql) === TRUE){
                                                                if ($Usertype == "Admin") {
                                                                        $sql2 = "INSERT INTO admin_to_users (Admin_Id, User_Id) VALUES ('$AdminID', '$EID')";
                                                                    if($conn->query($sql2) === TRUE){
                                                                        echo"<script>alert('SUCCESFULLY CREATED NEW USER')</script>";
                                                                        echo "<script>window.open('asd654198ZXoi.php','_SELF')</script>";
                                                                    }
                                                                }else{
                                                                    echo"<script>alert('SUCCESFULLY CREATED NEW USER')</script>";
                                                                    echo "<script>window.open('asd654198ZXoi.php','_SELF')</script>";
                                                                }
                                                                
                                                            }
                                            }


                                                    
                                                  $conn->close();
                                }
                        ?> 
                        <?php include("usertables.php"); ?>

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
