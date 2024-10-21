<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/workout fusion/website/CSS/3.css">
</head>
<body>

    <div class="container">
        <div class="head">
              <img src=" /workout fusion/website/image/2.png" alt="img not found">    <h1>Workout Fusion</h1>
        </div>
      <form method="post">
        <div class="input-field">
            <label>username:</label>
            <input  type="text" class="user" name="name" placeholder="user name" value=""><br>
            <label>Password: </label>
            <input  type="password" class="pass" name="password" placeholder="password">
        </div>
    
      <button class="btn" name="submit">Customer Login</button>
      <p class="cl"><a href="/workout fusion/website/HTML/new registration.php" target="_blank">New  User Register</a></p>
      <p class="sl"><a href="/workout fusion/website/HTML/stafflogin.php" target="_blank">Staff login</a> </p>
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
    

   /* $data=$conn->prepare("INSERT INTO `adminlogin` (`username`, `password`) VALUES ('$user', '$pass');");
    $result=$data->execute();

    if($result)
    {
        echo"Registration success";
    }
    else{
        echo "Registration failed";
    }*/
   /* $query="insert into customerlogin values('$user','$pass')";
  if(mysqli_query($conn,$query))
  {
    header('location:memmenubar.php');
  }
  else
  {
    echo"Insertion operation failed";
  }*/
  $query="select * from customerlogin where username='$user' && password='$pass'";
  $data=mysqli_query($conn,$query);
  $total=mysqli_num_rows($data);
  //echo $total;

  if($total ==1){
    $_SESSION['user_name']=$user;
    header('location:memmenubar.php');
      //echo "Login ok";
  }
  else{
    echo "Login Failed";
  }


}


?>