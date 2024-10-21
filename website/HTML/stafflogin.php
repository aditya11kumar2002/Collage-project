
<?php
session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/workout fusion/website/CSS/4.css">
</head>
<body>

    <div class="container">
        <div class="head">
              <img src=" /workout fusion/website/image/2.png" alt="img not found">    <h1>Workout Fusion</h1>
        </div>
      <form action="#" method="post">
        <div class="input-field">
            <label>username:</label>
            <input  type="text" class="user" placeholder="user name" name="name" value="" autocomplete="off"><br>
            <label>Password: </label>
            <input  type="password" class="pass" placeholder="password" name="password">
        </div>
    
      <button class="btn" name="submit">Staff Login</button>
      <p class="cl"><a href="/workout fusion/website/HTML/customerlogin.php" target="_blank">Customer login</a></p>
      <p class="sl"><a href="/workout fusion/website/HTML/adminlogin.php" target="_blank">Admin login</a> </p>
      </form>
      </div>

</body>
</html>

<?php
include("./connectionlog.php");
if(isset($_POST['submit']))
{
    $user=$_POST['name'];
    $pass=$_POST['password'];
    
  
 // $query="insert into stafflogin values('$user','$pass')";
 /* if(mysqli_query($conn,$query))
  {
    header('location:staffmenu.php');
  }
  else
  {
    echo"Insertion operation failed";
  }*/
  $query="select * from stafflogin where username='$user' && password='$pass'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  //echo $total;

  if($total ==1){
    $_SESSION['user_name']=$user;
    header('location:staffmenu.php');
      //echo "Login ok";
  }
  else{
    echo "Login Failed";
  }

}


?>