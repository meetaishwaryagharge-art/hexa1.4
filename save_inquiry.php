<?php

$conn = new mysqli("localhost","root","","inquiry_db");

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries (name,email,phone,message)
VALUES ('$name','$email','$phone','$message')";

if($conn->query($sql) === TRUE){
    echo "Inquiry submitted successfully!";
}
else{
    echo "Error: " . $conn->error;
}

$conn->close();

?>