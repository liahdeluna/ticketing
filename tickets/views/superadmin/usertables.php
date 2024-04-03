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
        <div class="rowow2 w-rowow2">
                <?php include("admin.php");?>
                <?php include("User.php");?>
        </div>
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#admin">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="tab" href="#normaluser">USERS</a>
            </li>
          </ul>

            <div class="tab-content">
                <div id="admin" class="tab-pane active"><br>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Employee ID</th>
                                <th>FirstName</th>
                                <th>Lastname</th>
                                <th>Mobile Number</th>
                                <th>Department</th>
                                <th>Nickname</th>
                                <th>User Type</th>
                               
                                <th>Manage User Account</th>
                            </thead>
                            <tbody>
                               <?php 
                                    include("../../connect/connect.php");
                                    $select_post = "SELECT * FROM user ORDER BY user.User_ID ASC";
                                    $run_posts = $conn->query($select_post);

                                    if ($run_posts->num_rows > 0) {
                                        while($row = $run_posts->fetch_assoc()){

                                                $post_UserId = $row['User_ID'];
                                                $post_UserName = $row ['user_Fname'];
                                                $post_UserL = $row['User_Lname'];
                                                $post_UserDept = $row['User_MobileNum'];
                                                $post_UserJob = $row['User_Dept'];
                                                $post_UserNick = $row['User_Nickname'];
                                                $post_Usertype = $row['User_type'];
            
                                            if($post_Usertype == "Admin"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["User_ID"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].'</td>';
                                                    echo'<td>'.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["User_MobileNum"].'</td>';
                                                    echo'<td>'.$row["User_Dept"].'</td>';
                                                    echo'<td>'.$row["User_Nickname"].'</td>';
                                                    echo'<td>'.$row["User_type"].'</td>';
                                                    echo'<td>
                                                            <a href = "delete_admin.php?User='.$row['User_ID'].'" class = "fa fa-times button2"></a>
                                                        </td>';
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
                                <th>Employee ID</th>
                                <th>FirstName</th>
                                <th>Lastname</th>
                                <th>Mobile Number</th>
                                <th>Department</th>
                                <th>Nickname</th>
                                <th>User Type</th>
                                <th>Manage User Account</th>
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
                                                $post_Usertype = $row['User_type'];

                                            if($post_Usertype == "User"){
                                                echo'<tr>';
                                                    echo'<td>'.$row["User_ID"].'</td>';
                                                    echo'<td>'.$row["user_Fname"].'</td>';
                                                    echo'<td>'.$row["User_Lname"].'</td>';
                                                    echo'<td>'.$row["User_MobileNum"].'</td>';
                                                    echo'<td>'.$row["User_Dept"].'</td>';
                                                    echo'<td>'.$row["User_Nickname"].'</td>';
                                                    echo'<td>'.$row["User_type"].'</td>';
                                                    echo'<td>
                                                            <a href = "delete_user.php?User='.$row['User_ID'].'" class = "fa fa-times button2"></a>
                                                        </td>';
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