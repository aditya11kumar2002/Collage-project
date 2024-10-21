<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="/workout fusion/website/CSS/2.css">
</head>
<body>

    <div class="container">
        <div class="head">
              <img src=" /workout fusion/website/image/2.png" alt="img not found">    <h1>Workout Fusion</h1>
        </div>
      <form action="#" method="post">
            <div class="input-field">
                <label>username:</label>
                <input  type="text" class="user" placeholder="user name" name="name" autocomplete="off"><br>
                <label>Password: </label>
                <input  type="password" class="pass" placeholder=" enter password" name="password">
            </div>
    
            <button class="btn" name="submit">Admin Login</button>
            <p class="cl"><a href="/workout fusion/website/HTML/customerlogin.php" target="_blank">Customer login</a></p>
            <p class="sl"><a href="/workout fusion/website/HTML/stafflogin.php" target="_blank">Staff login</a> </p>
      </form>
      </div>

</body>
</html>
<!--<?php
include("./connectionlog.php");
if(isset($_POST['submit']))
{
    $user=$_POST['name'];
    $pass=$_POST['password'];
    

   /* $data=$conn->prepare("INSERT INTO `adminlogin` (`username`, `password`) VALUES ('$user', '$pass');");
    $result=$data->execute();

    if($result)
    {
        echo"Registration success";
    }
    else{
        echo "Registration failed";
    }*/
   /* $query="insert into adminlogin values('$user','$pass')";
  if(mysqli_query($conn,$query))
  {
    header('location:menubar.php');
  }
  else
  {
    echo"Insertion operation failed";
  }*/
  $query="select * from adminlogin where username='$user' && password='$pass'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  //echo $total;

  if($total ==1){
    $_SESSION['user_name']=$user;
    header('location:menubar.php');
      //echo "Login ok";
  }
  else{
    echo "Login Failed";
  }



}


?>
