<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/workout fusion/website/css/addequip.css">
    <title>Add equipment</title>
</head>
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
</style>


<body>
<script>
        function data()
        {
    var a=document.getElementById("n1").value;
    var b=document.getElementById("n2").value;
    var c=document.getElementById("n3").value;
    var d=document.getElementById("n4").value;
    var e=document.getElementById("n5").value;
    var f=document.getElementById("n6").value;



if(a==""||b==""||c==""||d==""||e==""||f=="")
{
    alert("All fields are mandatory");
    return false;
}
 else if(f.length<10 || f.length>10||f<0)
{
    alert("Number should be of 10 digits ! please enter valid number");
    return false;
}
else{
    return true;
}
        }
        </script>
    <div class="container">
        <form onsubmit="return data()" action="" method="post">
    <div class="title">Equipment  Entry</div>
     <div class="input-field">
        <label>Equipment:</label>
          <input type="text" placeholder="Enter Equipment Name" class="input" id="n1" name="name" autocomplete="off">
     </div>
      <div class="input-field">
          <label>Description:</label>
            <input type="text" placeholder="Short Description" class="input" id="n2" name="desc" autocomplete="off">
      </div>
        <div class="input-field">
          <label>Quantity:</label>
           <input type="number" placeholder="Equipment quantity" class="input" id="n3" name="qty" autocomplete="off">
        </div>
        <div class="input-field">
         <label>Price:</label>
            <input type="text" placeholder="Enter cost" class="input" name="price" id="n4" autocomplete="off">
        </div>
        <div class="input-field">
          <label>Supplier:</label>
             <input type="text" placeholder="Enter supplier name" class="input" name="supplier" id="n5" autocomplete="off">
        </div>
        <div class="input-field">
            <label>Contact No:</label>
             <input type="number" placeholder="Enter mobile no" class="input" name="number" id="n6">

        </div>
      <button name="submit">Submit</button>
    
    
    </form>



    </div>
</body>
</html>
<?php
include("./connection.php");
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $description = $_POST['desc'];
  $quantity = $_POST['qty'];
  $cost = $_POST['price'];
  $vendor= $_POST['supplier'];
  $mobile = $_POST['number'];


  $sql = "insert into equipment values('','$name','$description','$quantity','$cost','$vendor','$mobile')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    //echo "Data  not insert successfully";
    header('location:gym equipment list.php');
  } //else {
    //echo " not inserted";
 // }
}
?>