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
    <title>Ticket Number :  <?php 
                                include("../../connect/connect.php");
                                $TicketNum = $_GET['TicketNumber'];
                                echo $TicketNum;

                                $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                $run_posts = $conn->query($select_post);

                                if ($run_posts->num_rows > 0) {
                                    while($row = $run_posts->fetch_assoc()){
                                            $post_Num = $row ['Ticket_Number'];
                                            $post_Subj = $row ['Ticket_Subj'];
                                            $post_Type = $row['Ticket_type'];
                                            $post_Remarks = $row['Ticket_Remarks'];
                                            $post_Prio = $row['Ticket_Priority'];
                                            $post_Id = $row['User_Id'];

                                    }
                                }
                            ?>
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />

    <style>
  /* Styles for the footer */
  footer {
    position: fixed; /* or 'absolute' if you want it relative to the container */
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: black;
    text-align: center;
    padding: -10px 0;
  }

  /* Styles for the content area (optional) */
  .content {
    /* Add padding-bottom equal to footer height */
    padding-bottom: 60px; /* Adjust this value based on your footer height */
  }
</style>
</head>


<body Style = "background-color=darkgreen;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php" style="color:red">Return</a>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content"><!-- Start of Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="margin-top: 1%;">
                                <div class="card-header">
                                    <h4 class="card-title">Ticket Number : <?php echo $TicketNum; ?></h4>
                                </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 pr-3">
                                                <div class="form-group">
                                                    <label><h4>Subject:&nbsp</h4></label>
                                                    <?php 
                                                        include("../../connect/connect.php");

                                                       $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                                        $run_posts = $conn->query($select_post);

                                                        if ($run_posts->num_rows > 0) {
                                                            while($row = $run_posts->fetch_assoc()){
                                                                $post_Subj = $row ['Ticket_Subj'];
                                                                echo '<label><H4 style = "color:Black;">'.$row ["Ticket_Subj"].'</H4></label>';
                                                            }
                                                        }
                                                       
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label><h4>Concern Type:&nbsp</h4></label>
                                                    <?php 
                                                        include("../../connect/connect.php");

                                                       $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                                        $run_posts = $conn->query($select_post);

                                                        if ($run_posts->num_rows > 0) {
                                                            while($row = $run_posts->fetch_assoc()){
                                                                $post_Type = $row ['Ticket_type'];
                                                                echo '<label><H4 style = "color:Black;">'.$row ["Ticket_type"].'</H4></label>';
                                                            }
                                                        }
                                                       
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label><h4>Ticket Priority:&nbsp</h4></label>
                                                    <?php 
                                                        include("../../connect/connect.php");

                                                       $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                                        $run_posts = $conn->query($select_post);

                                                        if ($run_posts->num_rows > 0) {
                                                            while($row = $run_posts->fetch_assoc()){
                                                                $post_Prio = $row ['Ticket_Priority'];
                                                                echo '<label><H4 style = "color:Black;">'.$row ["Ticket_Priority"].'</H4></label>';
                                                            }
                                                        }
                                                       
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-4">
                                                <div class="form-group">
                                                    <label><h4>Remarks:</h4>
                                                    <?php 
                                                        include("../../connect/connect.php");

                                                       $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                                        $run_posts = $conn->query($select_post);

                                                        if ($run_posts->num_rows > 0) {
                                                            while($row = $run_posts->fetch_assoc()){
                                                                $post_Remarks = $row ['Ticket_Remarks'];
                                                                echo '<span><H4 style = "color:Black;">"'.$row ["Ticket_Remarks"].'"</H4></Span></label>';
                                                            }
                                                        }
                                                       
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-4">
                                                <div class="form-group">
                                                    <label><h4>Date Created:&nbsp</h4></label>
                                                    <?php 
                                                        include("../../connect/connect.php");

                                                       $select_post = "SELECT * FROM tickets WHERE Ticket_Number = '$TicketNum'";
                                                        $run_posts = $conn->query($select_post);

                                                        if ($run_posts->num_rows > 0) {
                                                            while($row = $run_posts->fetch_assoc()){
                                                                $post_DateStart = $row ['Ticket_DateStart'];
                                                                echo '<label><span><H4 style = "color:Black;">'.$post_DateStart.'</H4></Span></label>';
                                                            }
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-4">
                                                <div class="form-group">
                                                    <label><h4>Comments:</h4></label>
                                                                <?php
                                                                    include("../../connect/connect.php");
                                                                    $sql = "SELECT * FROM tickets JOIN ticket_comments ON tickets.Ticket_Number = ticket_comments.TicksNums WHERE ticket_comments.TicksNums = '$TicketNum' ORDER BY ticket_comments.Cstamp ASC";
                                                                    $run_posts = $conn->query($sql);
                                                                              
                                                                        if ($run_posts->num_rows > 0) {
                                                                        while($row = $run_posts->fetch_assoc()){
                                                                                $post_Comment = $row['Comments'];
                                                                                $post_Commenter = $row['Commenter_Name'];
                                                                                $post_CID = $row['Commenter_Id'];
                                                                                echo  "
                                                                                <div class='row'>
                                                                                    <div class='col-md-12 pr-1'>
                                                                                        <div class='form-group'>
                                                                                            <h4 class='col-md-10' style = 'margin-left:2%;'>".$post_Commenter."(".$post_CID.") &nbsp-&nbsp ".$post_Comment."</h4>";    
                                                                                }
                                                                            }
                                                                            else
                                                                            {
                                                                                echo "<div class='row'>";
                                                                                    echo "<div class='col-md-12 pr-1'>";
                                                                                        echo "<div class='form-group'>";
                                                                                            echo  "<h4>No Comments</h4>";   
                                                                            }
                                                                ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer" style="position: bottom;"">
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
</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>
</html>