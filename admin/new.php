<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    /* .plus pour le bibliothécaire et .basket pour le panier */
    .plus{
        position: fixed;
        height: 45px;
        width: 45px;
        border: none;
        border-radius: 10px;
        background: #FFE4B5;
        right: 60px;
        bottom: 200px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transition: all .3s ease-in-out;
        cursor: pointer;
        text-align: center;
        z-index: 1;

    }


   /* Pour le bibliothécaire */
    .insert-book{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }
    form {
        display: flex;
        visibility: hidden;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 15px;
        border: 1px solid #ccc;
        width: 400px;
        padding: 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transition: all .3s ease-in-out;
        z-index: 1;

    }
    form #book{
        display: none;
    }
    form label{
        border: 1px solid #ccc;
        border-radius: 8px;
        background: url(../php/bookdom.jpg);
        height: 125px;
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #ccc;
        font-weight: 800;
        font-size: 25px;
        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }
    form :is(.auth-title,.auth-price){
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    form :is(.auth-title,.auth-price) :is(input,textarea){
        padding: 10px;
        border-radius: 8px;
        outline: none;
        border: 1px solid #ccc;
        width: 45%;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    form .auth-title textarea{
        resize: none;
    }
    form .auth-title textarea::-webkit-scrollbar{
        width: 0px;
    }
    form .auth-price{
        display: flex;
    }
    form button{
        width: 125px;
        height: 30px;
        border-radius: 20px;
        border: none;
        background: #009879;
        color: antiquewhite;
        transition: all .3s ease;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    form button:hover{
        background: #2E8B57;
        color: #003;
        cursor: pointer;
        box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }
    form button:active{
        background: hsl(15, 29%, 62%);
    }
    .plus:hover{
        background: hsl(0, 0%, 60%);
        color: #ccc;
    }
    .errorText{
   display: none;
    padding: 10px;
    margin: 20px;
    background: hsl(356, 6%, 66%);
    color: #0d1117;
    text-align: center;
    border-radius: 7px;
  }
  .show{
    visibility: visible;
  }
  .form2{
    visibility: visible;
  }
</style>
<body>
    <button class="plus" id="shadow">+</button>

    
    <div class="insert-book">
        <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" id="book">
            <label for="book">Image<i class="fa fa-plus"></i></label>
            <div class="errorText">logan</div>
            <div class="auth-title">
                
            <input type="text" placeholder="Le titre" name="title">
            <input type="text" placeholder="L'auteur" name="autor">
            </div>
            <div class="auth-title">
                
            <input type="text" placeholder="La catégorie" name="category">
            <textarea id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="auth-price">
                
            <input type="text" placeholder="Durée de retour" name="price">
            <input type="text" placeholder="Le status" name="status">
            </div>
            <div class="auth-price">
                
            <input type="text" placeholder="Quantité" name="nombre">
            <input type="text" placeholder="A Réserver/emprunter" name="statu">
            </div>
            <button type="submit" id="add">Envoyer</button>
        </form>
    </div>

    <script src="me.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script>
    const form = document.querySelector("form");
const add = document.querySelector('#add');
let errorText = document.querySelector('.errorText');
const btn = document.querySelector(".plus");


form.onsubmit = (e)=>{
    e.preventDefault();
}

btn.addEventListener("click",()=>{
    if (form.style.visibility !=='visible') {
     form.style.visibility='visible';
     btn.textContent='×';
    } else{
     form.style.visibility='hidden';
     btn.textContent='+';
    }
 })

add.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/add_book.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="signup.php";
              }
              else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
</script>
</html>