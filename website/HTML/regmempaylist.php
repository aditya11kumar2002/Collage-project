<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display operation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .update 
        {
            color:  white;
            text-decoration: none;
            position: relative;
            left: 2px;
            
            
        }
      /*  .delete 
        {
            color:  white;
            text-decoration: none;
            position: relative;
            left: 2px;
            position: relative;
            left: 2px;
            
            
        }*/
        .btn
        {
            background-color: blue;
            border-radius: 5px;

        }
         body{
            position: relative;
            top:100px;
        }
     /*   .btn1
        {
            background-color: red;
            border-radius: 5px;

        }*/

    </style>
</head>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        padding: 10px 12px;

        text-align: center;
    }
    a .upd{
        background-color: blue;
        color: red;
    }
</style>

<body>
       <script>
           function remind(){
            alert("notification sent to selected customer!");
           }

       </script>
<!-- <button><a href="/crud/user.php">Add member</a></button>-->
        <center> <table class="table" cellpadding="7" cellspacing="0" width="95%" style="background:green">
            <tr>
            <th width="5px"><i class="fa fa-th" aria-hidden="true"></i></th> 
            <th style="color:white">Member Payment Table </th>  
            
            </tr>
               
        </center>
</table>
            

        <center> <table class="table" cellpadding="7" cellspacing="0">
    
            <thead>
                <tr>
                <th>sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col" width="10%">Last Payment Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Service Taken</th>
                    <th scope="col">Plan</th>
                    <th scope="col" width="10%">Action</th>
                    <th scope="col" width="10%">Remind</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('./connection.php');

                $sql = "Select * from member";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
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
      <td>' . $gn. '</td>
      <td>' . $dr. '</td>
      <td>' . $cn. '</td>
      <td>' . $cs. '</td>
      <td>' . $p. '</td>
      <td>
      <button class="btn"><i id="update" class="fa fa-pencil-square-o" aria-hidden="true"></i><a  href="/workout fusion/website/HTML/updatemempaylist.php?updateid='.$id.'" class="update">Make Payment</a></button>
        </td>
        <td>
           <button onclick="remind()"style="color:white; background:red;" >Alert</button>
        </td>
    </tr>';
                    }
}
?>
            </tbody>
        </table>
    </div>
</body>

</html>