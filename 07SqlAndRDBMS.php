<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL & RDBMS in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar started -->
    <?php require  "./includes/Navbar.php"; ?>


    <div class="container mt-3">
        <h2>SQL & RDBMS in PHP</h2>

        <!-- by using phpMyAdmin Create a DataBase in Mysql with the name of Deepak and also added two records in it (Employee-1 and Employee-2) -->

        <!-- Ways to connect MYSQL database with PHP -->
        <!-- 1. MySQlI extension {Procedural way (function) <|||> Object orianted(Classes & Objects)} -->
        <!-- 2. PDO (PHP Data Object) -->


        <?php
        // <!-- Connecting to the DataBase -->
        $servername = "localhost";
        $username = "root";
        $password = "d";

        // Create an Connection
        $conn = mysqli_connect($servername, $username, $password);
        // echo var_dump($conn);

        // Die the connection if connection is not successfull
        if($conn){
            echo "Connection was successfull";
        }else{
            // NOTE:- die function will stop the execution same like return in javascript
            die("Sorry We Failed to Connect :". mysqli_connect_error()) ."<br>";
            echo "Connection was unsuccessfull",mysqli_connect_error(); ;
        }

        // echo "<br>  After Die Function Call"
        ?>

        <!-- form started -->
        <!-- <form action="06GetAndPost.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
        <!-- form ended -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>