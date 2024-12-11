<?php

include 'db.php';

$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];
 
$query = "INSERT INTO users(name , email , password) VALUES ('$name' , '$email' , $password)";

mysqli_query($conn , $query);

// if (mysqli_query($conn, $query)) {
//     echo '<script> window.location.href = "index.php" </script>';
// } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($conn);
// }




?>