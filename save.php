<?php

include 'db-connection.php';

$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpassword'];
 
$query = "INSERT INTO users(name , email , password) VALUES ('$name' , '$email' , '$password')";

$res = mysqli_query($conn , $query);

if($res){
    echo '<h1>Your Data has been saved successfully in <b>Database</b></h1>';
}else{
    echo 'Error in Query';
}

// if (mysqli_query($conn, $query)) {
//     echo '<script> window.location.href = "index.php" </script>';
// } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($conn);
// }




?>