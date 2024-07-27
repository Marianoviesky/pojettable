<?php 
session_start();
require 'config.php';

$ele = $_SESSION['user_id'];

$bookdom = mysqli_real_escape_string($connect,$_POST['bookdom']);
$set = "SELECT * FROM panier WHERE user_id='$ele' and id_book='$bookdom'";
$sqlii=mysqli_query($connect,$set);
if (mysqli_num_rows($sqlii) > 0) {
    $dat="ess";
}else {
    

 $sli = mysqli_query($connect,"INSERT INTO panier(user_id, id_book) VALUES ('$ele', '$bookdom')");
if ($sli) {

   
/* AFFICHAGE */
   $select = "SELECT * FROM panier WHERE user_id='$ele'";

$sqli = mysqli_query($connect,$select);
if (mysqli_num_rows($sqli) > 0) {
    $ter = 1;
    while ($el = mysqli_fetch_assoc($sqli)) {
        $mm = $el['id_book'];
        $sqlit = "SELECT * FROM book WHERE book_id='$mm'";
        $sqlite = mysqli_query($connect,$sqlit);
        $row = mysqli_fetch_assoc($sqlite);
    
        $a = $row['book_id'];
        $ess = "'".''.$a.''."'";
        echo '<div class="basket_element"><span>'.$ter.'</span><img src="../book_img/'.$row['img'].'" alt=""><p>'.$row['title'].'</p><i>D.R '.$row['price'].' jrs</i><button class="bx bx-x suitebx" onclick="deletebasket('.$ess.')"></button></div>';
        $ter++;
    }
      
}

}
}

?>