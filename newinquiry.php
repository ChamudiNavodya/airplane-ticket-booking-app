<?php

require 'connect.php';

$Full_Name = $_POST['fname1'];
$Email_Address = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$sql = "INSERT INTO personal(Full_Name, Email_Address, Subject,Message) VALUES ('$Full_Name', '$Email_Address', '$Subject' , '$Message')";

if($con->query($sql)){
    echo ("Insert Successfully");
}
else{
echo "Error:". $con->error;
}
$con->close();


?>