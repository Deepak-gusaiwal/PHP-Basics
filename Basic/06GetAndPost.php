<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST Requested in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar started -->
    <?php require  "./includes/Navbar.php"; ?>


    <!-- here creating a Form and learn how to get data from user -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        //$_SERVER is a globall variable of PHP using it to see that the form request is post or not if that is post it will store the input values in these variables like this
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Form successfuly submitted</strong> your email is ' .$email .' and password is '. $password . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        // submit there to a database (before that need to learn how to creae a database and connect it with PHP)
    }



    ?>

    <div class="container mt-3">
        <h2>Get & POST In PHP</h2>

        <!-- form started -->
        <form action="06GetAndPost.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- form ended -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>