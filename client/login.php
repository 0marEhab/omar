<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <table align="center">
        <h1>Login</h1>
        <tr>
            <th>Email:</th>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="text" name="password" /></td>
        </tr>
        <tr>
                <td>
                    <input type="submit" value="Login">
                </td>
            </tr>
    </table>


    </form>
</body>
</html>


<?php


if(isset($_POST['email'])){

    $email = $_POST['email'];

    $password = $_POST['password'];


    $connection = mysqli_connect("127.0.0.1", "root", "", "ecommerce");

$mysql = "SELECT * FROM register WHERE email='$email' AND password='$password' ";

$result = mysqli_query($connection,$mysql);

if(mysqli_num_rows($result)>0){
    header("location: ../products/index.php");
}
else{
    echo "check your email or password please";
}

}