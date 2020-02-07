<?php include "db.php";
    include "functions.php";
    createRows();
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form action="login_create.php" method="post">
    <label for="username">username</label>
    <input type="text" name="username">

    <label for="password">password</label>
    <input type="password" name="password">

    <input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>