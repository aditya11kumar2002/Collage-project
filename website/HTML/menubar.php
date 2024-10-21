<?php
session_start();


$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
  header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menubar</title>
  <link rel="stylesheet" href="/workout fusion/website/CSS/1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    a {
      color: white;
    }
    .title{
      background-color:purple;
      font-size:70px;
      font-weight: 800;
      color: yellow;
      position: relative;
      text-align: center;
      margin-top: 30px;
    }
  </Style>
</head>

<body>
  <div class="home">
    <div class="logout" style="position: fixed; display: flex; align-items:center; justify-content:space-between; background-color: black;  ">
      <div style="color: white;">
        <?php echo "welcome " . $_SESSION['user_name']; ?>
      </div>
      <a href="/workout fusion/website/HTML/logadmin.php"><input type="button" value="Logout" style="color:white; background:red;"></a>
    </div>
    <nav style="position: fixed; width:100%; top:20px;">
      <ul>
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <li><a class="db" href="/workout fusion/website/HTML/chart.php" target="_blank">Dashboard</a></li>
        <li><a target="_blank" href="/workout fusion/website/HTML/regmempaylist.php">Payments</a></li>
        <li>Gym Equipment <i class="fa fa-sort-desc" aria-hidden="true"></i>
          <div class="push">
            <ul>
              <li><a href="/workout fusion/website/HTML/gym equipment list.php" target="_blank">Gym equipment List</a></li>
              <li><a href="/workout fusion/website/HTML/add equipment.php" target="_blank"> Add Equipment</a></li>
              <li><a href="/workout fusion/website/HTML/display equip.php" target="_blank">Update Equipment Details</a></li>
              <li><a href="/workout fusion/website/HTML/dispequip_del.php" target="_blank">Remove Equipment Details</a></li>
            </ul>
          </div>
        </li>
        <i class="fa fa-users" aria-hidden="true"></i>
        <li>Manage Member <i class="fa fa-sort-desc" aria-hidden="true"></i>
          <div class="dropdown">
            <ul>
              <li><a href="/workout fusion/website/HTML/memberlist.php" target="_blank">Member List </a></li>
              <li><a href="/workout fusion/website/HTML/memberentry.php">Member Entry Form </a></li>
              <li><a href="/workout fusion/website/HTML/dispremomem.php">Remove Member </a> </li>
              <li><a href="/workout fusion/website/HTML/display member.php">Update Member Details</a></li>
            </ul>

          </div>


        </li>
        <i class="fa fa-bullhorn" aria-hidden="true"></i>
        <li><a class="am" href="/workout fusion/website/HTML/announceadmin.php" target="_blank"> Announcement</a></li>
        <i class="fa fa-file" aria-hidden="true"></i>
        <li><a class="rs" href="#" target="_blank">Reports</a></li>


      </ul>
      <!--<div class="title">WORKOUT FUSION</div>-->
    </nav>

    <!--<div class="Search">
            <input type="text" name="" id="" placeholder="Search this website">
            
         </div>-->

    <img src="/workout fusion/website/image/bgimg.jpg" style="z-index: 1;">


  </div>

  </div>

<!-- footer -->
 <div class="container" style="width: 96vw; padding:1.4rem; background-color:antiquewhite">
    <span>copyright</span>
    <span>&copy;</span>
    <span>|2024</span>
    <span>|Developed By Aditya Kumar</span>
 </div>


</body>

</html>