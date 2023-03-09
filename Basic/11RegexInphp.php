<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex In PHP</title>
</head>
<body>
    <h3>Learning REGEX IN PHP</h3>
<?php 
// regular expressions in php are works in like this
// /srting/i;
//  \  (delimiter)
// string (pattern)
// i (modifier) and i makes search case-insensitive;

// some popular funtion used in regex in php

$string = "Visit Every Where Where in the Internet to Learn new things";
$pattern = "/Where/i";
echo preg_match($pattern,$string); //1 at success || when failed return 0
echo "<br>";
echo preg_match_all($pattern,$string); //will return how many matches were found
echo "<br>";
echo preg_replace($pattern,'XYZ',$string); //will return how many matches were found
?>
</body>
</html>