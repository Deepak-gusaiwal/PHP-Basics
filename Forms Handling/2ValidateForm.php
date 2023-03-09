<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate The Forms In PHP</title>
<style>
    .error{
        color: red;
    }
</style>
</head>
<body>


<?php
$name = $email = $gender = "";
$nameErr = $emailErr = $genderErr = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    // check whether the name is empty / with number or special charachter
    if(empty($_POST['name']) || (!preg_match("/^[a-zA-Z-' ]*$/",$name))){
        $nameErr= 'Name Field is required';
    }else{
        $name = trimInputs($_POST['name']);
    }
    
    // for email
    if(empty($_POST['email'])){
        $emailErr= 'email Field is required';
    }else{
        $email = trimInputs($_POST['email']);
    }

    // check the gender button is selected or not
    empty($_POST['gender']) ? $genderErr= 'Select Your Gender' : $gender = trimInputs($_POST['gender']);

//   empty($_POST['name']) ? $nameErr= 'Name Field is required' : $name = trimInputs($_POST['name']);
//   empty($_POST['email']) ? $emailErr= 'Email Filed is required' : $email = trimInputs($_POST['email']);
//   empty($_POST['gender']) ? $genderErr= 'Select Your Gender' : $gender = trimInputs($_POST['gender']);

echo "
<p>Name : <strong> $name </strong></p> 
<p>email : <strong> $email </strong></p> 
<p>gender : <strong> $gender </strong></p> 
";
}else{
    echo "<h2>Please Fill Out The Form</h2>";
}

// create a function to trim the data getting from the user
function trimInputs($inputVal){
$inputVal = trim($inputVal);//remove extra spaces and trim the data
$inputVal = stripslashes($inputVal);//remove backslashes
$inputVal = htmlspecialchars($inputVal);//convert special charachters to html entities
return $inputVal;
}
?>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
<input type="text" name="name" id="" placeholder="Enter Your Name" value="<?php echo $name ?>">
<span class="error"><?php echo "* $nameErr" ?></span> <br>

<input type="text" name="email" id="" placeholder="Enter Your Email" value="<?php echo $email ?>">
<span class="error"><?php echo"* $emailErr" ?></span> <br>

<span class="error"><?php echo"* $genderErr" ?></span> <br>
<input type="radio" name="gender" value="female" id="female"
 <?php if (isset($gender) && $gender=="female") echo "checked";?>>
  <label for="female">female</label> <br>

<input type="radio" name="gender" value="male" id="male"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
> <label for="male">male</label><br>

<button type="submit">submit</button>
</form>








</body>
</html>