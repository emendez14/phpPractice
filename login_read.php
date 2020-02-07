<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'example');

    if($connection){
        echo 'connected';
    } else {
        die('db connection failed');
    }

    $query = "SELECT * FROM users";

   $result =  mysqli_query($connection, $query);

   if(!$result){
       die('query failed');
   }

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

while($row = mysqli_fetch_assoc($result)){
    print_r($row);
}

?>
    
</body>
</html>