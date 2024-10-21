<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}
body{
    background-color: blue;
}
.title{
    text-transform: uppercase;
    font-size: 50px;
    font-weight: 700;
    text-align: center;
    margin-top: 20px;
}
button{
    margin-left: 40px;
    margin-top: 70px;
    background-color: brown;
   width: 130px;

}
button:hover{
    background-color: blueviolet;
}
textarea{
    resize: none;
    width: 750px;
    height: 100px;
    border: 2px solid red;
    outline: none;
    margin-top: 50px;
    margin-left: 180px;
    font-size: 20px;
}
.box form  .make{
    position: relative;
    top: 50px;
    left: 190px;
    margin-bottom:10px;
    font-weight: 600;
    color: yellow;
}
 .box form .tarik{
  position:relative;
  top: 70%;
  left: 180px;
  margin-top: 10px;
  color: red;
}
.box form .btn{
    position: relative;
    left: 450px;
    background-color: orangered;
    width: 90px;
}
.box form .btn:hover{
    background-color: yellow;
}
a{
    text-decoration: none;
}
</style>
<body>
    <div class="title">Announcement</div>
        
<button ><a href="/workout fusion/website/HTML/dispannounceadmin.php">Manage Announcement</a> </button>
<div class="box">
<form method="post">
<label class="make">Make Announcement</label> <br><textarea placeholder="Enter notice" name="description"></textarea>
    <div class="tarik"> 
    <label class="date">Applied Date:</label>
       <input type="date" name="db">
    </div>
    <input type="submit" value="Publish Now" class="btn" name="submit">
</form>
    </div>
</body>
</html>
<?php
include("./connection.php");
if (isset($_POST['submit'])) {
  $name = $_POST['description'];
  $date = $_POST['db'];


  $sql = "insert into notice values('','$name','$date')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    //echo "Data  not insert successfully";
    header('location:menubar.php');
  } //else {
    //echo " not inserted";
 // }
}

?>