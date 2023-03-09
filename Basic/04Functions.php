<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2>Functions in PHP</h2>
    <?php 
    function AveragePercent($studMarks){
        $sum = 0;
        
        foreach ($studMarks as  $value) {
            $sum += $value;
        }
        return $sum/count($studMarks);
    }
    $std1 = [34,34,45,65,87,98];
    $std1Marks = AveragePercent($std1);
    echo "The Marks % of Std1 is ".$std1Marks ."<br>";
    
    ?>
    <h2>Dates in PHP</h2>
    <?php 
    $d = date("dS F Y");
    echo "Todays dats is $d"."<br>";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>