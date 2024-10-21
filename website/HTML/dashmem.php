<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="/workout fusion/website/CSS/dashmember.css"> -->
    <title>Document</title>
</head>
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
        background-color: aliceblue;
        padding-bottom: 10px;
        font-size: 20px;
    }

    .tb {
        margin-top: 20px;
        position: relative;
        right: 370px;
        cursor: pointer;
    }

    .shout {
        position: relative;
        left: 170px;
        bottom: 75px;
    }

    .update {
        color: white;
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
    .btn {
        background-color: blue;
        border-radius: 5px;
    }

    .delete {
        color: white;
        text-decoration: none;
        position: relative;
        left: 2px;
        position: relative;
        left: 2px;


    }

    /*  .btn
        {
            background-color: blue;
            border-radius: 5px;

        }*/
    .btn1 {
        background-color: red;
        border-radius: 5px;

    }


    /*.container {
        width: 30%;
        height: 300px;
        border: 1px solid black;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -10%);
    }

    .container2 {
        position: relative;
        top: 5%;
        width: 100%;
        height: 250px;
        border: 1px solid black;

    }*/
</style>

<body>
    <div class="head">
        <header><i class="fa fa-home" aria-hidden="true"></i>Home</header>
    </div>
    <div class="tb">
        <center>
            <table class="table" cellpadding="7" cellspacing="0" width="30%" style="background:blue">
                <tr>
                    <th width="15px"><i class="fa fa-clock-o" aria-hidden="true"></i></th>
                    <th style="color:black">My To-do List </th>
                </tr>

            </table>
        </center>

        <center>
            <table class="table" cellpadding="7" cellspacing="0" width="30%" style="background:whitesmoke">
                <thead>
                    <tr>
                        <th width="50%">Description</th>
                        <th>Status</th>
                        <th width="50%">Option</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('connection.php');
                    $sql = "Select * from checkstatus";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $tk = $row['task'];
                            $name = $row['status'];
                            echo  ' 
                            <tr>
                                <th scope="row">' . $tk .'</th>
                                <td>' . $name . '</td>
        
                                <td>

                                <button class="btn"><i id="update" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <a  href="/workout fusion/website/HTML/uptodomem.php?updateid=' . $id . '" class="update">Update</a></button>
                                
                                <button class="btn1"><i class="fa fa-trash" aria-hidden="true"></i>
                                <a href="/workout fusion/website/HTML/deltodomem.php?deleteid=' . $id . '" class="delete">Delete</a></button>

                                </td>
                            </tr>';
                        }
                    }
                    ?>

                </tbody>
            </table>
    </div>
    </center>
    </div>
    <div class="shout">
        <center>
            <table class="table" cellpadding="7" cellspacing="0" width="30%" style="background:yellow">
                <tr>
                    <th width="15px"><i class="fa fa-caret-down" aria-hidden="true"></i></th>
                    <th style="color:black">Gym Announcements </th>
                </tr>

        </center>
        </table>
        <center>
            <table class="trial" cellpadding="7" cellspacing="0" width="30%" height="250px" style="background:white">
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

        </center>
        </table>

    </div>


    <!-- <div class="container">
        <div class="container2">

        </div><br>
        <button type="submit" style="position: relative;bottom:5px;padding:10px 5px">submit</button>
    </div>-->
</body>

</html>