<?php include "db.php"; ?>
<?php include "functions.php";?>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){
    updateId();
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="login_update.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username">

    <label for="password">password</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="update">

    <select name="id" id="">
        <?php
            pullAndSend();
        ?>
    </select>
</form>
    
</body>
</html>