let messagecomponent=document.querySelector('.comment');
const former=document.querySelector('.former');
    

former.onsubmit = (e)=>{
    e.preventDefault();
}
let form1 = document.querySelector('.form1'); 
let content = document.querySelector('.basket_content');
let ma = document.querySelector('.maaa');


ma.onclick=()=>{

let xhr = new XMLHttpRequest();
xhr.open("POST", '../php/message.php', true);
xhr.onload = ()=>{
if(xhr.readyState === XMLHttpRequest.DONE){
if(xhr.status === 200){
    let data = xhr.response;
    document.querySelector('.logan').textContent=data;
    
essayconvert();
    
}
}
}
let ess = new FormData(former);
xhr.send(ess);

}




function like(input) {
    let bookdom = input;
let xhr = new XMLHttpRequest();
xhr.open("POST", '../php/like.php', true);
xhr.onload = ()=>{
if(xhr.readyState === XMLHttpRequest.DONE){
    if(xhr.status === 200){
      
        
    }
}
}
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.send("bookdom=" + bookdom);
}
