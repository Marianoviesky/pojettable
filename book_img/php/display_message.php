<?php
session_start();
require 'config.php';
$el = mysqli_real_escape_string($connect,$_POST['bookdom']);
$sql="SELECT * FROM comment where id_book='$el'";
$sqli = mysqli_query($connect,$sql);
if (mysqli_num_rows($sqli) > 0) {
    while ($row = mysqli_fetch_assoc($sqli)) {
        if (!empty($row['img'])) {
                echo '
                <div class="entry_comment">
                            <div class="time_send">
                                <div>'.$row['date'].'</div>
                            </div>
                            <p>'.$row['comment'].'</p>
                            <div class="entry_user">
                                <div class="pers">
                                    <img src="../user_img/'.$row['img'].'" style="height: 30px; width: 30px;border-radius: 50%;">
                                    <p>'.$row['comment_user'].'</p>
                                </div>
                            </div>
                </div>
                ';
        }else {
            echo '
                <div class="entry_comment">
                            <div class="time_send">
                                <div>'.$row['date'].'</div>
                            </div>
                            <p>'.$row['comment'].'</p>
                            <div class="entry_user">
                                <div class="pers">
                                    <i style="height: 30px; width: 30px;border-radius: 50%;" class="bx bxs-user"></i>
                                    <p>'.$row['comment_user'].'</p>
                                </div>
                            </div>
                </div>
                ';
        }
    
    }
}else {
    echo'<h3 style="text-align: center; margin-top:150px;">Aucun commentaire pour le moment</h3>';
}

?>