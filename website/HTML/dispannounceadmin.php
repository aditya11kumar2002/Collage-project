<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .delete 
        {
            color:  white;
            text-decoration: none;
            position: relative;
            left: 2px;
            position: relative;
            left: 2px;
            
            
        }
         body{
            position: relative;
            top:100px;
            background-color:blueviolet;
        }
       .btn1
        {
            background-color: red;
            border-radius: 5px;

        }

</style>
</head>
<body>
    <div>
<center> <table class="table" cellpadding="6" cellspacing="0" width="45%" style="background:green">
            <tr>
            <th width="5px"><i class="fa fa-th" aria-hidden="true"></i></th> 
            <th style="color:white">Announcement Table</th>  
            
            </tr>
               
        </center>
</table>
<center> <table class="table" cellpadding="7" cellspacing="0">
            <thead>
                <tr>
                    <th>sl no</th>
                    <th scope="col" width="50%">Notice</th>
                    <th scope="col" width="30%">Date</th>
                    <th scope="col" >Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include('./connection.php');
                $sql = "Select * from notice ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['announce'];
                        $dop = $row['dop'];
                        echo  ' <tr>
      <th scope="row">' . $id . '</th>
      <td>' . $name . '</td>
      <td>' . $dop . '</td>
      <td>
      <button class="btn1"><i class="fa fa-trash" aria-hidden="true"></i><a href="/workout fusion/website/HTML/delannounce_admin.php?deleteid='.$id.'" class="delete">Delete</a></button>
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
    </div>
</body>
</html>