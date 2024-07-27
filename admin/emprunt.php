<?php 
$connect = mysqli_connect("localhost","root","","projecttable");
if (!$connect) {
    echo mysqli_connect_error();
}

$select = mysqli_query($connect,"SELECT * FROM espace_client");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    table{
        width: 100%;
        text-align: center;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        border-radius: 5px 5px 0 0;
    }
    th{
        text-align: center;
    }
    button{
        background: #009879;
        color: #fff;
        border: none;
        padding: 5px;
        border-radius: 5px;
        cursor: pointer;
    }
    .styled-table thead tr {
        border-collapse: collapse;
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    border-radius: 7px 7px 0px 0px;
}
.styled-table tbody tr {
    cursor: pointer;
    transition: all .3s ease-in-out;
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
tr:hover{
    transform: scale(1.05);
    
}
td img{
    height: 45px;
    width: 45px;
    border-radius: 50%;
}
</style>
<body>
    <h2>Emprunts</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>N</th>
                <th>Profil</th>
                <th>Prénom</th>
                <th>Livre</th>
                <th>Title</th>
                <th>Date emp</th>
                <th>Date ret.</th>
            </tr>
        </thead>
        <tbody>
           
            
            <?php 
            $ess= 1;

           
            
           while ($row=mysqli_fetch_assoc($select)) {
            $a = $row['user_id'];
            $b=$row['book_id'];
            $essa = "'".''.$a.''."'";
            $sqli=mysqli_query($connect,"SELECT * FROM users WHERE user_id='$a'");
            $row1=mysqli_fetch_assoc($sqli);
            $sqli2=mysqli_query($connect,"SELECT * FROM book WHERE book_id='$b'");
            $row2=mysqli_fetch_assoc($sqli2);
            
            $sqlr=mysqli_query($connect,"SELECT COUNT(*) AS total FROM espace_client WHERE user_id='$a'");
            $row3=mysqli_fetch_assoc($sqlr);
            echo' <tr class="active-row">
                <td>'.$ess.'</td>
                <td><img src="../user_img/'.$row1['img'].'" alt=""></td>
                <td>'.$row1['lname'].'</td>
                <td><img src="../book_img/'.$row2['img'].'" alt="" style="border-radius: 10px;"></td>
                <td>'.$row2['title'].'</td>
                <td>'.$row['de'].'</td>
                <td>'.$row['dr'].'</td>
            </tr>';
           $ess =$ess+1;

           }
           
           ?>
        </tbody>
    </table>
    <!-- <form action="../php/del_user.php" method="post"><button type="submit" onclick="myfunction('.$ess.')"></button></form> -->
    
</body>
</html>