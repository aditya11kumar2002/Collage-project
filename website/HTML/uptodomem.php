<?php
include("./connection.php");

$sql = "Select * from checkstatus";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$id = $_GET['updateid'];

$sql = "select * from checkstatus where id=$id ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$tk = $row['task'];
$ss = $row['status'];
?>


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
    <div class="title">Update To-Do-List</div>
   <form method="post">
    <div class="input-field">
        <label>Enter your Task:</label>
     <input type="text" placeholder="Enter challenging task" class="input" name="tak" autocomplete="off" value="<?php echo $tk ?>">
    </div>
    <label>Status:</label>
    <select name="ss">
        <option value="">Select</option>
        <option value="In progress"
        <?php 
        if($ss=='In progress' ){
            echo "selected";
        }
        ?>
        >In progress</option>
        <option value="Pending"
        <?php 
        if($ss=='Pending' ){
            echo "selected";
        }
        ?>
         >Pending</option>
    </select><br>
    <button name="submit">Update list</button>
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


  $sql = "update checkstatus set task='$tk',status='$sk'  where id='$id'";

 // echo $sql;
 $result = mysqli_query($conn, $sql);

    if ($result)
    {
   // echo "Data  not insert successfully";
    header('location:dashmem.php');
    } 
    else 
    {
    echo " not inserted";
    }
 }
?>