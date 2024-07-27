let maping= document.querySelector('.message_area');
let maping2= document.querySelector('.espace_livre_emprunt');


function conversation(input) {
    let bookdom = input;
    console.log(input);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/assi1.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data=xhr.response;
            maping.innerHTML=data;
              
          }
      }
    }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("bookdom=" + bookdom);
    
  }

