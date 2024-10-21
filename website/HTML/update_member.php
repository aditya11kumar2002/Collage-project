<?php
include("./connection.php");

$sql = "Select * from member";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

$id = $_GET['updateid'];

$sql = "select * from member where serial_no=$id ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$n = $row['name'];
$un = $row['username'];
$pwd = $row['password'];
$gn = $row['gender'];
$mn = $row['mobile_no'];
$dn = $row['dor'];
$address = $row['address'];
$cn = $row['charge'];
$cs = $row['chosen_service'];
$pn = $row['plan'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/workout fusion/website/CSS/mementry.css">
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
  <div class="box">
    <form method="post">
      <div class="title">Member Registration Form</div>
      <div class="input-field">
        <label>Full Name:</label>
        <input type="text" placeholder="Enter Name" class="input" name="fn" value="<?php echo $n; ?>" autocomplete="off">
      </div>
      <div class="input-field">
        <label>Username:</label>
        <input type="email" placeholder="Enter username" class="input" name="un" value="<?php echo $un; ?>" autocomplete="off">
      </div>
      <div class="input-field">
        <label>Password:</label>
        <input type="password" placeholder="Enter password" class="input" name="pwd" value="<?php echo $pwd; ?>" autocomplete="off">
      </div>
      <div class="input-field">
        <label>D.O.R</label>
        <input type="date" placeholder="" class="input" name="dor" value="<?php echo $dn; ?>"><br>
        <small>Note: Date of Registration</small>
      </div>

      <div class="input-field">
        <label>Mobile no:</label>
        <input type="number" placeholder="Enter number" class="input" name="number" value="<?php echo $mn; ?>" autocomplete="off">

        <div class="input-field">
          <label>Total Price:</label>
          <input type="text" placeholder="eg.$50" class="input" name="cost" value=" <?php echo  $cn; ?>">
        </div>
      </div>
      <div class="input-field">
        <label>Address:</label>
        <textarea name="address" ><?php echo $address;?></textarea>
      </div>

      <div class="input-field">
        <label>Gender:</label>
        <select class="choose" name="gender">
          <option value="">Select Gender</option>
          <option value="Male"
          <?php
            if ($gn=='Male')
            {
              echo "selected";
            } 
            ?>
          
          >Male</option>
          <option value="Female"
          <?php
            if ($gn=='Female')
            {
              echo "selected";
            } 
            ?>
          
          >Female
          </option>
          <option value="Other"
          <?php
            if ($gn=='Other')
            {
              echo "selected";
            } 
            ?>
          >Other</option>

        </select>
      </div><br>
      <div class="input-field">
        <label>gym plans:</label>
        <select class="choose" name="plan">
          <option value="">selected</option>
          <option value="One Month"
          <?php
          if($pn=='One Month')
          {
            echo 'selected';  
          }

          ?>
          >
          one month</option>
          <option value="Three Month"
          <?php
          if($pn=='Three Month')
          {
            echo 'selected';  
          }

          ?>
          >three month</option>
          <option value="One Year"
          <?php
          if($pn=='One Year')
          {
            echo 'selected';  
          }
          ?>
          >one year</option>

        </select>
      </div><br>
      <div class="input-field">
        <label style="font-weight: bold;font-size:1.2rem">Gym Services:</label><br>

        <input type="radio" name="service" value="fitness"
        <?php 
        if($cs=="fitness")
        {
          echo 'checked';
        }
        
        ?>
        > Fitness-$45-per month
        <input type="radio" name="service" value="cardio"
        <?php 
        if($cs=="cardio")
        {
          echo 'checked';
        }
        
        ?>
        >cardio-$50-per month
        <input type="radio" name="service" value="sauna"
        <?php 
        if($cs=="sauna")
        {
          echo 'checked';
        }
        
        ?>
        >Sauna-$60-per month
      </div>
      <br>
      <button name="submit">Update</button>
    </form>

  </div>

</body>

</html>

<?php
include("./connection.php");
//$id=$_GET['updateid'];
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


  $sql = "update member set name='$name',username='$username',password='$pass',
  gender='$gender',mobile_no='$contact',dor='$dor',address='$address',charge='$price',chosen_service='$services',plan='$plans'  where serial_no='$id'";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    // echo "Data update successfully";
    header('location:display member.php');
  } else {
    echo " not inserted";
  }
}



?>