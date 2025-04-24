<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $settings = array(
        "Theme" => "Dark",
        "Font" => "Arial"
    );

    echo "<ul>";
    foreach ($settings as $x => $value) {
        echo "<li>$x => $value <br>";
    }
    echo "</ul>";


    ?>

</body>

</html>