<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $currentPageUrl = 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    ?>
    <?php
    $websiteTitle = "01 intro of php file";
    $keywords = "php, php intro, hello php";
    $description = "php is a server side language";

    $nameDataArray = [
        "dc.language" => "en-IN",
        "robots" => "index,follow",
        "dc.title" => $websiteTitle,
        "dc.description" => $description,
    ];
    $propertyArray = [
        "og:type" => "article",
        "og:image" => $currentPageUrl
    ];
    require "./includes/metaData.php";
    ?>
</head>

<body>
    <div class="container">

        <?php
        define("num", 500);
        echo num . "<br>";
        ?>

        <?php
        $AssociativeArr = array("name" => "Ram", "lastName" => "Lal", "job" => "youtuber", "Age" => 23);
        var_dump($AssociativeArr);
        echo "<br>";
        echo "His Name is " . $AssociativeArr["name"] . "<br>";
        foreach ($AssociativeArr as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        ?>

        <?php
        function fun1($a, $b)
        {
            return $a * $b;
        }
        echo fun1(20, 29);
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>