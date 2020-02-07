<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="embed.php" method="POST">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>


    <?php 
    
    $name = 'hell world';
    $numberlist = array(1, 2, 3, '<h1>hell world again lol</h1>');

    // $numberlist = [1, 2, 3, 4, 'name'=>'newName']; 

    $names = array("first_number" => 'jorge', "last_name" => 'menendez');

    echo $names['first_number'] . ' ' . $names["last_name"];

    // you can use associative arrasy to make labels for indexes, for ease of access

    $x = 'text';
    function say_something($text, $number){
        echo $text . '<br>' . $number;
        global $x;
        $x = "some other text";
    }

    say_something("hell world yet agian", 123);

echo $x;

define("nameOfConstant", "value_of_constant"); // this is a constant

echo nameOfConstant;

// ORRR

const constantVal = 1234444;

echo constantVal;

?>

<h1><?php echo $numberlist[3]; ?></h1>

<script type="text/javascript" src="script.js"></script>
</body>
</html>