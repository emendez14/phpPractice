<?php include "db.php";
    include "functions.php";

$submit = isset($_POST['submit']);

if($submit){
    deleteId();
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="login_delete.php" method="post">
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