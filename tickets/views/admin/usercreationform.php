<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">ADD NEW USER</h4>
        </div>
        <div class="card-body">
            <form method="post" class="form" action="usercreationform.php">
                <div class="row">
                    <div class="col-md-2 pr-2">
                        <div class="form-group">
                            <label>user type (disabled)</label>
                            <input type="text" class="form-control" disabled value="User" name="UserType">
                        </div>
                    </div>
                    <div class="col-md-2 px-2">
                        <div class="form-group">
                            <label>Employee ID</label>
                            <input type="text" class="form-control" placeholder="EMP0001" name="EmpID" required>
                        </div>
                    </div>
                    <div class="col-md-2 px-2">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="Juanito" name="FName" required>
                        </div>
                    </div>
                    <div class="col-md-2 px-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" placeholder="Dela Cruz" name="Lname" required>
                        </div>
                    </div>
                    <div class="col-md-2 px-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nickname</label>
                            <input type="text" class="form-control" placeholder="Juan" name="Nick" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 pr-2">
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" placeholder="****" name="pass" required>
                        </div>
                    </div>
                    <div class="col-md-2 px-2">
                        <div class="form-group">
                            <label>Number</label>
                            <input type="number" class="form-control" placeholder="09123456789" name="Mnumber" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pr-2">
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" name="Dept" placeholder="ITS Department" required>
                        </div>
                    </div>
                    <div class="col-md-4 pl-2">
                        <div class="form-group">
                            <label>Job title</label>
                            <input type="text" class="form-control" name="job" placeholder="Senior IT Support" required>
                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Create User</button>
            </form>
        </div>
    </div>
</div>

<?php
        include("../../connect/connect.php");
        if(isset($_POST['submit'])){
          
                $Utype = "User";
                $EID =  mysqli_real_escape_string($conn,$_POST["EmpID"]);
                $FirstName = mysqli_real_escape_string($conn,$_POST["FName"]);
                $Lastname =  mysqli_real_escape_string($conn,$_POST["Lname"]);
                $Nickname = mysqli_real_escape_string($conn,$_POST["Nick"]);
                $Password =  mysqli_real_escape_string($conn,$_POST["pass"]);
                $Password = md5($Password);
                $Mobile = mysqli_real_escape_string($conn,$_POST["Mnumber"]);
                $Department =  mysqli_real_escape_string($conn,$_POST["Dept"]);
                $Jobdesc = mysqli_real_escape_string($conn,$_POST["job"]);

                $check_user = "SELECT User_ID FROM user WHERE BINARY User_ID = '$EID'";
                $run = mysqli_query($conn,$check_user);
                      
                    if(mysqli_num_rows($run)>0){
                                echo"<script>alert('EMPLOYEE ID IS ALREADY TAKEN!')</script>";
                                    die();
                    }
                    elseif(ctype_space($EID)){
                                echo "<script>alert('Employee ID should not be blank!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#.\*&<>])/", $EID)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#\*.&<>])/", $FirstName)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    elseif(ctype_space($FirstName)){
                                echo "<script>alert('First name should not be blank!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#.\*&<>])/", $Lastname)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    elseif(ctype_space($Lastname)){
                                echo "<script>alert('Lastname should not be blank!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#\.*&<>])/", $Nickname)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    elseif(ctype_space($Nickname)){
                                echo "<script>alert('Nickname should not be blank!')</script>";
                                    die();
                    }
                    elseif(ctype_space($Department)){
                                echo "<script>alert('Department should not be blank!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#\*.&<>])/", $Department)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    elseif(ctype_space($Jobdesc)){
                                echo "<script>alert('Job Title should not be blank!')</script>";
                                    die();
                    }
                    elseif(preg_match("/([%\$#\*.&<>])/", $Jobdesc)){
                                echo "<script>alert('No special characters!')</script>";
                                    die();
                    }
                    else{
                            $sql = "INSERT INTO user (User_ID, user_Fname,User_Lname,User_MobileNum, User_Dept, User_JobDesc, User_Pass, User_Nickname, User_type) VALUES ('$EID','$FirstName','$Lastname','$Mobile','$Department','$Jobdesc','$Password','$Nickname','$Utype')";
                                  if($conn->query($sql) === TRUE){
                                            echo"<script>alert('SUCCESFULLY CREATED NEW USER')</script>";
                                            echo "<script>window.open('userprofiles.php','_SELF')</script>";
                                     }
                            }


                            
                          $conn->close();
        }
?> 
