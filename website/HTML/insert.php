<form action=""method="post">
    <input type="text" placeholder="enter username" name="username">
    <br>
    <br>
    <input type="password" placeholder="enter password" name="password">
    <br>
    <br>
    <button>Sign Up</button> 
</form>
<?php

if(isset($_POST['username']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
    include("./config.php");
    $data=$conn->prepare("INSERT INTO `adminlogin` (`username`, `password`) VALUES ('$user', '$pass');");
    $result=$data->execute();

    if($result)
    {
        echo"Registration success";
    }
    else{
        echo "Registration failed";
    }

}


?>