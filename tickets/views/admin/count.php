<link rel="stylesheet" href="../../assets/css/cards.css">

<div class="basic-column w-col w-col-3">
    <div class="tag-wrapper">
        <div class="number-card number-card-content1">
            <?php

                include("../../connect/connect.php");
                $query = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_type = 'Software Concern' AND Ticket_Status = 'Done' AND (DateCreated BETWEEN '$fdate' AND '$tdate' OR Ticket_type = '$concern' OR user_Fname = '$name')";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);

                    echo '<h1 class="number-card-basic">'.$row. '</h1>';
            ?>
            <div class="number-card-divider"></div>
            <div class="number-card-progress-wrapper">
                <div class="tagline number-card-currency">SOFTWARE CONCERN</div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>


<div class="basic-column w-col w-col-3">
    <div class="tag-wrapper">
        <div class="number-card number-card-content2">
            <?php

                include("../../connect/connect.php");
                $query = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_type = 'Hardware Concern' AND Ticket_Status = 'Done' AND (DateCreated BETWEEN '$fdate' AND '$tdate' OR Ticket_type = '$concern' OR user_Fname = '$name')";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);

                    echo '<h1 class="number-card-basic">'.$row. '</h1>';
            ?>
            <div class="number-card-divider"></div>
            <div class="number-card-progress-wrapper">
                <div class="tagline number-card-currency">HARDWARE CONCERN</div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>

<div class="basic-column w-col w-col-3">
    <div class="tag-wrapper">
        <div class="number-card number-card-content3">
            <?php

                include("../../connect/connect.php");
                $query = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_type = 'Network Concern' AND Ticket_Status = 'Done' AND (DateCreated BETWEEN '$fdate' AND '$tdate' OR Ticket_type = '$concern' OR user_Fname = '$name')";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);

                    echo '<h1 class="number-card-basic">'.$row. '</h1>';
            ?>
            <div class="number-card-divider"></div>
            <div class="number-card-progress-wrapper">
                <div class="tagline number-card-currency">NETWORK CONCERN</div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>


<div class="basic-column w-col w-col-3">
    <div class="tag-wrapper">
        <div class="number-card number-card-content4">
            <?php

                include("../../connect/connect.php");
                $query = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_type = 'Others' AND Ticket_Status = 'Done' AND (DateCreated BETWEEN '$fdate' AND '$tdate' OR Ticket_type = '$concern' OR user_Fname = '$name')";
                $query_run = mysqli_query($conn, $query);
                $row = mysqli_num_rows($query_run);

                    echo '<h1 class="number-card-basic">'.$row. '</h1>';
            ?>
            <div class="number-card-divider"></div>
            <div class="number-card-progress-wrapper">
                <div class="tagline number-card-currency">OTHER CONCERN</div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>

    


    