<?php
session_start();
include('config.php');


$msg = mysqli_real_escape_string($connect,$_POST['msg']);
$id_user = mysqli_real_escape_string($connect,$_POST['id_user']);


if (isset($_FILES['img']) ) {
        $photo = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp,'img/'.$photo);
}
date_default_timezone_set('Etc/GMT-1');
$time = date('d/m/Y H:i');
$nbr = 2;
$idast = 34567;
if (!empty($msg)) {
        
        $sli= mysqli_query($connect,"INSERT INTO discussion (idast, iduser, msg, nbr, times, photo ) VALUES ('$idast','$id_user', '$msg', '$nbr', '$time', '$photo')");

        if ($sli) {
                echo 'succes';
        }
        else {
                echo 'echec';
        }
}
