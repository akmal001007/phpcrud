<?php

include 'connection.php';

$id = $_GET['updatedid'];

$sql = "select * from user where id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['firstname'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];


if(isset($_POST["submit"])){
    // $id = $_POST["ID"];
    $name = $_POST["firstname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "update user set id=$id, firstname='$name', 
            username='$username', email='$email', password='$password'
            where id=$id";

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
            <label for="">First Name</label><input type="text" name="firstname"
             placeholder="Enter Your Name" value="<?php echo $name; ?>"><br>
            <label for="">Username</label> <input type="text" name="username" 
            placeholder="Enter Your username" value="<?php echo $username; ?>"><br>
            <label for="">Email</label> <input type="email" name="email" 
            placeholder="Enter Your email" value="<?php echo $email; ?>"><br>
            <label for="">Password</label> <input type="text" name="password" 
            placeholder="Enter Your password" value="<?php echo $password; ?>"><br>
            <label for="">Confirm Password</label> <input type="text" name="confirm" placeholder="Confirm your password"><br>
            <input class="save" type="submit" name="submit" value="update">
        </form>
    </div>
</body>
</html>