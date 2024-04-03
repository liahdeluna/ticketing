<link rel="stylesheet" href="../../assets/css/cards.css">

    <div class="basic-column w-col w-col-3">
        <div class="tag-wrapper">
            <div class="number-card number-card-content4">
                <?php

                    include("../../connect/connect.php");
                    $query = "SELECT Ticket_type FROM tickets WHERE Ticket_Type = 'Others' AND Ticket_Status = 'Pending' ORDER BY Ticket_Type";
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);

                        echo '<h1 class="number-card-number">'.$row. '</h1>';
                ?>
                <div class="number-card-divider"></div>
                <div class="number-card-progress-wrapper">
                    <div class="tagline number-card-currency">OTHER CONCERN</div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="style-label">Number of Tickets with Other Concern</div>
        </div>
    </div>



    