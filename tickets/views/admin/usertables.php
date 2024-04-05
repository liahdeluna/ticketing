<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="button.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="col-md-12">
    <div class="card strpied-tabled-with-hover">
        <div class="card-header ">
            <h4 class="card-title">USER LIST</h4>
            <p class="card-category">List of SPCF Employees</p>
        </div>
        <div class="w-rowow2 d-flex justify-content-center align-items-center">
                <?php include("User.php");?>
        </div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            
            <li class="nav-item">
              <a class="nav-link active"  data-toggle="tab" href="#normaluser">USERS</a>
            </li>
          </ul>

            <div class="tab-content">
            
                <div id="normaluser" class="tab-pane active"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Employee ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile Number</th>
                                <th>Department</th>
                                <th>Tier</th>
                                <th>Manage Account</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM user";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_UserId = $row['User_ID'];
                                                $post_UserName = $row ['user_Fname'];
                                                $post_UserL = $row['User_Lname'];
                                                $post_UserDept = $row['User_MobileNum'];
                                                $post_UserJob = $row['User_Dept'];
                                                $post_UserNick = $row['User_Nickname'];
                                                $post_Tier = $row['Tier'];

                                                echo'<tr>';
                                                    echo'<td>'.$row["User_ID"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].'</td>';
                                                    echo'<td>'.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["User_MobileNum"].'</td>';
                                                    echo'<td>'.$row["User_Dept"].'</td>';
                                                    if($row["Tier"] == 0) {echo'<td>Top Management</td>';}
                                                    elseif($row["Tier"] == 1) {echo'<td>Middle Management</td>';}
                                                    else {echo'<td>Employee</td>';}
                                                    echo'<td>
                                                            <a href = "delete_user.php?User='.$row['User_ID'].'" class = "fa fa-times button2"></a>
                                                        </td>';
                                                echo'</tr>';
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