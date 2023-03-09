<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php 
    $name ="Deepak";
    //1 find the length of the stirng
    echo "The length of the sring is ".strlen($name) ."<br>";
    //2 find the Wrods Number of the stirng
    echo "The Word Count of the sring is ".str_word_count($name) ."<br>";
    //3 find the Reverse of the stirng
    echo "The Reverse of the sring is ".strrev($name) ."<br>";
    //3 find the index of the charachter in the stirng
    echo "The index of first p characchter in the sring is ".strpos($name,"p") ."<br>";
    //3 To replace the word/charachter in the stirng
    echo "The replace p charachter with g in the sring  ".str_replace("p","g",$name) ."<br>";
    //3 To reapeat the stirng
    echo "To Repaate the sring  ".str_repeat($name,4) ."<br>";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>