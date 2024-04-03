<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Ticket List</h4>
            <p class="card-category">List of all ticket created by users</p>
        </div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Software">Software Concern</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Hardware">Hardware Concern</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Network">Network Concern</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Other">Other Concern</a>
            </li>
          </ul>
            <div class="tab-content">
                <div id="Software" class="tab-pane active"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                                <th>Ticket Created by</th>
                                <th>Ticket Attended by</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Done'";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_Fname = $row['User_Lname'];
                                                $post_AdminFName = $row['Admin_Fname'];
                                                $post_AdminLName = $row['Admin_Lname'];

                                            if($post_Type == "Software"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["Admin_Fname"].' '.$post_AdminLName.'</td>';
                                                echo'</tr>';
                                            }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="Hardware" class="tab-pane fade"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                                <th>Ticket Created by</th>
                                <th>Ticket Attended by</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Done'";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_Fname = $row['User_Lname'];
                                                $post_AdminFName = $row['Admin_Fname'];
                                                $post_AdminLName = $row['Admin_Lname'];

                                            if($post_Type == "Hardware"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["Admin_Fname"].' '.$post_AdminLName.'</td>';
                                                echo'</tr>';
                                            }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="Network" class="tab-pane fade"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                                <th>Ticket Created by</th>
                                <th>Ticket Attended by</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Done'";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_Fname = $row['User_Lname'];
                                                $post_AdminFName = $row['Admin_Fname'];
                                                $post_AdminLName = $row['Admin_Lname'];

                                            if($post_Type == "Network"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["Admin_Fname"].' '.$post_AdminLName.'</td>';
                                                echo'</tr>';
                                            }
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="Other" class="tab-pane fade"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Ticket Number</th>
                                <th>Subject</th>
                                <th>Concern Type</th>
                                <th>Remarks</th>
                                <th>Date Created</th>
                                <th>Ticket Created by</th>
                                <th>Ticket Attended by</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM admin JOIN admin_to_tickets ON admin.Admin_ID = admin_to_tickets.Admin_Id JOIN tickets ON admin_to_tickets.Ticket_Num = tickets.Ticket_Number JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Done'";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_Fname = $row['User_Lname'];
                                                $post_AdminFName = $row['Admin_Fname'];
                                                $post_AdminLName = $row['Admin_Lname'];

                                            if($post_Type == "Others"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["Admin_Fname"].' '.$post_AdminLName.'</td>';
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