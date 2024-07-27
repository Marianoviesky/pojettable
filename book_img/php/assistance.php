<?php
session_start();
include('config.php');

$admin =12062745 ;
$msg = mysqli_real_escape_string($connect,$_POST['msg']);
$id = $_SESSION['user_id'];
$nbr=1;
date_default_timezone_set('Etc/GMT-1');
$time = date('d/m/Y H:i');
if (!empty($msg)) {
    
        $qlite="SELECT * FROM user_live where user_id='$id'";
        $qlites= mysqli_query($connect,$qlite);
        if (mysqli_num_rows($qlites) > 0) {
        $sli= mysqli_query($connect,"INSERT INTO message(admin_id, user_id, msg, nbr) VALUES ('$admin','$id', '$msg', '$nbr')");
            
        }else{
        $sli= mysqli_query($connect,"INSERT INTO user_live(user_id, time) VALUES ('$id', '$time')");
        $sli= mysqli_query($connect,"INSERT INTO message(admin_id, user_id, msg, nbr) VALUES ('$admin','$id', '$msg', '$nbr')");
        }
}
?>