<?php
session_start();
require 'config.php';
$el = $_SESSION['user_id'];
$sql=mysqli_query($connect,"SELECT * FROM espace_client WHERE user_id='$el'");
if (mysqli_num_rows($sql) > 0) {
    # code...
    while ($row = mysqli_fetch_assoc($sql)) {
        $rer=$row['book_id'];
        $sqlite=mysqli_query($connect,"SELECT * FROM book WHERE book_id='$rer'");
        $row1=mysqli_fetch_assoc($sqlite);
        echo '<div class="les_livres_ep" style="height: 80px;">
                        <img src="../book_img/'.$row1['img'].'" alt="">
                        <i>'.$row1['title'].'</i>
                        <p>'.$row['de'].'</p>
                        <p>'.$row['dr'].'</p>
                    </div>
            ';
    }
}else {
    echo '
    <div class="part">
                    <h2 style="font: size 20px;">Aucun emprunt réalisé</h2>
                </div>';
}


?>