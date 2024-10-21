<?php
session_start();
echo "welcome  " . $_SESSION['user_name'];

$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
  header('location:customerlogin.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menubar</title>
  <link rel="stylesheet" href="/workout fusion/website/CSS/memmenu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .navbar {
      position: fixed;
      width: 100%;
    }

    a {
      color: white;
    }

    .log {
      background-color: blue;
      width: 100px;
      height: 30px;
      position: relative;
      left: 170px;
      bottom: 20px;
    }
    .logout {
      background-color: aquamarine;
    }
    .title{
      background-color: blueviolet;
      color:yellow;
      font-size: 100px;
      text-transform: uppercase;
      font-weight: 800;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>

<body>
  <nav class="navbar">

    <div class="home">
      <div class="logout">
        <a href="/workout fusion/website/HTML/logcustomer.php"><input class="log" type="button" value="Logout"></a>
      </div>
      <ul>
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        <li><a class="db" href="/workout fusion/website/HTML/dashmem.php" target="_blank">Dashboard</a></li>

        <li><i class="fa fa-clock-o" aria-hidden="true"></i><a target="_blank" href="/workout fusion/website/HTML/remindmem.php">Reminder</a></li>
        <li><a target="_blank" href="/workout fusion/website/HTML/to_domem.php">To-Do</a>
        </li>

        <i class="fa fa-bullhorn" aria-hidden="true"></i>
        <li><a class="am" href="/workout fusion/website/HTML/announcemem.php" target="_blank"> Announcement</a></li>
        <i class="fa fa-file" aria-hidden="true"></i>
        <li><a class="rs" href="#" target="_blank">Reports</a></li>


      </ul>
      <!--<div class="Search">
            <input type="text" name="" id="" placeholder="Search this website">
            
            
          </div>-->



    </div>

    <div class="title">WORKOUT FUSION</div>
  </nav>

  <img src="/workout fusion/website/image/bgimg.jpg">

  <div class="container" style="width: 96vw; padding:1.4rem; background-color:antiquewhite">
    <span>copyright</span>
    <span>&copy;</span>
    <span>|2024</span>
    <span>|Developed By Aditya Kumar</span>
 </div>
</body>

</html>