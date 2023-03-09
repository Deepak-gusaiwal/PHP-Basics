<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>use js in php</title>
</head>
<body>
    <!-- get 08 php file which contains js code and php code -->
    <?php 
    require "./08phpvariable.php"
    ?>
    <h2>Getting the php variable value inside js</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <script>
        console.log('php variable',jsVariable);
        let pArray = [...document.querySelectorAll('body p')];
        const AddButtons = (arr)=>{
            arr.forEach(element => {
                let button = document.createElement('button');
                let textNode = document.createTextNode(jsVariable)
                button.appendChild(textNode);
                element.after(button);
            });
        }
        AddButtons(pArray);
    </script>
</body>
</html>