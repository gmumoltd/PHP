<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<div class ="container"> 
    <h1>Running PHP</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter username" name="username">
        <button type="submit">Submit</button>
    </form>
</div>

<?php
echo "Hello Students <br>";

// variables in php
 
$name = "GEoffrey";

$age = 26;

$work = "Student at FCA";

echo "$name <br>";
echo "$age<br>" ;
echo "$work<br>";
// string Concatination  combining text 
echo "My Name is <br>" . $name;


// handling the form submission
$username = $_POST["username"];
echo $username;

// control STATEMENT
$age = 10;
 if($age >= 18){
    echo "Age is" . $age . " This is an Adult";
    }
    else{
        echo "That is a Minor";
    }


    If...

?>
</body>
</html>