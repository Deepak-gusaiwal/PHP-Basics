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

    <!-- Creating a Form for the Use OF $_REQUEST Variable of PHP -->
    <!-- ===================================================3. $_REQUEST Variable || $_POST || -->


    <form method="post" action="10superGlobalsInphp.php" >
        <input type="text" name="userName" id="" placeholder="Name">
        <input type="submit">
    </form>
    
    <?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        // $name = $_REQUEST['userName']; // way 1 to get form data
        $name = $_POST['userName']; // only work in post method forms
        if(empty($name)){
            echo "<h3>Name is Empty</h3>";
        }else{
            echo "<h3>User Name is : $name </h3>";
        }
    }
    ?>


<!-- ===================================================3. $_GET -->
<!-- this link will lead us to the textGet.php page in browser -->
<!-- <a href="10testGet.php"> Get PHP Data</a> -->

<!-- in this way we can send variables and thier values to the textGet.php -->
<!-- name is a parameter & current is also a parameter -->
<!-- we can also see their values at url of the 10textGet.php -->
<a href="10testGet.php?name=Deep&current=Learning PHP"> Get PHP Data</a>
   
</body>
</html>