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
       <!-- <button><a href="/crud/user.php">Add member</a></button>-->
        <center> <table class="table" cellpadding="7" cellspacing="0" width="60.4%" style="background:green">
            <tr>
            <th width="5px"><i class="fa fa-th" aria-hidden="true"></i></th> 
            <th style="color:white">Equipment  Table </th>  
            
            </tr>
               
        </center>
</table>
            

        <center> <table class="table" cellpadding="7" cellspacing="0">
    
            <thead>
                <tr>
                    <th>Sr no</th>
                    <th scope="col">E-Name</th>
                    <th scope="col">Deescription</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Contact no</th>
                    <th scope="col" width="20%">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('./connection.php');

                $sql = "Select * from equipment ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        $id = $row['number'];
                        $name = $row['equipment_name'];
                        $desc = $row['Description'];
                        $qty = $row['quantity'];
                        $cost = $row['Price'];
                        $sp = $row['supplier'];
                        $mobile = $row['contact_no'];

                        echo  ' <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $desc . '</td>
      <td>' . $qty . '</td>
      <td>' . $cost. '</td>
      <td>' . $sp. '</td>
      <td>' . $mobile. '</td>
      <td>
      <button class="btn"><i id="update" class="fa fa-pencil-square-o" aria-hidden="true"></i><a  href="/workout fusion/website/HTML/update equip.php?updateid='.$id.'" class="update">Update</a></button>
        </td>
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