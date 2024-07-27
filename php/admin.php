<?php 

session_start();
require 'config.php';

$identifiant = mysqli_real_escape_string($connect,$_POST['id']);
$pswd = mysqli_real_escape_string($connect,$_POST['pswd']);


$sqli = mysqli_query($connect,"SELECT * FROM admin Where id_admin = '$identifiant'");

if (mysqli_num_rows($sqli) > 0) {
    $row = mysqli_fetch_assoc($sqli);
    $var = $row['pswd'];
    $pswd = md5($pswd);
    if ($pswd === $var) {
        session_unset();
        session_destroy();

        session_start();
        $_SESSION['id_admin']=12062745;
        echo "ok";
    }else {
        echo "Mot de passe incorrect";
    }
}else{
    echo "Mauvais identifiant.Veuillez réessayer";
}


?>