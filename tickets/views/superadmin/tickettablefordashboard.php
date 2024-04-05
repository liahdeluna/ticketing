<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">Ticket List</h4>
            <p class="card-category">Summarized view of pending tickets</p>
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
                                <th>Priority</th>
                                <th>Date Created</th>
                                <th>Ticket Attended by</th>
                                <th>Ticket Submitted by</th>
                                
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT tickets.Ticket_Number, tickets.Ticket_Subj, tickets.Ticket_type, tickets.Ticket_Remarks, tickets.Ticket_Priority, tickets.Ticket_DateStart, user.user_Fname AS user_Fname, user.User_Lname AS user_Lname, admin.user_Fname AS admin_Fname, admin.User_Lname AS admin_Lname FROM tickets JOIN admin ON tickets.Ticket_Assigned = admin.User_ID JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Pending';
                                    ";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Prio = $row['Ticket_Priority'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_User_Lname = $row['user_Lname'];
                                                $post_admin_Fname = $row['admin_Fname'];
                                                $post_admin_Lname = $row['admin_Lname'];

                                            if($post_Type == "Software Concern"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_Priority"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["admin_Fname"].' '.$row["admin_Lname"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["user_Lname"].'</td>';

                                                    
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
                                <th>Priority</th>
                                <th>Date Created</th>
                                <th>Ticket Attended by</th>
                                <th>Ticket Submitted by</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT tickets.Ticket_Number, tickets.Ticket_Subj, tickets.Ticket_type, tickets.Ticket_Remarks, tickets.Ticket_Priority, tickets.Ticket_DateStart, user.user_Fname AS user_Fname, user.User_Lname AS user_Lname, admin.user_Fname AS admin_Fname, admin.User_Lname AS admin_Lname FROM tickets JOIN admin ON tickets.Ticket_Assigned = admin.User_ID JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Pending';
                                    ";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Prio = $row['Ticket_Priority'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_User_Lname = $row['user_Lname'];
                                                $post_admin_Fname = $row['admin_Fname'];
                                                $post_admin_Lname = $row['admin_Lname'];

                                            if($post_Type == "Hardware Concern"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_Priority"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["admin_Fname"].' '.$row["admin_Lname"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["user_Lname"].'</td>';

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
                                <th>Priority</th>
                                <th>Date Created</th>
                                <th>Ticket Attended by</th>
                                <th>Ticket Submitted by</th>
                                
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT tickets.Ticket_Number, tickets.Ticket_Subj, tickets.Ticket_type, tickets.Ticket_Remarks, tickets.Ticket_Priority, tickets.Ticket_DateStart, user.user_Fname AS user_Fname, user.User_Lname AS user_Lname, admin.user_Fname AS admin_Fname, admin.User_Lname AS admin_Lname FROM tickets JOIN admin ON tickets.Ticket_Assigned = admin.User_ID JOIN user ON tickets.User_Id = user.User_ID WHERE Ticket_Status = 'Pending';
                                    ";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_Num = $row['Ticket_Number'];
                                                $post_Subj = $row ['Ticket_Subj'];
                                                $post_Type = $row['Ticket_type'];
                                                $post_Remarks = $row['Ticket_Remarks'];
                                                $post_Prio = $row['Ticket_Priority'];
                                                $post_Start = $row['Ticket_DateStart'];
                                                $post_user_Fname = $row['user_Fname'];
                                                $post_User_Lname = $row['user_Lname'];
                                                $post_admin_Fname = $row['admin_Fname'];
                                                $post_admin_Lname = $row['admin_Lname'];

                                            if($post_Type == "Network Concern"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["Ticket_Number"].'</td>';
                                                    echo'<td>'.$row["Ticket_Subj"].'</td>';
                                                    echo'<td>'.$row["Ticket_type"].'</td>';
                                                    echo'<td>'.$row["Ticket_Remarks"].'</td>';
                                                    echo'<td>'.$row["Ticket_Priority"].'</td>';
                                                    echo'<td>'.$row["Ticket_DateStart"].'</td>';
                                                    echo'<td>'.$row["admin_Fname"].' '.$row["admin_Lname"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].' '.$row["user_Lname"].'</td>';

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