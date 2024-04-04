<?php
    if(!isset($_SESSION)) { session_start(); }
    include("../../connect/connect.php");
    $TicketNum = $_GET['TicketNumber'];
    date_default_timezone_set('Asia/Singapore');
    $today = date("F j, Y, g:i a"); 
    $AdminID = mysqli_real_escape_string($conn,$_SESSION['AdminId']);
    $TStat = "Done";


    $select_post = "SELECT * FROM admin WHERE Admin_ID = '$AdminID'";
    $run_posts = $conn->query($select_post);
    if ($run_posts->num_rows > 0) {
        while($row = $run_posts->fetch_assoc()){
            $post_name = $row ['Admin_Fname'];
            $sql = "UPDATE tickets SET Ticket_Status = '$TStat', Ticket_DateEnd = '$today' WHERE Ticket_Number = '$TicketNum'";
                if ($conn->query($sql) === TRUE) {
                    $sql1 = "INSERT INTO admin_to_tickets (Admin_Id, Ticket_Num) VALUES ('$AdminID','$TicketNum')";
                        if($conn->query($sql1) === TRUE){
                            echo"<script>alert('Ticket closed by : ".$post_name."')</script>";
                            echo "<script>window.open('12kjibas1315table.php','_SELF')</script>";
                        }
                }
                else
                {
                        echo"<script>ERROR</script>";
                }

        }
    }

    
?>



asd