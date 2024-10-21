<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: aquamarine;
        }
        .box{
            background-color: blue;
            margin: 30px auto;
            position: relative;
            right: 120px;
            height: 150px;
            width: 390px;
        }
        label{
            font-size: 30px;
        }
        .title{
            font-weight: 700;
            font-size: 40px;
            text-align: center;
        }
        button{
            position: relative;
            left:80px;
        }
        .box form .input-field .input{
            width: 150px;
        }
        button{
            color: white;
            background-color:red;
            width: 100px;
            position: relative;
            top: 10px;
        }
button:hover{
    background-color: purple;
}
.head{
    background-color: whitesmoke;
    padding-bottom: 20px;
}
    </style>
</head>
<body>
<div class="head">
        <header><i class="fa fa-home" aria-hidden="true"></i>Home</header>
    </div>
    <div class="box">
    <div class="title">To-Do-List</div>
   <form method="post">
    <div class="input-field">
        <label>Enter your Task:</label>
     <input type="text" placeholder="Enter challenging task" class="input" name="tak" autocomplete="off">
    </div>
    <label>Status:</label>
    <select name="ss">
        <option>Select</option>
        <option value="In progress">In progress</option>
        <option value="Pending">Pending</option>
    </select><br>
    <button name="submit">Add list</button>
   </form>

    </div>
</body>
</html>
<?php
include("./connection.php");

if (isset($_POST['submit'])) 
{
  $tk = $_POST['tak'];
  $sk= $_POST['ss'];


  $sql = "insert into checkstatus (task,status) values('','$tk','$sk')";
  echo $sql;
 $result = mysqli_query($conn, $sql);

    if ($result)
    {
    echo "Data  not insert successfully";
    header('location:dashmem.php');
    } 
    else 
    {
    echo " not inserted";
    }
 }
?>