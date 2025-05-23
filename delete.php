<?php
if(isset($_GET['delete'])){
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db, ("DELETE from `room` WHERE `id` = '$id'"));
    if($query){
        header("Location:room.php");
    }
}
?>