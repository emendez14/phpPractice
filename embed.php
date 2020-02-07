<?php

if(isset($_POST['submit'])) {

    $name = array("joe", "samit", "moe");
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
        echo "username has to be longer than 5";
    } elseif(strlen($username) >= $maximum){
        echo "username is too long";
    }

    if(!in_array($username, $name)){
        echo "srry you cant login";
    }
}

?>