<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
 
 $db = mysqli_connect("localhost", "root", "", "royal");

 if(!$db){
    echo mysqli_connect_error();
    echo "Database is not connected";
 }


 if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
}

if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    unset($admin);
    header("Location:home.php");
}

?>