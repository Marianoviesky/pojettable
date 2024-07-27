<?php
session_start();
include('config.php');

$admin =12062745 ;
$msg = mysqli_real_escape_string($connect,$_POST['msg']);
$id = mysqli_real_escape_string($connect,$_POST['essay']);

$nbr=2;
date_default_timezone_set('Etc/GMT-1');
$time = date('d/m/Y H:i');
if (!empty($msg)) {
    
        $sli= mysqli_query($connect,"INSERT INTO message(admin_id, user_id, msg, nbr) VALUES ('$admin','$id', '$msg','$nbr')");
        
}

?>