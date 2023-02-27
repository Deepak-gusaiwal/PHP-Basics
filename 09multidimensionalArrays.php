<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional PHP Arrays</title>
</head>

<body>
    <?php
    $data = [
        [
            "name" => "ram",
            "job" => "developer"
        ],
        [
            "name" => "shyam",
            "job" => "programer"
        ]
    ];

    foreach ($data as $innerArray) {
        foreach ($innerArray as $key => $value) {
            echo "$key : $value" . "<br>";
        }
    }
    ?>

</body>

</html>