<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Globals in PHP</title>
</head>
<body>
    <p>
        <strong>Super Globals :</strong>
        <span>Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</span>
    </p>
    <h4>some super Globals are:-</h4>
    <ul>
        <li>$GLOBALS (used to access global variables from anywhere in the PHP script also from within functions or methods || PHP stores all global variables in an array called $GLOBALS[index].)</li>
        <li>$_SERVER ($_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.)</li>
        <li>$_REQUEST(used to collect data after submitting an HTML form.)</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILES</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
    </ul>
    <?php
    echo "Super Globals In PHP";
    $a=24;
    $b=30;
    // =====================================================1. $Global Variables
    function add(){
        // $additionVal = $a + $b; // it will gonna give an error (does'nt know a and b inside { })
        $GLOBALS['additionVal'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    add(); // run the function
    echo $additionVal;

    // =====================================================2. $_SERVER Variables
    echo "<br>" .$_SERVER['PHP_SELF'] . "<br>"; // crrent file name;
    echo "<br>" . $_SERVER['SERVER_NAME'] . "<br>"; 
    echo "<br>" . $_SERVER['HTTP_HOST'] . "<br>"; 
    ?>
</body>
</html>