<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
$first_name = $_POST['First Name'];
$last_name = $_POST['Last Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];



$sql = "INSERT INTO signin (first_name, last_name,email, password) VALUES ('$first_name', '$last_name','$email','$password')";
$result=mysqli_query($conn,$sql);
if(!result){
    echo "Error:" .mysqli_error($conn);
    exit;
}
echo "Registration Successful";
mysqli_close($conn);
?>


