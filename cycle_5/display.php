<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{border:2px solid black;}
        td{border:2px solid blue;}
        </style>
</head>
<body>
    
<?php

require('conn.php');
echo "<table><tr>
<th>id</th>
<th>fname</th>
<th>lname</th>
<th>gender</th>
<th>email</th>
<th>department</th></tr>";
$query=mysqli_query($con,"SELECT * FROM STUDENT");
while($fetch=mysqli_fetch_assoc($query))
{
echo "<tr><td>",$fetch['id'],"</td>";
echo "<td>",$fetch['fname'],"</td>";
echo "<td>",$fetch['lname'],"</td>";
echo "<td>",$fetch['gender'],"</td>";
echo "<td>",$fetch['email'],"</td>";
echo "<td>",$fetch['department'],"</td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html>