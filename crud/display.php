<?php 

include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../crud/style/style.css">
    <style>
        div.table {
            width: 100%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        .update_btn {
            background-color: dodgerblue;
            padding:8px 10px;
            width: 49%;
        }
        .update_btn a {
            text-decoration: none;
            color: whitesmoke;
        }

        .delete_btn {
            background-color: tomato;
            padding:8px 10px;
            width: 49%;

        }
        .delete_btn a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="add_user">
        <button><a href="user.php">Add user</a></button>
    </div>

    <div class="table">
        <table border="1px solid gray">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>
    
            <?php 
            $sql = "SELECT * FROM user";
    
            $result = mysqli_query($conn, $sql);
    
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row["ID"];
                    $name = $row["firstname"];
                    $username = $row["username"];
                    $email = $row["email"];
                    $password = $row["password"];
    
                    echo '
                    <tr>
                        <td> '.$id.' </td>
                        <td> '.$name.' </td>
                        <td> '.$username.' </td>
                        <td> '.$email.' </td>
                        <td> '.$password.' </td>
                        <td> 
                      '; 
            ?>
                    <?php 
                    echo  "<button class='update_btn'><a href='update.php?updatedid= ".$id."'>Update</a></button>
                      <button class='delete_btn'><a href='delete.php?deletedid= ".$id."'>Delete</a></button>";
                    ?>
            <?php 
            echo "</td>
                    </tr>
                    ";
                }
            }
            ?>
        </table>

    </div>
</body>
</html>