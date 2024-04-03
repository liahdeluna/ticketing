<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">TICKET LIST</h4>
            <p class="card-category">List of all tickets you've created</p>
        </div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#admin">Pending</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="tab" href="#normaluser">Done</a>
            </li>
          </ul>

            <div class="tab-content">
                <div id="admin" class="tab-pane active"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $UserIDs = mysqli_real_escape_string($conn,$_SESSION['UserId']);
                                    $select_post = "SELECT * FROM tickets WHERE User_Id = '$UserIDs'";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remakrs = $row['Ticket_Remarks'];
                                                $post_Stats = $row['Ticket_Status'];
                                                $post_Start = $row['Ticket_DateStart'];

                                            if($post_Stats == "Pending"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                echo'</tr>';
                                            }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="normaluser" class="tab-pane fade"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                                <th>Date Resolved</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $UserIDs = mysqli_real_escape_string($conn,$_SESSION['UserId']);
                                    $select_post = "SELECT * FROM tickets WHERE User_Id = " . '"' . $UserIDs . '"' ;
                                    $run_posts = $conn->query($select_post);
                                    echo "<script>console.log('Debug Objects: " . $select_post . "' );</script>";
                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remakrs = $row['Ticket_Remarks'];
                                                $post_Stats = $row['Ticket_Status'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_End = $row['Ticket_DateEnd'];

                                            if($post_Stats == "Done"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateEnd"].'</td>';
                                                echo'</tr>';
                                            }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
          </div>
                    
    </div>
</div>