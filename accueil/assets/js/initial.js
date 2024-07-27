let search_btn = document.querySelector('.search_btn');
let errorText = document.querySelector('.bookdom'); 
let form1 = document.querySelector('.form1'); 


function display(){
  let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/display.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              
              errorText.innerHTML = data;
              
          }
      }
    }
    xhr.send();
}
display();



search_btn.addEventListener("keyup",()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", '../php/search.php', true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              
              errorText.innerHTML = data;
              
          }
      }
    }
    let form = new FormData(form1);
    xhr.send(form);
})




function myfunction(input) {
  location.href='../page_login/signin.php';
}