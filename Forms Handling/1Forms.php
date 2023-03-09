<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Handling using PHP</title>
</head>
<body>
    <h2>Forms Handling In PHP</h2>
    <form method="post" action="1Forms.php" > 
        <h2>POST METHOD FORM</h2>
        <input type="text" name="name" placeholder="Enter Your Name" id="">
        <button type="submit">submit</button>
    </form>
    <form method="get" action="1Forms.php" > 
        <h2>GET METHOD FORM</h2>
        <input type="text" name="name" placeholder="Enter Your Name" id="">
        <button type="submit">submit</button>
    </form>

    <?php 
    // post method data has not been shown in url
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        if(empty($name)){
            echo "<h4>Enter your POST Method name</h4>";
        }else{
            echo "<h4>Your POST Method Name is : $name</h4>";
        }
    }
    // get method data will be shown in the url
    if($_SERVER['REQUEST_METHOD']=="GET"){
        $name = $_GET['name'];
        if(empty($name)){
            echo "<h4>Enter your GET Method name</h4>";
        }else{
            echo "<h4>Your GET Method Name is : $name</h4>";
        }
    }
    ?>
</body>
</html>