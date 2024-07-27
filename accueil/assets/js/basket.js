 /* Panier */
 let basket = document.querySelector('.basket');
 const ok_button =document.querySelector('.ok_button');
 let basket_field = document.querySelector('.basket_field');


 
 function count_basket(){
    let pr = new XMLHttpRequest();
      pr.open("POST", '../php/count_basket.php', true);
      pr.onload = ()=>{
        if(pr.readyState === XMLHttpRequest.DONE){
            if(pr.status === 200){
                let data = pr.response;
                document.querySelector('.span_basket').innerHTML=data;            
            }
        }
      }
      pr.send();
  }
  setInterval(() => {
    count_basket();
  }, 500);

 basket.onclick = ()=>{

     if (basket_field.classList.contains('show')) {
         basket_field.classList.remove('show');
     }else{
         basket_field.classList.add('show');

     }
 }
 // FIN Panier de commande

 ok_button.onclick = ()=>{

    if (basket_field.classList.contains('show')) {
        basket_field.classList.remove('show');
    }else{
        basket_field.classList.add('show');

    }
}


function deletebasket(input) {
    let del = input;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/delete.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            panier();
              
          }
      }
    }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("del=" + del);

  }