<html>

<head>
  <link rel="stylesheet" href="/workout fusion/website/CSS/chart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Assistant', 11],
        ['Trainer', 2],
        ['Manager', 2],
        ['coordinator', 2],
        ['cashier', 7]
      ]);

      var options = {
        title: 'Staff Members by Designation'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Male', 12],
        ['Female', 12],
      ]);

      var options = {
        title: 'Gym Member by gender',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    td {
      padding: 10px 12px;
      text-align: center;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: blue;
    }


    .head {
      background-color: whitesmoke;
      padding: 20px;
    }
    .meet{
position: relative;
bottom: 407px;
    }
    .follow{
      position: relative;
      top: 720px;
      left: 400px;
    }
    .contact{
      position: relative;
      top: 660px;
      left:550px;
    }
    .service{
      position: relative;
      top: 600px;
      left: 170px;
    }
    a{
      text-decoration: none;
      color: purple;
    }
  </style>

<body>
  <div class="head" style="position: sticky-top;width:100%; z-index:5;">
    <header><i class="fa fa-home" aria-hidden="true"></i>Home</header>
  </div>

    <table class="table" cellpadding="7" cellspacing="0" width="100%" style="background:yellow; margin:0">
      <tr>
        <th width="15px"><i class="fa fa-caret-down" aria-hidden="true"></i></th>
        <th style="color:black">Gym Announcements </th>
      </tr>

    </table>
    <div class="meet">
    <table class="trial" cellpadding="7" cellspacing="0" width="100%" height="250px" style="background:white;">
      <tr>
        <th width="20px" height="50px"> <i class="fa fa-bullhorn" aria-hidden="true"></i>
          <marquee behavior="" direction="">This is demo Announcements</marquee>
        </th>
      </tr>
      <tr>
        <th width="20px" height="20px">
          <marquee>Rennovation Going On..</marquee>
        </th>
      </tr>
      <tr>
        <th width="20px" height="20px">
          <marquee>This is Announce that our gym is closed for 30 days due to emergency</marquee>
        </th>
      </tr>
  </div>
  <div class="container" style="display: flex; position:relative; top:670px; align-items:center; margin-left:30%;">
    <div id="piechart" class="chart" style="margin-right: 10px;"></div>
    <div id="donutchart" class="chart"></div>
  </div>
<div class="follow">
  <ul>Follow us
 <li><a href="https://youtube.com/@technoworld2023?si=JBw-ryAcvuBcZ4qp">youtube</a></li>
 <li><a href="https://www.facebook.com/profile.php?id=100076827739871&mibextid=ZbWKwL">facebook</a></li>
  </ul>
</div>
<div class="contact">
  <ol>Contact info<br>
     <li>Address:Jharkhand,Ranchi,india</li>
     <li>Email:aditya2002.kumar11@gmail.com</li>
  </ol>
</div>
<div class="service">
  <ul>Services:
<li>Proper Equipment for workout</li>
<li>Charge is affordable</li>
<li>Best trainer</li>
<li>A.C facility</li>
  </ul>
</div>
</body>

</html>