
let click_mee = document.querySelector('.click_mee');
let membe = document.querySelector('.member');
let liss = document.querySelector('.liss');
let payer = document.querySelector('.payer');
let espace_livre_emprunt = document.querySelector('.espace_livre_emprunt');
const formable = document.querySelector('.formable'),
starting = document.querySelector('.starting');
let mesage = document.querySelector('.message_area');
let smash = document.querySelector('.formable input');
const text = document.querySelectorAll('.centaine small');
let init = "Etude de cas de maitre maurice";
let init2 = document.querySelector('.concatenate');
//Notification
function notifications(input){
  document.querySelector('.concatenate').style.display='flex';
let element = document.querySelector('.lement');
let espan = document.querySelector('.spani');
  setTimeout(() => {
    text.textContent=input;
    element.classList.toggle('tre');
    espan.classList.toggle('tre');
    setTimeout(() => {
        element.classList.remove('tre');
        espan.classList.remove('tre');
        setTimeout(() => {
        document.querySelector('.concatenate').style.display='none';
        }, 500);

    }, 5000);
  }, 500);
}
notifications(init);

//Function reminber
function reminber() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/countdown.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            console.log(data);
            init2.innerHTML=data;
            init2.style.display='flex';

            let element = document.querySelectorAll('.lement');

            let espan = document.querySelectorAll('.spani');
            setTimeout(() => {
              for (let i = 0; i < element.length; i++) {
                
              element[i].classList.toggle('tre');
                
              }
              for (let b = 0; b < element.length; b++) {
              espan[b].classList.toggle('tre');
                  
                }
              setTimeout(() => {
                  
                  for (let i = 0; i < element.length; i++) {
                
                    element[i].classList.remove('tre');
                      
                    }
                    for (let b = 0; b < espan.length; b++) {
                    espan[b].classList.remove('tre');
                        
                      }
                  setTimeout(() => {
                  init2.style.display='none';
                  }, 500);
          
              }, 5000);
            }, 500);
           
        }
    }
  }
  xhr.send();
}
reminber();



// starting formable
formable.onsubmit = (e)=>{
  e.preventDefault();
}


starting.onclick=()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/assistance.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;          
            smash.value="";
        }
    }
  }
  let form = new FormData(formable);
  xhr.send(form);
}

function conversation() {
  let xhr = new XMLHttpRequest();
xhr.open("POST", '../php/assi.php', true);
xhr.onload = ()=>{
  if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
          let data = xhr.response;
          mesage.innerHTML=data;
          
      }
  }
}
xhr.send();
  
}
conversation();

function Alter(){
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/member_space.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
           espace_livre_emprunt.innerHTML=data;
            
        }
    }
  }
  xhr.send();
    
}
Alter();
function clalre() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/notif.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            document.querySelector('.center_notification').innerHTML=data;
        }
    }
  }
  xhr.send();
}
clalre();

click_mee.addEventListener("click",()=>{
    console.log(liss);
    if (membe.style.display === "none") {
        membe.style.display = "flex";
       liss.classList.remove('bx-plus');
       liss.classList.add('bx-x');
    
      } else {
        membe.style.display = "none";
       liss.classList.remove('bx-x');
       liss.classList.add('bx-plus');

      }
})

function member(divId) {
    let div = document.getElementById(divId);
    if (div.style.display === "none") {
      div.style.display = "flex";
    } else {
      div.style.display = "none";
    }
  }

  function memb() {
    let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/session_destroy.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if (data === "ok") {
              location.href='../index.php';
            }
            
        }
    }
  }
  xhr.send();
    
  }
// pay_total
payer.innerText="Procéder aux emprunts";
payer.addEventListener("click",()=>{
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/send_to_member.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            payer.innerHTML =data;
            notifications(data);
            setTimeout(() => {
              panier();
            }, 400);
            setTimeout(() => {
            payer.innerHTML="Procéder aux emprunts";
              
            }, 1000);
        }
    }
  }
  xhr.send();
})
function elem() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/count_price.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            
            document.querySelector('.pay_total').innerText ="Total = "+data;
            
        }
    }
  }
  xhr.send();
}


function robot() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/robot.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            console.log(data);
            if (data==="ok") {
              conversation();
            }
        }
    }
  }
  xhr.send();
}
setInterval(() => {
  conversation();
}, 500);

setInterval(() => {
  elem();
}, 500);

