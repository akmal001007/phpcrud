<?php 

include 'connection.php';

if(isset($_GET["deletedid"])){
    $id = $_GET["deletedid"];

    $sql = "delete from user where id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:display.php');
    }else {
        "sorry try again";
    }
}
?>