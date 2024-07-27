// FILTRAGE
function All(){
  
  let erno = document.querySelector('.show1');
  let filtrer = document.querySelectorAll('.filtrer');
 for (let i = 0; i < filtrer.length; i++) {
  filtrer[i].style.background='#D2691E';
  filtrer[i].style.color='#fff';
 }
  erno.style.background='#ccc';
  erno.style.color='#D2691E';
    display();
  }
  let filtrage = document.querySelector('.filtrage');
  function filtrer(input) {
  let searchTerm = input;
  let url = input;
  url=url.substring(0,2);
  let erno = document.querySelector('.'+url);
  let fil = document.querySelector('.show1');


  let filtrer = document.querySelectorAll('.filtrer');
 for (let i = 0; i < filtrer.length; i++) {
  filtrer[i].style.background='#D2691E';
  filtrer[i].style.color='#fff';
 }
  erno.style.background='#ccc';
  erno.style.color='#D2691E';
  fil.style.background='#D2691E';
  fil.style.color='#fff';

  //2nd
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/filtrage.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            
            errorText.innerHTML = data;
            
        }
    }
  }
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("search=" + searchTerm);


}