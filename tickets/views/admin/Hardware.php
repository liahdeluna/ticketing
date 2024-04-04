<?php 
    if(!isset($_SESSION)) { session_start(); }
    $AdminID = $_SESSION['AdminID'];
?>

<link rel="stylesheet" href="../../assets/css/cards.css">

    <div class="basic-column w-col w-col-3">
        <div class="tag-wrapper">
            <div class="number-card number-card-content2">
                <?php

                    include("../../connect/connect.php");
                    $query = "SELECT Ticket_Number FROM tickets WHERE Ticket_Type = 'Hardware Concern' AND Ticket_Status = 'Pending' AND Ticket_Assigned = '$AdminID' ORDER BY Ticket_Type";
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);

                        echo '<h1 class="number-card-number">'.$row. '</h1>';
                ?>
                <div class="number-card-divider"></div>
                <div class="number-card-progress-wrapper">
                    <div class="tagline number-card-currency">HARDWARE CONCERN</div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="style-label">Number of pending Tickets<br>with Hardware Concern</div>
        </div>
    </div>



    