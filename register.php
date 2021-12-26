<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];

// echo "FirstName: $firstName \n" ;
// echo "LastName: $lastName \t" ;
// echo "CompanyName: $companyName\n";
// echo "Email: $email";

//Database connection here
$conn = new mysqli("localhost","root","","test");
if($conn->connect_error) {
    die('Failed to connect :' .$con->connect_error);
} else{
    $stmt=$conn->prepare("Insert into registration(firstName, lastName, companyName, email) value(?,?,?,?)"); 
    $stmt->bind_param("ssss",$firstName, $lastName, $companyName, $email);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
        }
?>