<?php
session_start();
require 'config.php';
$count=0;
date_default_timezone_set('Etc/GMT-1');
$moment = date("d/m/Y H:i");
$ess = $_SESSION['user_id'];
// Vérification du panier et de l'existence du panier de l'utilisateur

$sqli="SELECT * FROM panier WHERE user_id='$ess'";
$slite = mysqli_query($connect,$sqli);
if (mysqli_num_rows($slite) > 0) {
    // Voir s'il a un panier actif
    while ($row=mysqli_fetch_assoc($slite)) {
        // Récupérer les infos du panier
        $id_user = $row['user_id'];
        $id_produit = $row['id_book'];

        // Recherche du livre dans la biblio
        $qli = "SELECT * FROM book WHERE book_id='$id_produit'";
        $qlite=mysqli_query($connect,$qli);
        if (mysqli_num_rows($qlite) > 0) {
            # code...
            $row1 = mysqli_fetch_assoc($qlite);

            //Mise à jour de la quantité

            
           
            //Affichage des infos du livre en question
            $img=$row1['img'];
            $title=$row1['title'];
            $price=$row1['price'];
            $recup=$row1['recup'];
            $disp=$row1['disp'];
            $recup=intval($recup);
            $disp=intval($disp);
            //Date de l'empprunt
    
            $jr = date("d");
            $mois = date("m");
            $annee = date("Y");
            if ($disp===2) {
                $as=$recup-$jr;
                $jr+=$as;
            }
            if($disp===3) {
                $jr+=$recup;
            }if($disp===1) {
                $jr+=3;
            }

            if ($jr > 30) {
                $jr = $jr - 30;
                if ($jr > 30) {
                $jr = $jr - 30;
                $mois +=1;
                }
                $mois +=1;
                if ($mois < 10) {
                    # code..
                    $mois="0$mois";
                }
            }
            if ($jr < 10) {
                $jr="0$jr";
            }
            
            
            $de = "$jr/$mois/$annee";



            //Procédures
            $price1=intval($price);
            $jr1=intval($jr);
            $mois1=intval($mois);
            $annee1=intval($annee);
    
            $pr=$price1+$jr1;
    
            if ($pr > 30) {
                $pr = $pr - 30;
                if ($pr > 30) {
                $pr = $pr - 30;
                $mois1 +=1;
                }
                $mois1 +=1;
            }
            if ($pr < 10) {
                $pr="0$pr";
            }
            if ($mois1 < 10) {
                # code..
                $mois1="0$mois1";
            }
            $dr = "$pr/$mois1/$annee1";
            //Envoie dans la base de données
           $select = mysqli_query($connect,"SELECT * FROM espace_client WHERE user_id='$ess' AND book_id='$id_produit'");
           if (mysqli_num_rows($select) > 0) {
            $delir=mysqli_query($connect,"DELETE FROM panier WHERE id_book='$id_produit' AND user_id='$ess'");

           } else {
            //Mise à jour du catalogue
            $ptqli = "SELECT * FROM book WHERE book_id='$id_produit'";
            $ptt=mysqli_query($connect,$ptqli);
            $fre=mysqli_fetch_assoc($ptt);
            $qt=$fre['numb'];
            $qt=intval($qt);
            $qt -=1;
            $vql = "UPDATE book SET numb='$qt' WHERE book_id='$id_produit'";
            
            $req=mysqli_query($connect,$vql);
            if ($qt===0) {
                $rere="Indisponible";
                $rrr=2;
                $dql = "UPDATE book SET statu='$rere' AND disp='$rrr' WHERE book_id='$id_produit'";
                $req=mysqli_query($connect,$dql);


            }



            $title=mysqli_real_escape_string($connect,$title);
            $sql = "INSERT INTO espace_client(user_id, book_id, img, title, de, dr, day, month) VALUES ('$ess','$id_produit', '$img', '$title','$de', '$dr', '$pr','$mois1')";
            $qlier = mysqli_query($connect,$sql);
            if ($qlier) {
                # code...
                
                
                $delr=mysqli_query($connect,"DELETE FROM panier WHERE id_book='$id_produit' AND user_id='$ess'");
                $count++;
            }
           }
           
        
        }
    }
    if ($count > 0) {
        echo "Succès";
    }else {
        echo "Emprunt déjà réalisé";
    }
}else {
    
    echo "Panier vide";
}

?>