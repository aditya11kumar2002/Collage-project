<?php
include('./connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from equipment where number=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Delete Succesfully";
       header('location:dispequip_del.php');
    }
    else{
        echo "Not deleted";
    }
}
?>