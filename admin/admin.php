<?php 
session_start();
if (!isset($_SESSION['id_admin'])) {
    header("location: connexion.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My admin</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../php/bookdom.jpg" type="image/x-icon">
</head>
    <style>
  .show{
    padding: 4px;
    transform: scale(1.1);
    color: #009879;
    background: #fff;
}
.asti{
    display: flex;
    height: 70px;
    margin: 10px;
    overflow: hidden;
    gap: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    align-items: center;
    border-radius: 15px;
    cursor: pointer;
}

    </style>
<body>
    <div class="container">

    
        <header>
            <nav>
                <img src="admin.jpeg" alt="">
                <div>
                    <button class='bx bxs-message showout'></button>
                    <button class='bx bxs-arrow-from-left'></button>
                </div>
            </nav>
        </header>
        <div class="affichage">
            <div class="composant">
                <h2>Admin</h2>
                <div class="component tab"><i class='bx bx-home'></i><li onclick="pageload('tableau_de_bord.php')">Tableau de bord</li></div>
                <div class="component uti"><i class='bx bxs-group'></i><li onclick="pageload('utilisateur.php')">Utilisateurs</li></div>
                <div class="component liv"><i class='bx bxs-book'></i><li onclick="pageload('livre.php')">Livres</li></div>
                <div class="component cat"><i class='bx bxs-category'></i><li onclick="pageload('category.php')">Catégories</li></div>
                <div class="component emp"><i class='bx bxs-objects-horizontal-left'></i><li onclick="pageload('emprunt.php')">Emprunts</li></div>
                <div class="component new"><i class='bx bxs-comment-add'></i><li onclick="pageload('new.php')">Nouveau livre</li></div>
            </div>
            <iframe src="" frameborder="0" name="iframe" id="iframe"></iframe>
        </div>
        
            
    </div>


    <div class="member">
        <img src="../admin/admin.jpeg" alt="" class="profil_asp">
        <h3>Admin</h3>

        <!-- message_area -->
        <div class="div-container messages" id="div1" >
            <div class="ess">
                <button onclick="member('div1')" class="bx bx-x"></button>
                <p>Messages</p>
            </div>
            <iframe class="message_are" src="">
                
                
            </iframe>
                <form action="" method="post" >
                    <input type="text" placeholder="Votre message..." name="msg">
                    <button class="bx bxs-send starting" type="submit"></button>
                </form>
        </div>
        
        <!-- end message_area -->


        <!-- Member space -->
          <div class="div-container emprunt_zone" id="div3">
            <div class="ess">
                <button onclick="member('div3')" class="bx bx-x"></button><p>Espace Messages</p>
            </div>
            <div class="le_res">
                <div class="espace_desti">
                    <button>Messages Réçus</button>
                </div>
                <div class="espace_livre_emprunt" style="display: grid;">
                   
                    

                </div>
            </div>
          </div>
          
          <!-- end Member space -->

          <!-- BUTTON -->
           <div class="access_button">
           <button onclick="member('div3')" class="bx bxs-group">Espace Client</button>
            <button onclick="member('div1')" class="bx bxs-message-rounded" style="display: none;">Assistance</button>
            <button onclick="membis()">Aller sur le site</button>

           </div>
          
      <!-- end  -->
  </div>

</body>
<script>
let membe = document.querySelector('.member');
let maping2= document.querySelector('.espace_livre_emprunt');
function membis(){
  location.href='../accueil/';
}
function user_msg(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/listmsgs.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data=xhr.response;
            maping2.innerHTML=data;
              
          }
      }
    }
    xhr.send();
    
}
user_msg();



const formable=document.querySelector("form");
let starting=document.querySelector('.starting');
let smash=document.querySelector('form input');
let iframe = document.querySelector('.message_are');
let inpu = iframe.contentDocument.querySelector('.partisan');
let showout = document.querySelector('.showout');

formable.onsubmit = (e)=>{
    e.preventDefault();
  }
  document.querySelector('.bxs-arrow-from-left').onclick=()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/session_destroy.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;

              location.href='admin.php';
          }
      }
    }
    xhr.send();
  }



    function pageload(url){
        document.getElementById('iframe').src = url;
        url=url.substring(0,3);
        let erno = document.querySelector('.'+url);
        let component = document.querySelectorAll('.component');
       for(let i=0;i<component.length;i++){
            if (component[i].classList.contains(url)) {
                component[i].classList.add('show');      
            }else{
                component[i].classList.remove('show');
            }
        }
       

    }

    function member(divId) {
    let div = document.getElementById(divId);
    if (div.style.display === "none") {
      div.style.display = "flex";
    } else {
      div.style.display = "none";
    }
  }


    showout.addEventListener("click",()=>{
    if (membe.style.display === "none") {
        membe.style.display = "flex";
        showout.style.color = '#009879';
        showout.style.transform = 'scale(1.2)';
        showout.style.background = '#fff';
      } else {
        membe.style.display = "none";
        showout.style.color = '#fff';
        showout.style.transform = 'scale(1)';
        showout.style.background = '#009879';
      }
})

function astio(input){
    
    iframe.src ="msg.php?id="+input;
    membe.style.display = "flex";
    document.querySelector('.messages').style.display='flex';
    document.querySelector('.emprunt_zone').style.display='none';

}

starting.onclick=()=>{
    let iframe = document.querySelector('.message_are');
    let inpu = iframe.contentDocument.querySelector('.partisan');
    let essay = inpu.value;
    console.log(essay);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/admin_s.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              console.log(data);    
              smash.value="";
          }
      }
    }
    let form = new FormData(formable);
    form.append('essay', essay);
    xhr.send(form);
  }
</script>
</html>