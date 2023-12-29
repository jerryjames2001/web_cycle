<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightblue;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    require('display.php');
    ?>
<form action="update.php" method="post">
    Select the option to update 
    <select name="head">
        <option value="fname">fname</option>
        <option value="lname">lname</option>
        <option value="gender">gender</option>
        <option value="email">email</option>
        <option value="department">department</option>
    </select><br>
    Id:<input type="number" name="idd"><br>
    <input type="text" name="upd" placeholder="new data"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    require('conn.php');
    $value=$_POST['head'];
    $id=$_POST['idd'];
    $data=$_POST['upd'];
    $query=mysqli_query($con,"UPDATE STUDENT SET $value='$data' WHERE id='$id'");
    if(!$query)
    die("updation error".mysqli_error());
else
echo "Sucessfully updated";
}
?>