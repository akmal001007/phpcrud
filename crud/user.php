<?php 
include 'connection.php';

if(isset($_POST["submit"])){
    $id = $_POST["ID"];
    $name = $_POST["firstname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user(firstname, username, email, password)
    VALUES ('$name', '$username', '$email', '$password')";

    $result = mysqli_query($conn, $sql);
    
    if($result){
        // echo "data inserted successfully";
        header("location:display.php");
    }else {
        die(mysqli_error($conn));
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../crud/style/style.css">
</head>
<body>
    <div class="userForm">
        <form action="" method="post">
            <label for="">First Name</label><input type="text" name="firstname" placeholder="Enter Your Name"><br>
            <label for="">Username</label> <input type="text" name="username" placeholder="Enter Your username"><br>
            <label for="">Email</label> <input type="email" name="email" placeholder="Enter Your email"><br>
            <label for="">Password</label> <input type="text" name="password" placeholder="Enter Your password"><br>
            <label for="">Confirm Password</label> <input type="text" name="confirm" placeholder="Confirm your password"><br>
            <input class="save" type="submit" name="submit" value="Save">
        </form>
    </div>
</body>
</html>