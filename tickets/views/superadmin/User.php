<link rel="stylesheet" href="../../assets/css/cards.css">

    <div class="basic-column w-col w-col-2">
        <div class="tag-wrapper">
            <div class="number-card number-card-content5">
                <?php

                    include("../../connect/connect.php");
                    $query = "SELECT User_Type FROM user WHERE User_Type = 'User' ORDER BY User_Type";
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);

                        echo '<h1 class="number-card-user"><i class="fa fa-user asd" aria-hidden="true"></i>'.$row. '</h1>';
                ?>
                <div class="number-card-divider"></div>
                <div class="number-card-progress-wrapper">
                    <div class="tagline number-card-currency">NORMAL USERS</div>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>



    