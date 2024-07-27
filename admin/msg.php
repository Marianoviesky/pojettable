<?php
$er = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .member{
        display: flex;
    }
</style>
<body>
    <div class="div-container messages" id="div1" style="display: flex;">

            <div class="message_area">
                
            </div>
        
    </div>
    <button value="<?php echo $er;?>" style="display: none;" class="partisan"></button>

    <script src="script.js"></script>
</body>
  <script>
    
    let input = document.querySelector('.partisan').value;

    conversation(input);

    function robot() {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", '../php/robot.php', true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
            let data = xhr.response;
            if (data==="ok") {
              
            }
        }
    }
  }
  xhr.send();
}

setInterval(() => {
    conversation(input);
}, 500);

  </script>
</html>