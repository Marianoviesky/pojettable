<?php
session_start();
require 'config.php';


$sqli = mysqli_query($connect,"SELECT * FROM book ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($sqli);
echo '
     <img src="../book_img/'.$row['img'].'" alt="">
                    <strong>'.$row['title'].'</strong>
                    <p>'.$row['description'].'</p>
                    <a href="detail.php?id_book='.$row['book_id'].'">Decouvrir</a>
'

?>