<!-- /* The code you provided is a PHP script that inserts data into a database table named "STUDENT". */ -->
<?php
require('conn.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$dep=$_POST['department'];

$result=mysqli_query($con,"INSERT INTO STUDENT(fname,lname,gender,email,department) VALUES ('$fname','$lname','$gender','$email','$dep')");
if($result)
echo "Inserted sucessfully";
else
echo "Error in inmsertion";
?>