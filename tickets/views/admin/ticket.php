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
    <title>Ticket Creation</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="nc-icon nc-notes"></i>
                            <p>Create Ticket</p>
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
                                    <h4 class="card-title">Ticket Form</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" class="form" action="ticket.php">
                                        <div class="row">
                                            <div class="col-md-5 pr-3">
                                                <div class="form-group">
                                                    <label>Ticket Subject</label>
                                                    <Select type="text" class="form-control"  name="TSubj" onchange=setType(this) required>
                                                        <option value="Printer Problem">Printer Problem</option>
                                                        <option value="No WiFi Connection">No WiFi Connection</option>
                                                        <option value="Internet Installation">Internet Installation</option>
                                                        <option value="Internet Connection Problem">Internet Connection Problem</option>
                                                        <option value="Update Drivers">Update Drivers</option>
                                                        <option value="Mouse Not Working">Mouse Not Working</option>
                                                        <option value="Keyboard Not Working">Keyboard Not Working</option>
                                                        <option value="Monitor Not Working">Monitor Not Working</option>
                                                        <option value="PC Relocation">PC Relocation</option>
                                                        <option value="Power Source Problem">Power Source Problem</option>
                                                        <option value="Others">Others</option>
                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Concern Type</label>
                                                    <input readonly type="text" class="form-control" value="Hardware Concern" name="Concern" id="tConcern" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Ticket Priority</label>
                                                    <input readonly type="text" class="form-control" value="Medium Priority" name="Tprio" id="tPrio" required>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                                function setType(selectObject) {
                                                    var selectedSubj = selectObject.selectedIndex;
                                                    if (selectedSubj == 0) {document.getElementById("tConcern").setAttribute('value','Hardware Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 1) {document.getElementById("tConcern").setAttribute('value','Network Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 2) {document.getElementById("tConcern").setAttribute('value','Network Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','High Priority');
                                                    }
                                                    if (selectedSubj == 3) {document.getElementById("tConcern").setAttribute('value','Network Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 4) {document.getElementById("tConcern").setAttribute('value','Software Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 5) {document.getElementById("tConcern").setAttribute('value','Hardware Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Low Priority');
                                                    }
                                                    if (selectedSubj == 6) {document.getElementById("tConcern").setAttribute('value','Hardware Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Low Priority');
                                                    }
                                                    if (selectedSubj == 7) {document.getElementById("tConcern").setAttribute('value','Hardware Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 8) {document.getElementById("tConcern").setAttribute('value','Others'); 
                                                        document.getElementById("tPrio").setAttribute('value','High Priority');
                                                    }
                                                    if (selectedSubj == 9) {document.getElementById("tConcern").setAttribute('value','Hardware Concern'); 
                                                        document.getElementById("tPrio").setAttribute('value','Medium Priority');
                                                    }
                                                    if (selectedSubj == 10) {document.getElementById("tConcern").setAttribute('value','Others'); 
                                                        document.getElementById("tPrio").setAttribute('value','Low Priority');
                                                    }
                                                }
                                        </script>
                                        <div class="row">
                                            <div class="col-md-11 px-2">
                                                <div class="form-group">
                                                    <label>Remarks</label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Place your remarks here" name="Remarks" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 pr-2">
                                                <div class="form-group">
                                                    <label>Requestor</label>
                                                    <?php echo '<input type="text" class="form-control" disabled placeholder="Employee: '.$UserIDs.' - '.$post_UserName.'" name="UName" required>'?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Submit Ticket</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php include("tickettable.php"); ?>
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


<?php
        include("../../connect/connect.php");
        if(isset($_POST['submit'])){
                $Subj =  mysqli_real_escape_string($conn,$_POST["TSubj"]);
                $TConcern = mysqli_real_escape_string($conn,$_POST["Concern"]);
                $Priority =  mysqli_real_escape_string($conn,$_POST["Tprio"]);
                $Remarks = mysqli_real_escape_string($conn,$_POST["Remarks"]);
                $Ticket_Stats = "Pending";

                  $sql = "INSERT INTO tickets (Ticket_Number, Ticket_Subj, Ticket_type, Ticket_Remarks, Ticket_Priority, Ticket_Status, User_Id) VALUES (NULL,'$Subj','$TConcern','$Remarks','$Priority', '$Ticket_Stats', '$UserIDs')";
                if($conn->query($sql) === TRUE){
                                echo "<script>alert('SUCCESSFULLY SUBMITED TICKET')</script>";
                                echo "<script>window.open('ticket.php','_self')</script>";
                            }
                            else
                            {
                                echo "<script>alert('ERROR')</script>";
                            }

                            $conn->close();
                  }
        
?> 