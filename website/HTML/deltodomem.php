<?php
include('./connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from checkstatus where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Delete Succesfully";
       header('location:dashmem.php');
    }
    else{
        echo "Not deleted";
    }
}

?>