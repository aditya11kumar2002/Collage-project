<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Registration </title>
  <link rel="stylesheet" href="/workout fusion/website/css/newuser.css">


</head>

<body>
  <script>
    function data(){
     var a= document.getElementById("fn").value;
     var b= document.getElementById("un").value;
     var c= document.getElementById("pw").value;
     var d= document.getElementById("mn").value;
     var e= document.getElementById("ak").value;

  if(a==""||b==""||c==""||d==""||e==""){
     alert("!All fields are mandatory");
     return false;
  }
  else if(d.length<10||d.length>10||d<0){
    alert("please enter valid number");
    return false;
  }
  else if(isNaN(d)){
    alert("!only number are allowed");
    return false;
  }
  else{
    true;
  }
  /* var rdb1=document.getElementById("male");
   var rbd2=document.getElementById("female");
       if(rbd1.checked==true){
         alert(rb1.value);
       }
       else if(rdb2.checked==true){
         alert(rdb2.value);
       }
       else{
        alert("!please enter atleast one option");
       } */

    }

  </script>
  <div class="signup">
  
    
    <form class="down" onsubmit=" return data()" mathod="post">
    <div class="title">
    <h3>USER REGISTRATION</h3>
    </div>
      <div class="input-field1">
        <label>Name:</label>
        <input class=" fn" id="fn" type="text" placeholder="fullname" name="name">
        <br>
        <br>

        <label>Username:</label>
        <input class="un"  id="un" type="text" placeholder="@username" name="username">
        <br><br>


        <label>Password:</label>
        <input class="pw"  id="pw" type="password" placeholder="Enter your password" name="password">
        
        <br><br>
        Contact no:<input class="mn"  id="mn" type="number" placeholder="Enter your mobile no" name="phone">
        <br><br>

        Address: <input class="ak" id="ak" type="text" placeholder="Enter address" name="address"><br><br>
      </div>
     <div class="gk" id="GK"> Gender:
        <input type="radio" name="gender" id="male"  value="male" required>Male
        <input type="radio" name="gender" id="female" value="female"required>Female
     </div>
      <div class="gp" ><label for="sp"  class="sp">Gym Plans:</label>
      <select class="sp" id="GP" name="plans">
        <option value="">select plans</option>
        <option value="one month"> one month</option>
        <option value="three month"> three month</option>
        <option value="one year">one year</option>
      </select><br><br></div>
      <div id="gs">
        <label for="ss" class="ss">Gym Services : </label>
      <select class="ss" id="GS" required name="service">
        <option value="">select Services</option>
        <option value="Fitness">Fitness</option>
        <option value="sauna">sauna</option>
        <option value="cardio">Cardio</option>
      </select><br><br></div>
      <button name="submit"  value="submit">Submit</button>
    </form>

  </div>
</body>

</html>


<?php
include('./connection.php');

if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $gender=$_POST['gender'];
   $plans=$_POST['plans'];
   $service=$_POST['service'];

   $query="insert into new registration values('$name','$username','$password','$phone','$address',
   '$gender','$plans','$service')";
   mysqli_query($conn, $query);

   echo "<script>alert('inert data successfull');</script>";
   
}
?>