<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$dbname = "";


// Create connection
$conn = mysqli_connect($servername, $username, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}

?> 