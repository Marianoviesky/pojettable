<?php
session_start();
require 'config.php';

$ess = $_SESSION['user_id'];
$sqli="SELECT COUNT(*) AS total FROM panier WHERE user_id='$ess'";

$sqlite = mysqli_query($connect,$sqli);
$row = mysqli_fetch_assoc($sqlite);
echo $row['total'];
?>