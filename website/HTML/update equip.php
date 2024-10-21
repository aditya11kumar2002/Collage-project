<?php
include("./connection.php");

$sql = "Select * from equipment";
$result = mysqli_query($conn, $sql);
$data=mysqli_fetch_assoc($result);

$id=$_GET['updateid'];

$sql="select * from equipment where number=$id ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$en=$row['equipment_name'];
$dn=$row['Description'];
$qn=$row['quantity'];
$pn=$row['Price'];
$sn=$row['supplier'];
$cn=$row['contact_no'];
    

 ?>

<!DOCTYPE html>
 <html lang="en">

<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/workout fusion/website/CSS/updequip.css">
   <title>UPDATE OPERATION</title>
 </head>
 <style>
   input::-webkit-outer-spin-button,
   input::-webkit-inner-spin-button {
     -webkit-appearance: none;
   margin: 0;
  }

 </style>

 <body>
 <div class="container">
         <form  method="post">
     <div class="title"> Update Equipment  Entry</div>
      <div class="input-field">
         <label>Equipment:</label>
           <input type="text" value="<?php echo $en; ?>" placeholder="Enter Equipment Name" class="input"  name="name" autocomplete="off">
      </div>
       <div class="input-field">
           <label>Description:</label>
             <input type="text" value="<?php echo $dn; ?>" placeholder="Short Description" class="input"  name="desc" autocomplete="off">
       </div>
         <div class="input-field">
           <label>Quantity:</label>
            <input type="number" value="<?php echo $qn; ?>" placeholder="Equipment quantity" class="input"  name="qty" autocomplete="off">
         </div>
         <div class="input-field">
          <label>Price:</label>
            <input type="text" value="<?php echo $pn; ?>" placeholder="Enter cost" class="input" name="price"  autocomplete="off">
         </div>
         <div class="input-field">
          <label>Supplier:</label>
              <input type="text" value="<?php echo $sn; ?>" placeholder="Enter supplier name" class="input" name="supplier"  autocomplete="off">
         </div>
         <div class="input-field">
             <label>Contact No:</label>
            <input type="number" value="<?php echo $cn; ?>" placeholder="Enter mobile no" class="input" name="number" >

         </div>
     <button type="submit" name="submit">Update</button>
    
    
     </form>



     </div>

 </body>

 </html>

 <?php
 include("./connection.php");
$id=$_GET['updateid'];

//$sql="select * from equipment where id=$id";
// $result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
 
// $nm=$row['number'];
// $em=$row['equipment_name'];
// $desc = $row['Description'];
// $qty = $row['quantity'];
// $cost = $row['Price'];
// $sp = $row['supplier'];
// $mobile = $row['contact_no'];

if (isset($_POST['submit'])) 
{
$name = $_POST['name'];
$description = $_POST['desc'];
$quantity = $_POST['qty'];
$cost = $_POST['price'];
$vendor= $_POST['supplier'];
$mobile = $_POST['number'];



  $sql = "update equipment set equipment_name='$name',Description='$description',quantity='$quantity',
  Price='$cost',supplier='$vendor',contact_no='$mobile'  where number='$id'";

 $result = mysqli_query($conn, $sql);
 
  if ($result) 
  {
    // echo "Data update successfully";
     header('location:display equip.php');
   } else 
   {
     echo " not inserted";
   
}
}



?>