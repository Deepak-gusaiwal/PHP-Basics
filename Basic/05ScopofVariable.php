!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scop Of Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2>Scop Of Variables in PHP</h2>
    <?php 
    $a = 98;
    function fun1(){
        global $a;
        $a=56;
        echo "The vaiable a inside the function $a  <br>";
    }
    fun1();

    echo $a ."<br>";
    ?>

    <!-- All Global Variables -->
    <h1>All Global Variables (pre-defined)</h1>
    <?php
    var_dump($GLOBALS);
    var_dump($GLOBALS["a"]);
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>