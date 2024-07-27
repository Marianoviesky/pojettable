<?php
session_start();
require 'config.php';
$del = mysqli_real_escape_string($connect,$_POST['del']);
$el = $_SESSION['user_id'];
$sql="DELETE FROM panier WHERE id_book='$del' AND user_id='$el'";
$sqli = mysqli_query($connect,$sql);
while ($row = mysqli_fetch_assoc($sqli)) {
    echo "succès";
}

?>