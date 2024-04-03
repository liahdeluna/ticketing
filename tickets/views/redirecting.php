   <?php

    include("../connect/connect.php");
    
    
    $select_post = "select * from rooms";
    $run_posts = $conn->query($select_post);
    
    if ($run_posts->num_rows > 0) {
    while($row = $run_posts->fetch_assoc()){
            
            $post_aRoomNumber = $row['RoomNumber'];
            $post_aRoomname = $row['RoomName'];
            $post_aRoomDesc = $row['RoomDesc'];
            $post_aRoomPrice = $row ['RoomPrice'];
            $post_aRoomStat = $row['RoomStatus'];
                /*POST OF ROOMS THAT ARE AVAILABLE*/
      if($post_aRoomStat == "Available"){
                echo '<a href = "../roomview/form.php?RoomNumber='.$row['RoomNumber'].'"><div class="flip-box">';
                      echo '<div class="flip-box-inner">';
                        echo '<div class="flip-box-front">';
                         echo '<img src="../assets/img/bed-available.png" alt="clean" style="width:100%;height:100%">';
                        echo '</div>';
                        echo '<div class="flip-box-back">';
                            echo "<h3><center>" .$row['RoomName']."</center></h3>" ;
                            echo "<p><br>Room Description:<br>".$row['RoomDesc']."</p>" ;
                            echo "<p><br>Room Price :&nbsp<br></p><h3>".$row['RoomPrice']."</h3>";
                        echo '</div>';
                      echo '</div>';
                            echo'<div class = "desc">'.$row['RoomNumber'].'</div>';
                    echo '</div></a>';
                /*POST OF ROOM THAT ARE RENTED*/
            }else if($post_aRoomStat == "Occupied"){
                echo '<a href = "occupiedroomview.php?RoomNumber='.$row['RoomNumber'].'"><div class="flip-box">';
                      echo '<div class="flip-box-inner">';
                        echo '<div class="flip-box-front">';
                         echo '<img src="../assets/img/bed-rented.png" alt="Occupied" style="width:100%;height:100%">';
                        echo '</div>';
                        echo '<div class="flip-box-back">';
                            echo "<h3><center>" .$row['RoomName']."</center></h3>" ;
                            echo "<p><br>Room Description:<br>".$row['RoomDesc']."</p>" ;
                            echo "<p><br>Room Price :&nbsp<br></p><h3>".$row['RoomPrice']."</h3>";
                        echo '</div>';
                      echo '</div>';
                            echo'<div class = "desc">'.$row['RoomNumber'].'</div>';
                    echo '</div>';
               /*POST OF ROOM FOR CLEANING*/
            }else if($post_aRoomStat == "Cleaning"){
                 echo '<a href = "roomclean.php?RoomNumber='.$row['RoomNumber'].'"><div class="flip-box">';
                      echo '<div class="flip-box-inner">';
                        echo '<div class="flip-box-front">';
                         echo '<img src="../assets/img/bed-clean.png" alt="clean" style="width:100%;height:100%">';
                        echo '</div>';
                        echo '<div class="flip-box-back">';
                            echo "<h3><center>" .$row['RoomName']."</center></h3>" ;
                            echo "<p><br>Room Description:<br>".$row['RoomDesc']."</p>" ;
                            echo "<p><br>Room Price :&nbsp<br></p><h3>".$row['RoomPrice']."</h3>";
                        echo '</div>';
                      echo '</div>';
                            echo'<div class = "desc">'.$row['RoomNumber'].'</div>';
                    echo '</div></a>';
            }
      
            
    }
    
    }
?>