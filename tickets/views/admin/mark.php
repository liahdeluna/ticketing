<?php
session_start();
include("../../connect/connect.php"); // Assuming this file contains database connection details

$TicketNum = $_SESSION['TicketNum'];
$AdminID = $_SESSION['AdminId'];
        
// Get admin's first name
$select_post = "SELECT user_Fname FROM admin WHERE User_ID = '$AdminID'";
$run_posts = $conn->query($select_post);

if ($run_posts->num_rows > 0) {
    while ($row = $run_posts->fetch_assoc()) {
        $post_name = $row['user_Fname'];
        echo '<script>console.log("'.$post_name.'");</script>';
    }
}

// Update ticket status and end date
$sql = "UPDATE tickets SET Ticket_Status = 'Done', Ticket_DateEnd = current_timestamp() WHERE Ticket_Number = '$TicketNum'";
$run_posts = $conn->query($sql);
echo "<script>alert('Ticket closed by : ".$post_name."')</script>";
echo "<script>window.open('12kjibas1315table.php','_SELF')</script>";
       
?>
