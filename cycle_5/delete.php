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
    <form action="delete.php" method="POST">
        Enter the id to delete:
        <input type="number" name="id"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    require('conn.php');
    $id=$_POST['id'];
    $result=mysqli_query($con,"DELETE FROM student WHERE id='$id'");
    if(!$query)
    die("updation error".mysqli_error());
    else
    echo "Sucessfully deleted";
}
?>