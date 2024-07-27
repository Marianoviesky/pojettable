<?php
session_start();
include('config.php');

$name = mysqli_real_escape_string($connect,$_POST['nom']);
$comment = mysqli_real_escape_string($connect,$_POST['msg']);
$id = mysqli_real_escape_string($connect,$_POST['id_book']);

date_default_timezone_set('Etc/GMT-1');
$time = date('d/m/Y H:i');
if (!empty($name) && !empty($comment) && !empty($id)) {
    if (isset($_SESSION['user_id'])) {
        $ese =$_SESSION['user_id'];
        $qlite="SELECT * FROM users where user_id='$ese'";
        $qlites= mysqli_query($connect,$qlite);
        $row2 = mysqli_fetch_assoc($qlites);
        $img = $row2['img'];
        $sli= mysqli_query($connect,"INSERT INTO comment(id_book, comment_user, img, comment, date) VALUES ('$id', '$name','$img','$comment', '$time')");
    }
}else {
    echo "Aucun champs ne doit ètre vide";
}

?>