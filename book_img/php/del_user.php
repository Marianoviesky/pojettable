<?php
session_start();
require 'config.php';
$el = mysqli_real_escape_string($connect,$_POST['bookdom']);
$sql="DELETE FROM users WHERE user_id='$el'";
$sqli = mysqli_query($connect,$sql);
if ($sqli) {
    echo "succès";
    header("location: ../admin/utilisateur.php");
}

?>