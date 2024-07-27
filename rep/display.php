<?php 
session_start();

include('config.php');
$idrecup= mysqli_real_escape_string($connect,$_POST['elt']);


$select = mysqli_query($connect,"SELECT * WHERE iduser='$idrecup'");

if (mysqli_num_rows($select) > 0) {
    $row=mysqli_fetch_assoc($select);
    $msg=$row['msg'];
    $times=$row['times'];
    $photo=$row['photo'];
    $nbr=$row['nbr'];
    $nbr=intval($nbr);
    if ($nbr===2) {
        if (!empty($photo)) {
            echo '
        <!-- Outgoing messages -->
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="user1.png" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                  <img src="img/'.$photo.'" />
                  
                    <p class="multi-msg">
                     '.$msg.'
                    </p>
                   

                    <span class="time">'.$times.'/span>
                  </div>
                </div>
              </div>
       ';
        }else{
        
       echo '
        <!-- Outgoing messages -->
              <div class="outgoing-chats">
                <div class="outgoing-chats-img">
                  <img src="user1.png" />
                </div>
                <div class="outgoing-msg">
                  <div class="outgoing-chats-msg">
                    <p class="multi-msg">
                     '.$msg.'
                    </p>
                   

                    <span class="time">'.$times.'/span>
                  </div>
                </div>
              </div>
       ';
        }
    }else{
        if (!empty($photo)) {
            echo '
            <div class="received-chats">
                <div class="received-chats-img">
                  <img src="user2.png" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                   <img src="img/'.$photo.'" />
                    <p class="single-msg">
                      '.$msg.'
                    </p>
                    <span class="time">'.$times.'</span>
                  </div>
                </div>
              </div>
            ';
        }else {
            echo '
            <div class="received-chats">
                <div class="received-chats-img">
                  <img src="user2.png" />
                </div>
                <div class="received-msg">
                  <div class="received-msg-inbox">
                   <img src="img/'.$photo.'" />
                    <p class="single-msg">
                      '.$msg.'
                    </p>
                    <span class="time">'.$times.'</span>
                  </div>
                </div>
              </div>
            ';
        }
    }
}
?>