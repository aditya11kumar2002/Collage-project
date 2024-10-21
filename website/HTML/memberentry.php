<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/workout fusion/website/CSS/mementry.css">
  <title>Member Entry Form</title>
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
    var g=document.getElementById("n7").value;
    var h=document.getElementById("n8").value;
    var i=document.getElementById("n9").value;




if(a==""||b==""||c==""||d==""||e==""||f==""||g==""||h==""||i=="")
{
    alert("All fields are mandatory");
    return false;
}
 else if(e.length<10 || e.length>10||e<0)
{
    alert("Number should be of 10 digits ! please enter valid number");
    return false;
}
else{
    return true;
}
        }
        </script>
  <div class="box">
    <form method="post" onsubmit="return data()">
      <div class="title">Member Registration Form</div>
      <div class="input-field">
        <label>Full Name:</label>
        <input type="text" placeholder="Enter Name" class="input" name="fn" id="n1" autocomplete="off">
      </div>
      <div class="input-field">
        <label>Username:</label>
        <input type="email" placeholder="Enter username" class="input" name="un" id="n2" autocomplete="off">
      </div>
      <div class="input-field">
        <label>Password:</label>
        <input type="password" placeholder="Enter password" class="input" name="pwd" id="n3" autocomplete="off">
      </div>
      <div class="input-field">
        <label>D.O.R</label>
        <input type="date" placeholder="" class="input" name="dor" id="n4" autocomplete="off"><br>
        <small>Note: Date of Registration</small>
      </div>

      <div class="input-field">
        <label>Mobile no:</label>
        <input type="number" placeholder="Enter number" class="input" name="number" id="n5" autocomplete="off">

        <div class="input-field">
          <label>Total Price:</label>
          <input type="text" placeholder="eg.50rs" class="input" name="cost" id="n6" autocomplete="off">
        </div>
      </div>
      <div class="input-field">
        <label>Address:</label><br>
        <textarea name="address" id="n7" autocomplete="off"></textarea>
      </div>

      <div class="input-field">
        <label>Gender:</label>
        <select class="choose" name="gender" id="n8">
          <option>Select</option>
          <option>Male</option>
          <option>Female</option>
          <option>others</option>

        </select>
      </div><br>
      <div class="input-field">
        <label>gym plans:</label>
        <select class="choose" name="plan" id="n9">
          <option>select</option>
          <option>one month</option>
          <option>three month</option>
          <option>one year</option>

        </select>
      </div><br>
      <div class="input-field">
        <label style="font-weight: bold;font-size:1.2rem">Gym Services:</label><br>
        <input type="radio" name="service"  value="fitness" required>Fitness-$45-per month
        <input type="radio" name="service"  value="cardio" required>cardio-$50-per month
        <input type="radio" name="service"   value="sauna" required>Sauna-$60-per month
      </div>
      <br>
      <button name="submit">Submit</button>
    </form>

  </div>
</body>

</html>

<?php
include("./connection.php");
if (isset($_POST['submit'])) {
  $name = $_POST['fn'];
  $username = $_POST['un'];
  $pass = $_POST['pwd'];
  $dor = $_POST['dor'];
  $contact = $_POST['number'];
  $price = $_POST['cost'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $plans = $_POST['plan'];
  $services = $_POST['service'];


  $sql = "insert into member values('','$name','$username','$pass','$gender','$contact','$dor','$address','$price','$services','$plans')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    //echo "Data  not insert successfully";
    header('location:memberlist.php');
  } //else {
  //echo " not inserted";
  // }
}
?>