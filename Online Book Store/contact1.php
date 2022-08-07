<?php
include './functions/database_functions.php';
if(isset($_POST['contact_submitted'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $enquiry=$_POST['enquiry'];
    echo $name,$email,$enquiry,$sub;
$sql="INSERT INTO `contact` (`id`, `name`, `email`, `sub`, `message`) VALUES (NULL, '$name', '$email', '$sub', '$enquiry')";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("Your feed back is very importent to us we will get back to you soon")</script>';
    echo '<META http-equiv="refresh" content="0;contact">';
}
else
{
    echo '<script>alert("DB Error")</script>';
    echo '<META http-equiv="refresh" content="0;contact">';
}
}
else
{
     echo '<META http-equiv="refresh" content="0;contact">';
}
    ?>

