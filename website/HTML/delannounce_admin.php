<?php
include('./connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from notice where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Delete Succesfully";
       header('location:dispannounceadmin.php');
    }
    else{
        echo "Not deleted";
    }
}
?>