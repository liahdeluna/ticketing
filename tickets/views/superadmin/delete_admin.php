<?php
include("../../connect/connect.php");

$delete_id = $_GET['User'];

// First, delete related records in the ticket_comments table
$deleteTicketCommentsQuery = "DELETE FROM ticket_comments WHERE TicksNums IN (SELECT Ticket_Number FROM tickets WHERE User_Id = '$delete_id')";
if($conn->query($deleteTicketCommentsQuery) === TRUE) {
    // Attempt to delete related records in the admin_to_tickets table
    $deleteAdminToTicketsQuery = "DELETE FROM admin_to_tickets WHERE Ticket_Num IN (SELECT Ticket_Number FROM tickets WHERE User_Id = '$delete_id')";
    if($conn->query($deleteAdminToTicketsQuery) === TRUE) {
        // Proceed to delete the records in the admin_to_users table
        $sql = "DELETE from admin_to_users where User_Id = '$delete_id'";
        if($conn->query($sql) === TRUE){
            // Finally, delete the user record
            $sql2 = "DELETE from user where User_ID = '$delete_id'";
            if($conn->query($sql2) === TRUE){
                echo"<script>alert('Successfully deleted user')</script>";
                echo "<script>window.open('asd654198ZXoi.php','_SELF')</script>";
            } else {
                echo "Error deleting user: " . $conn->error;
            }
        } else {
            echo "Error deleting records from admin_to_users: " . $conn->error;
        }
    } else {
        echo "Error deleting related admin_to_tickets records: " . $conn->error;
    }
} else {
    echo "Error deleting related ticket_comments records: " . $conn->error;
}

// Close the database connection
$conn->close();
?>