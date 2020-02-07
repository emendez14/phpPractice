<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'example');

    if($connection){
        echo 'connected';
    } else {
        die('db connection failed');
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

   $result =  mysqli_query($connection, $query);

   if(!$result){
       die('query failed');
   }

}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="login.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username">

    <label for="password">password</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>