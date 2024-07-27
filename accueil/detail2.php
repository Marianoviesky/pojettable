<?php 
$in = $_GET['id_book'];
require '../php/config.php';

$sqli = mysqli_query($connect,"SELECT * FROM book WHERE book_id='$in'");
$row = mysqli_fetch_assoc($sqli);
$sqli2 = mysqli_query($connect,"SELECT * FROM book ORDER BY id DESC LIMIT 1");
$row4 = mysqli_fetch_assoc($sqli2);

$sess = $_SESSION['user_id'];

$sqlite = mysqli_query($connect,"SELECT * FROM users WHERE user_id='$sess'");
$row2 = mysqli_fetch_assoc($sqlite);
?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title><?php echo $row['title'];?></title>
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/basket.css">
    <link rel="stylesheet" href="assets/css/member.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/comment.css">
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
     .header-sticky{
      position: sticky;
      top: 3px;
      transition: all .3s ease-in-out;
      box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;

    }
    :is(.comment_space,.add_comment){
        margin-top: 20px;
        padding-top: 10px;
        width: 400px;
        height: 400px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        border-radius: 5px;
        justify-content: center;
        align-items: center;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
        
    .maintener {
  max-width: 85%;
  margin: auto;
  height: 80vh;
  margin-top: 5%;
  background: white;
  box-shadow: 5px 5px 10px 3px rgba(0, 0, 0, 0.3);
}

.right {
  
  display: flex;
      flex-direction: column;
      align-items: flex-start;
  width: 50%;
  padding: 30px;
}

.flex {
  display: flex;
  justify-content: space-between;
}

.flex1 {
  display: flex;
}

.main_image {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  gap: 15px;
  width: 100%;
  height: 100%;
}
.main_image img{
  width: 100%;
  height: 95%;
}

.option img {
  width: 75px;
  height: 75px;
  padding: 10px;
}

.right {
  padding: 25px;
}

.right h3 {
  color: #1e1e1e;
  font-size: 25px;
}

.right :is(h5,p,small) {
  font-size: 18px;
  color: #837D7C;
}

.right h4 {
  color: red;
}

.right p {
  font-size: 15px;
  padding-right: 20px;
  line-height: 25px;
}

.right h5 {
  font-size: 15px;
}


.btn-danger {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
  color: #fff;
  margin-top: 20px;
  border-radius: 30px;
}

  @media only screen and (max-width:768px) {
    .maintener {
      display: flex;
      flex-direction: column;
      max-width: 90%;
      margin: auto;
      height: auto;
      align-items: center;
      justify-content: center;
    }

    .right {
      height: 100%;
      width: 90%;
    }

    .maintener {
      flex-direction: column;
    }
  }

@media only screen and (max-width:768px) {
  .maintener {
    max-width: 90%;
    height: auto;
    padding: 10px;

  }

  .left, .right {
    padding: 0;
  }

  .maintener img{
    width: 100%;
    height: 100%;
  }

  .option {
    display: flex;
    flex-wrap: wrap;
  }
}
  </style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <h1>Bookdom</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" style="z-index: 1;">
                      <li><a href="index.php">Accueil</a></li>
                      <li><a href="catalogue.php">Parcourir</a></li>
                      <li><a href="index.php" class="active">Details</a></li>
                      <li><a href="contact.php">Nous contacter</a></li>
                      <li><a href="#"><i class="active_user"><img src="../user_img/<?php echo $row2['img']; ?>" alt=""></i> <?php echo $row2['lname']; ?></a></li>
                  </ul>    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>


                    <div class="concatenate">
                        <div class="lement">
                            <i class='bx bxs-info-circle'></i>
                            <div class="centaine">
                                <p>Succès</p>
                                <small>Etude de cas de maitre maurice</small>
                                </div>
                            <span class="spani"></span>
                        </div>
                    </div>

                  <button class="click_mee">
                  <span class="span">Espace membre</span>
                  <i class='bx bx-plus liss'></i></button>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Member -->
  <div class="member">
        <img src="../user_img/<?php echo $row2['img']; ?>" alt="" class="profil_asp">
        <h3><?php echo $row2['lname']; ?></h3>

        <!-- message_area -->
        <div class="div-container messages" id="div1" >
            <div class="ess">
                <button onclick="member('div1')" class="bx bx-x"></button>
                <p>Messages</p>
            </div>
            <div class="message_area">
                
                
                
            </div>
                <form action="" method="post" class="formable">
                    <input type="text" placeholder="Votre message..." name="msg">
                    <button class="bx bxs-send starting"></button>
                </form>
        </div>
        
        <!-- end message_area -->
  <!-- Aide -->

  <div class="div-container messages" id="div4" >
            <div class="ess">
                <button onclick="member('div4')" class="bx bx-x"></button>
                <p>Aide</p>
            </div>
            
            <div class="message_a">
                    <i>Comment ça marche ?</i><br>
                    <i>Le bouton plus(+)</i>
                    <p><strong>Espace membre : </strong>Le panel des membres pour suivre les emprunts et discuter avec l'assistance.</p>
                    <i>Catalogue</i>
                    <p><strong>Recherche : </strong>Trouver n'importe quel livre disponible sur la plateforme juste en écrivant le nom ou l'auteur du livre .</p>
                    <p><strong>Filtrage : </strong>Filtrer les livres en fonction de leur catégorie.</p>
                    <i>Status des livres / Emprunt</i>
                    <p><strong>1.Les emprunts : </strong>Intéressé par un livre , il vous suffit de cliquez sur le bouton emprunter qui se trouve en bas.</p>
                    <p><strong>1.1.Notice emprunt : </strong>Quand le livre que vous emprunter porte la notice emprunter vous disposez exactement de <strong>trois(03) jours</strong> pour vous rendre à la bibliothèque pour vous le procurer</p>
                    <p><strong>1.2.Date retour emprunt : </strong>Sous chaque livre se trouve une durée de retour maximale à la fin duquel vous ètes obligés de rendre le livre au risque de payer une caution</p>
                    <p><strong>1.3.Le decompte retour : </strong>Le decompte du retour du livre commence à partir de la durée moyenne du statut du livre.Pour les emprunts le decompte commence à partir du  <strong>troisième jour</strong> que vous avez lancé l'emprunt.</p>
                    <i>Status des livres / Réservation</i>
                    <p><strong>2.1.Sous réservation : </strong>Les livres qui possèdent la notice sous réservation réclame à ce que l'emprunt du livre soit fait <strong>une (01) semaine </strong>auparavant. Le decompte de la date de retour et le jour de prise du livre <strong>commence exactement une semaine après la réservation</strong></p>
                    
                    <p><strong>2.2.Indisponible : </strong>Si le stocke d'exemplaire du livre est vide , il passe au statut indisponible .Mais vous pouvez procéder à la réservation du livre . La date de prise du livre démarre exactement lorsque le livre sera rendu par un ancien membre qui l'avait emprunté.Pour connaitre la date de disponibilité du livre veuillez consultez <strong>la zone espace client / Date E.P</strong></p>

                    <i>Espace client</i>
                    <p><strong>Zone d'emprunt et de suivi: </strong>Cette zone permet aux membres de suivre leur emprunt/réservation au cours de chaque période</p>
                    <i>Assistance</i>
                    <p><strong>Zone FAQ Avançée : </strong>Vous permet d'écrire à l'assistance et d'avoir des réponses à toute vos réquètes.</p>
                    <i>Notification</i>
                    <p><strong>Resté à l'écoute : </strong>Vous ètes notifié de chaque nouveau livre disponble dans la bibliothèque qui pourrait vous intèresser.</p>
                    <i></i>
                    <p><strong></strong></p>
            </div>
                
              
        </div>

            <!-- FIN AIDE -->
        <!-- Notifications area -->
          <div class="div-container notification" id="div2">
            <div class="ess">
                <button onclick="member('div2')" class="bx bx-x"></button><p>Notifications</p>
                </div>
                <div class="part">
                    <h2>Pas de messages</h2>
                </div>
                <b>Récemment ajouté</b>
                <div class="center_notification">
                    <img src="../book_img/<?php echo $row4['img'];?>" alt="">
                    <strong><?php echo $row4['title'];?></strong>
                    <p><?php echo $row4['description'];?></p>
                    <a href="detail.php?id_book=<?php echo $row4['book_id'];?>">Decouvrir</a>
                </div>
          </div>
          
        <!-- end Notifications area -->
        

        <!-- Member space -->
          <div class="div-container emprunt_zone" id="div3">
            <div class="ess">
                <button onclick="member('div3')" class="bx bx-x"></button><p>Espace emprunt</p>
            </div>
            <div class="le_res">
                <div class="espace_desti">
                    <button>Livre</button>
                    <button>Nom</button>
                    <button>Date E.P</button>
                    <button>Date Retour</button>
                </div>
                <div class="espace_livre_emprunt">
                    


                </div>
            </div>
          </div>
          
          <!-- end Member space -->

          <!-- BUTTON -->
           <div class="access_button">
           <button onclick="member('div3')" class="bx bxs-group">Espace Client</button>
            <button onclick="member('div1')" class="bx bxs-message-rounded" >Assistance</button>
            <button onclick="member('div2')" class="bx bxs-bell">Notifications</button>
            <button onclick="member('div4')" class="bx bxs-help-circle">Aide</button>
            <button onclick="memb()" class="fa fa-right-from-bracket"></button>

           </div>
          
      <!-- end  -->
  </div>
      <!-- END  -->


 <!-- THE BASKET -->
 <button class="basket bx bxs-cart-alt"><span class="span_basket"></span></button>

<div class="basket_field">
            <div class="panier bx bx-basket">Panier</div>
            <div class="basket_content">
                
                
            </div>
            <div class="payement">
                <button class="payer">Procéder au payement</button>
                <button class="ok_button">ok</button>
            </div>
            <div class="pay_total">
               Total = 15800fr
            </div>
</div>


  


      <!-- ARTICLE  -->
<section>
    <div class="maintener flex">
      <div class="left">
        <div class="main_image">
          <img src="../book_img/<?php echo $row['img'];?>" class="slide">
        </div>
        
      </div>
      <div class="right">
        <h3><?php echo $row['title'];?></h3>
        <i style="color:#1e1e1e;font-size:22px;">Auteur: <small style="font-size:22px;"><?php echo $row['autor'];?></small></i><br>
        <i class="fa fa-layer-group" style="color: red;font-size: 20px;"><small style="color: #F04D44;font-size:22px;"><?php echo $row['category'];?></small></i>
        <p><?php echo $row['description'];?></p>
        <small style="font-size:22px;color:green;"><?php echo $row['status'];?></small><br>
        

        <h4><small>Delai de retour </small><?php echo $row['price'];?> jrs</h4>
        
        <?php 
           $a = $row['book_id'];
           $ess = "'".''.$a.''."'";
           echo '<button class="btn btn-danger" onclick="myfunction('.$ess.')">'.$row['statu'].'</button>';           
          
          ?>
      </div>
    </div>
</section>
  <!-- FIN ARTICLE  -->

 


    <div class="container elli">
        <div class="comment_space">
            <div class="comment" data-aos="fade-up" data-aos-duration="1300">
                
               
                
                
                
            </div>
        </div>
        <div class="add_comment">
            <form action="" method="post" class="former">
                <div class="logan"></div>
                <input type="text" value="<?php echo $a;?>" style="display: none;" name="id_book" class="eper">
                <input type="text" placeholder="Prénom" required name="nom">
                <input type="text" placeholder="Email (facultatif)">
                <textarea name="msg" placeholder="Votre commentaire..."></textarea>
                <button class="maaa">Envoyer</button>
            </form>
        </div>
    </div>
    
    



   
    <footer>
      <div class="contain">
        <div class="col-lg-12">
          <p>Copyright © 2024 BookDom Co., Ltd. Tous droits réservés. 
          
          Design: <a href="">Mariano & Shérif</a></p>
        </div>
      </div>
      
    </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/basket.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/member.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/comment.js"></script>

  </body>
  <script>
    
AOS.init();
    function essayconvert() {
        
let bookdom=document.querySelector('.eper').value;
let xhr = new XMLHttpRequest();
xhr.open("POST", '../php/display_message.php', true);
xhr.onload = ()=>{
if(xhr.readyState === XMLHttpRequest.DONE){
if(xhr.status === 200){
    let data = xhr.response;
    messagecomponent.innerHTML=data;
}
}
}

xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("bookdom=" + bookdom);
}
    
essayconvert();


function panier() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/display_basket.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            content.innerHTML = data;
            
        }
    }
  }
  xhr.send();
}
panier();



function myfunction(input) {
  let bookdom = input;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/panier.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          count_basket();
          panier();
          if (basket_field.classList.contains('show')) {
            basket_field.classList.remove('show');
        }else{
            basket_field.classList.add('show');
    
        }
            
        }
    }
  }
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("bookdom=" + bookdom);
}


  </script>
</html>