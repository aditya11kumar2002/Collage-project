<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/workout fusion/website/CSS/toggle_pass.css">
    <title>Password toggle</title>
</head>
<body>
    <div class="input-box">
       PASSWORD:<input type="password" placeholder="Enter password" id="password">
      <img src="/workout fusion/website/image/eye-close-1.png" alt="Image not found" id="eyeicon">
    </div>
    <script>
let eyeicon= document.getElementById("eyeicon");
let password= document.getElementById("password");

 eyeicon.onclick=function(){
    if(password.type == "password"){
        password.type="text";
        eyeicon.src="/workout fusion/website/image/eye-open2.png";
    }
    else{
        password.type="password";
        eyeicon.src="/workout fusion/website/image/eye-close-1.png";
    }
 }

    </script>
</body>
</html>