<?php
session_start();
include('config.php');
        $qlite="SELECT nbr FROM assistance";
        $qlites= mysqli_query($connect,$qlite);
        if (mysqli_num_rows($qlites) > 0) {
            $row=mysqli_fetch_assoc($qlites);
            $nbr=$row['nbr'];
            $nbr=intval($nbr);
            //Vérification
            $qlite="SELECT COUNT(*) AS total FROM message";
            $qlites= mysqli_query($connect,$qlite);
            $row=mysqli_fetch_assoc($qlites);
            $total=$row['total'];
            $total=intval($total);
            if ($total > $nbr) {
            $nbr++;
            $sli= mysqli_query($connect,"UPDATE assistance SET nbr='$nbr'");
            echo "ok";
            }

            
         
        }else{
            $qlite="SELECT COUNT(*) AS total FROM message";
            $qlites= mysqli_query($connect,$qlite);
            $row=mysqli_fetch_assoc($qlites);
            $total=$row['total'];
            $nbr=intval($total);
            $id='Activi';
    
            $sli= mysqli_query($connect,"INSERT INTO assistance(nbr,tail) VALUES ('$nbr','$id')");
               
             }
?>