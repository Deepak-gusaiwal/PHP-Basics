<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $websiteTitle; ?></title>
<meta name="keywords" content="<?php echo "$keywords"; ?>">
<meta name="description" content="<?php echo "$description"; ?>">

<link rel="canonical" href="<?php echo $currentPageUrl; ?>" />

<!-- name meta data  -->
<?php
foreach ($nameDataArray as $key => $value) {
    echo '<meta name="' . $key . '" content="' . $value . '">';
}
?>
<!-- property meta data  -->
<?php
foreach ($propertyArray as $key => $value) {
    echo '<meta property="' . $key . '" content="' . $value . '">';
}
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">