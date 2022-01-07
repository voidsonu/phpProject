<?php
$email = $_POST['email'];
$ = $_POST['password'];

// echo "FirstName: $firstName \n" ;
// echo "LastName: $lastName \t" ;
// echo "CompanyName: $companyName\n";
// echo "Email: $email";

//Database connection here
$conn = new mysqli("localhost","root","","test");
if($conn->connect_error) {
    die('Failed to connect :' .$conn->connect_error);
} else{
    $stmt=$conn->prepare("Select * from registration where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result =$stmt=get_result();
    if($stmt_result->num_row > 0){
        $data=$stmt_result->fetch_assoc();
            if($data['password']=== $password){
                echo "<h2>Login succesfully</h2>";
            }else{
                echo "<h2>Invalid Email try again</h2>";
            }
        }
    
   
        }

?>