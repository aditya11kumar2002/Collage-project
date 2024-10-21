<?php
include('./connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from member where serial_no=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       // echo "Delete Succesfully";
       header('location:dispremomem.php');
    }
    else{
        echo "Not deleted";
    }
}

?>