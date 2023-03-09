<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .contentBox {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 1rem;
        border-radius: 1rem;
        box-shadow: 2px 2px 5px black;
    }
</style>

<body>
    <h2>For Each Loops</h2>
    <?php 
    $Array = ["Apple","banana","Bread","Harpic"];
    foreach ($Array as $value) {
      echo $value ."<br>";
    }
    $AssociateArray = array("name"=>"Deepak","age"=>23,"work"=>"web designer");
    foreach ($AssociateArray as $key => $value) {
        echo $key ." : ".$value."<br>";
    }

    // some nested arrays
    $nestArray = [
       [ "name"=>"Popular Actor",
       "age"=>"35",
       "work"=>"acting"
    ],
    [ "name"=>"UnPopular Actor",
       "age"=>"25",
       "work"=>"acting"
    ]
    ];

    echo "<br>";
    foreach ($nestArray as $data) {
       foreach ($data as $key => $value) {
        echo $key ." : ".$value."<br>";
       }
    }
  
    ?>

    <div class="container">
        <?php
        foreach ($nestArray as $data) {
             echo '
             <div class="contentBox">
             <h2>
                 <span> Name </span>  :  <span>'.$data['name'].'</span>
             </h2>
             <h2>
                 <span> Age </span>  :  <span>'.$data['age'].'</span>
             </h2>
             <h2>
                 <span> Work </span>  :  <span>'.$data['work'].'</span>
             </h2>
             </div>
             ';
         }
        ?>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>