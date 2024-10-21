<?php 
  session_start();
  echo "welcome  ".$_SESSION['user_name'];

  $userprofile=$_SESSION['user_name'];

  if($userprofile == true){

  }
  else{
    header('location:stafflogin.php');
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
    a{
        color: white;
    }
    .logout{
        background-color: yellow;
    }
  </style>
</head>

<body>
        <div  class="home"> 
            <div class="logout">
        <a href="/workout fusion/website/HTML/logout.php"><input type="button" value="Logout" style="background:blue; color:white; height:35px; width:100px; cursor:pointer"></a>
            </div>
            <ul>
            <i class="fa fa-tachometer" aria-hidden="true"></i><li><a class="db" href="/workout fusion/website/HTML/chart.php" target="_blank">Dashboard</a</li>
            <li><i class="fa fa-money" aria-hidden="true"></i><a target="_blank" class="db" href="/workout fusion/website/HTML/regmempaylist.php">Payments</a></li>
                <li>Gym Equipment  <i class="fa fa-sort-desc" aria-hidden="true"></i> 
                    <div class="push">
                    <ul>
                      <li><a href="/workout fusion/website/HTML/gym equipment list.php" target="_blank">Gym Equipment List</a></li>
                      <li><a href="/workout fusion/website/HTML/add equipment.php" target="_blank"> Add Equipment</a></li>
                      <li><a href="/workout fusion/website/HTML/display equip.php" target="_blank">Update Equipment Details</a></li>
                      <li><a href="/workout fusion/website/HTML/dispequip_del.php" target="_blank">Remove Equipment Details</a></li>
                    </ul>
                    </div>
                </li>
               <i class="fa fa-users" aria-hidden="true"></i><li >Manage Member <i class="fa fa-sort-desc" aria-hidden="true"></i>
              <div class="dropdown">
                <ul>
                  <li><a href="/workout fusion/website/HTML/memberlist.php" target="_blank" >Member List    </a></li>
                  <li><a href="/workout fusion/website/HTML/memberentry.php">Member Entry Form </a></li>
                  <li><a href="/workout fusion/website/HTML/dispremomem.php">Remove Member </a> </li>
                  <li><a href="/workout fusion/website/HTML/display member.php">Update Member Details</a></li> 
                </ul>
                
              </div>
            
            
            </li>
            
            
          </ul>
          <!--<div class="Search">
            <input type="text" name="" id="" placeholder="Search this website">
            
            
          </div>-->
          <img src="/workout fusion/website/image/bgimg.jpg">


  </div>
   
  <div class="container" style="width: 96vw; padding:1.4rem; background-color:antiquewhite">
    <span>copyright</span>
    <span>&copy;</span>
    <span>|2024</span>
    <span>|Developed By Aditya Kumar</span>
 </div>



</body>

</html>
