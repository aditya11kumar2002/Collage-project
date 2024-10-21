<?php
include("./config.php");
$data=$conn->prepare("select * from adminlogin");
$data->execute();
$data=$data->fetchAll();
// echo "<pre>";
// print_r($data);
// echo "</pre>";

echo "<table border='2'cellpadding='5' cellspacing=0 >


<tr>
<th>Username</th>
<th>Password</th>
</tr>
";

foreach($data as $admin)
{
    echo "<tr>
    <td>".$admin['username']."</d>
    <td>".$admin['password']."</d>
    </tr>";
}
echo "</table>";
?>