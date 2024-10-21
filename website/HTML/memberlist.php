<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Member list</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        margin-top: 0px;
    }
    td{
        padding: 10px 12px;
        text-align: center;
    }
    a .upd{
        background-color: blue;
        color: red;
    }
    .box .title{
        text-align: center;
        color:blue;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 50px;
    }

</style>

<body class="box">
    <div class="box">
      <!--  <button><a href="/crud/user.php">Add member</a></button>-->
      <div class="title">Registered Member List</div>
      <center> <table class="table" cellpadding="6" cellspacing="0" width="69.8%" style="background:green">
            <tr>
            <th width="5px"><i class="fa fa-th" aria-hidden="true"></i></th> 
            <th style="color:white">  Member  Table </th>  
            
            </tr>
               
        </center>
</table>

        <center> <table class="table" cellpadding="7" cellspacing="0">
            <thead>
                <tr>
                    <th>sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col" width="10%">Username</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Mobile no</th>
                    <th scope="col" width="20%">Date of Register</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
                    <th scope="col">Service Taken</th>
                    <th scope="col">Plan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('./connection.php');
                $sql = "Select * from member ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['serial_no'];
                        $name = $row['name'];
                        $user = $row['username'];
                        $gn = $row['gender'];
                        $mn = $row['mobile_no'];
                        $dr = $row['dor'];
                        $as = $row['address'];
                        $cn = $row['charge'];
                        $cs = $row['chosen_service'];
                        $p = $row['plan'];
                        echo  ' <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $user . '</td>
      <td>' . $gn. '</td>
      <td>' . $mn. '</td>
      <td>' . $dr. '</td>
      <td>' . $as. '</td>
      <td>' . $cn. '</td>
      <td>' . $cs. '</td>
      <td>' . $p. '</td>
      
    </tr>';
                    }
                }
                ?>

                <!--  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>