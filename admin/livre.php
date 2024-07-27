<?php 
$connect = mysqli_connect("localhost","root","","projecttable");
if (!$connect) {
    echo mysqli_connect_error();
}


$select = mysqli_query($connect,"SELECT * FROM book");

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
    max-height: 80px;
    overflow: hidden;
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
tr td{
    color: #1e1e1e;
}
td img{
    height: 45px;
    width: 45px;
    border-radius: 5px;
}
</style>
<body>
    <h2>Livres Publiés</h2>
    <table class="styled-table">
        <thead>
            <tr>
                <th>N</th>
                <th>Image</th>
                <th>Identifiant</th>
                <th>Title</th>
                <th>Description</th>
                <th>Auteur</th>
                <th>Catégorie</th>
                <th>Status</th>
                <th>N.Commentaires</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
            $ess= 1;

           while ($row=mysqli_fetch_assoc($select)) {
            $ads=$row['book_id'];
            $abs = mysqli_query($connect,"SELECT COUNT(*) as total FROM comment WHERE id_book='$ads'");
            $abs1=mysqli_fetch_assoc($abs);
            echo' <tr class="active-row">
                <td>'.$ess.'</td>
                <td><img src="../book_img/'.$row['img'].'" alt=""></td>
                <td>'.$row['book_id'].'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['autor'].'</td>
                <td>'.$row['category'].'</td>
                <td>'.$row['status'].'</td>
                <td>'.$abs1['total'].'</td>
                <td><button>Rétirer</button></td>
            </tr>';
           $ess =$ess+1;

           }
           
           ?>
        </tbody>
    </table>
    
</body>
</html>