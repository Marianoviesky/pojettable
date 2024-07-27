<?php
session_start();
include('config.php');
// $sli= mysqli_query($connect,"INSERT INTO message(admin_id, user_id, msg, nnbr) VALUES ('$admin','$id', '$msg', '$nbr')");
$er=mysqli_real_escape_string($connect,$_POST['bookdom']);
$sl=mysqli_query($connect,"SELECT * FROM message WHERE user_id='$er'");
if (mysqli_num_rows($sl) > 0) {
    while ($row=mysqli_fetch_assoc($sl)) {
        $msg=$row['msg'];
        $nbr=$row['nbr'];
        $nbr=intval($nbr);
        if ($nbr===2) {
            echo '
            <div class="outgoing_mess">
                        <p>'.$msg.'</p>
                       <div class="disqq">
                           <img src="admin.jpeg" alt="">
                           <span>Admin</span>
                       </div>
                   </div>
                   ';
        }else {
            $sli=mysqli_query($connect,"SELECT * FROM users WHERE user_id='$er'");
            $row1=mysqli_fetch_assoc($sli);
            echo '
             <div class="incoming_mess">
                    <div class="disqq"><img src="../user_img/'.$row1['img'].'" alt=""><span>'.$row1['lname'].'</span></div>
                    <p>'.$msg.'</p>
                </div>
            ';
        };
    }
}else {
    echo '
    <div class="part">
                    <h2 style="font: size 20px;">Pas de messages pour le moment</h2>
                </div>';
}

?>