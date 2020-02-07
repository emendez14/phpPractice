<?php include "db.php";

function createRows(){
    global $connection;
    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
    
        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";
    
       $result =  mysqli_query($connection, $query);
    
       if(!$result){
           die('query failed');
       };
    
    };
};

function pullAndSend(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('terminated' . mysqli_error());
    };

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    };
};

function updateId(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('query error') . mysqli_error($connection);
    };
};

function deleteId(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('query error') . mysqli_error($connection);
    };
};

?>